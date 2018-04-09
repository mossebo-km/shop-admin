import Core from '../core'

import Validation from './Validation'
import Page from './Page'

import { asyncPackageDataCollector } from '../core/queueHandler'


export default {
  mixins: [
    Validation,
    Page
  ],

  props: [
    'type',
  ],

  data() {
    return {
      reloadDataOnSave: false
    }
  },

  methods: {
    /**
     * Загрузка данных.
     */
    loadData() {
      const a = new asyncPackageDataCollector()
      a.add(() => this.fetchMainData())

      if (this.type === 'edit') {
        a.add(this.fetchEntity())
      }

      a.onDone(data => {
        this.initData(data)
      })

      a.start()
    },

    /**
     * Загрузка данных модели.
     *
     * @returns apiResponse
     */
    fetchEntity() {
      return new Core.requestHandler('get', this.prepareUrl())
        .notFound(() => {
          Core.notify('Товар не найден.', {type: 'warning'})
          this.redirectToTable()
        })
    },

    /**
     * Возвращает название сущности.
     *
     * @return string
     */
    getEntityName() {
      return this.entityName
    },

    /**
     * Возвращает модель.
     *
     * @return {[type]} [description]
     */
    getEntityModel() {
      return this[this.getEntityName()]
    },

    /**
     * Установка данных модели.
     *
     * @param data
     */
    setEntityData(data = {}) {
      this[this.entityName] = data
    },

    /**
     * Возвращает подготовленные для сохранения данные.
     *
     * @returns {{}}
     */
    getToSaveData() {
      return {
        ... this.getEntityModel()
      }
    },

    /**
     * Инициализация данных.
     *
     * @param data
     */
    initData(data) {
      this.initMainData(data)
      this.initEntity(data[this.getEntityName()])
    },

    /**
     * Инициализация модели сущности.
     *
     * @param data
     */
    initEntity(data = {}) {
      let entity = this.makeEntityBaseData(data)

      this.setEntityData(entity)
    },

    /**
     * Инициализация основных данных модели.
     *
     * @param data
     */
    makeEntityBaseData(data = {}) {
      let entity = {}

      for (let fieldName in this.defaultFieldsValues) {
        if (fieldName in data) {
          entity[fieldName] = data[fieldName]
        }
        else {
          entity[fieldName] = this.defaultFieldsValues[fieldName]
        }
      }

      return entity
    },

    /**
     * Возврат к списку сущностей.
     */
    redirectToTable() {
      let currentPath = this.$route.path
      let fin = this.$route.path.indexOf('/' + this.id)
      this.$router.push(currentPath.substr(0, currentPath.length - (currentPath.length - fin)))
    },

    /**
     * Сохранение сущности.
     */
    save() {
      this.formErrors.clear()

      this.saveDisabled = true
      this.$validator.validateAll()
        .then(result => {
          if (!result) {
            this.saveDisabled = false
            this.$refs.validationModal.show()
            return
          }

          let data = this.getToSaveData()

          if (this.reloadDataOnSave !== false) {
            data = {
              ... data,
              withData: this.usedMainData
            }
          }

          let requestType;

          if (this.type === 'create') {
            requestType = 'post'
          }

          if (this.type === 'edit') {
            requestType = 'put'
          }

          const request = new Core.requestHandler(requestType, this.prepareUrl(), data)

          this.saveQueue.add(request)
            .onDone()
              .success(response => this.pullDataFromResponse(response))
              .fail(response => {
                if (response.data.errors) {
                  this.setValidationErrors(response.data.errors)
                  this.$refs.validationModal.show()
                }
              })
              .notFound(() => {
                Core.notify('Товар был удален до внесения изменений.', {type: 'warning'})
                this.redirectToTable()
              })
              .any(() => {
                this.saveDisabled = false
              })

        })
    },

    /**
     * Инициализация данных модели, полученных из ответ сервера.
     *
     * @param response
     */
    pullDataFromResponse(response) {
      if (this.reloadDataOnSave) {
        this.initData({
          [this.getEntityName()]: response.data[this.getEntityName()],
          ...response.data.withData
        })
      }

      this.initEntity(response.data[this.getEntityName()])
    },

    /**
     * Показ модального окна перед удалением записи.
     */
    remove() {
      var _ = this;

      if (this.type !== 'edit') return

      this.$refs.removeModal.show()
    },

    /**
     * При подтвержении удаления записи.
     */
    removeConfirm() {
      new Core.requestHandler('delete', this.prepareUrl())
        .success(() => {
          this.redirectToTable()
        })
        .start()
    },

    /**
     * Создание очередей.
     */
    createQueue() {
      this.saveQueue = Core.queueHandler.makeQueue('break', 'entity-save')
    },

    /**
     * Отчистка очередей.
     */
    clearQueue() {
      this.saveQueue.clear()
    },

    /**
     * Сброс комонента.
     */
    reset() {
      this.clearQueue()
    },
  },

  created() {
    this.loadData()
    this.createQueue()
    this.extendSlugChecker()
  },

  beforeDestroy() {
    this.clearQueue()
  },
}