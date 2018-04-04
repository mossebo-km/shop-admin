import Core from '../core'

import Validation from './Validation'
import Base from './Base'

import { asyncPackageDataCollector } from '../core/queueHandler'


/*
  Загрузка данных модели
 */
const fetchEntity = function(path) {
  return new Core.requestHandler('get', '/api' + path)
}

const isCreation = function (path) {
  return path.indexOf('create') !== -1
}

export default {
  mixins: [Validation, Base],

  props: [
    'type',
  ],

  methods: {
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
      this.errors.clear()

      this.saveDisabled = true
      this.$validator.validateAll()
        .then(result => {
          if (!result) {
            this.saveDisabled = false
            this.$refs.validationModal.show()
            return
          }

          const data = this.getToSaveData()

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
              .success(response => this.pullModelFromResponse(response))
              .fail(response => {
                if (response.data.errors) {
                  this.setValidationErrors(response.data.errors)
                  this.$refs.validationModal.show()
                }
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
    pullModelFromResponse(response) {
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
    this.createQueue()
    this.extendSlugChecker()
  },

  beforeRouteEnter (to, from, next) {
    const a = new asyncPackageDataCollector()
    // todo: suppliers должны грузиться только в товарах
    a.add(() => Core.dataHandler.get(['categories-tree', 'languages', 'suppliers']))

    if (!isCreation(to.path)) {
      a.add(fetchEntity(to.path))
    }

    a.onDone(data => {
      next(vm => {
        vm.initData(data)
      })
    })

    a.start()
  },

  beforeRouteUpdate(to, from, next) {
    if (isCreation(to.path)) {
      next()
      return
    }

    const a = new asyncPackageDataCollector()

    a.add(fetchEntity(to.path))

    a.onDone(data => {
      this.pullModelFromResponse({data})
      next()
    })

    a.start()
  },

  beforeDestroy() {
    this.clearQueue()
  },
}