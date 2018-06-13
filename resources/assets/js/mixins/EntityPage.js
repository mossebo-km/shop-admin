import Core from '../core'

import Validation from './Validation'
import Page from './Page'
import Queueable from './Queueable'

import { asyncPackageDataCollector } from '../core/queueHandler'

import HandleableException from '../exceptions/HandleableException'


export default {
  mixins: [
    Validation,
    Page,
    Queueable
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

      this.$nextTick(() => {
        this.$emit('beforeDataLoad', a)

        a.start()
      })
    },

    /**
     * Загрузка данных модели.
     *
     * @returns apiResponse
     */
    fetchEntity() {
      return new Core.requestHandler('get', this.makePageApiUrl())
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
      return this[Core.camelize(this.entityName)]
    },

    /**
     * Установка данных модели.
     *
     * @param data
     */
    setEntityData(data = {}) {
      this[Core.camelize(this.entityName)] = data
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
      this.setEntityData(data)
    },

    /**
     * Возврат к списку сущностей.
     */
    redirectToTable() {
      let path

      switch (this.type) {
        case 'create':
          path = this.$route.path.replace('/create', '')
          break
        case 'edit':
          path = this.$route.path.replace('/' + this.id, '')
          break
      }

      if (window.history.state) {
        let previousPath = window.history.state.previousPath

        if (previousPath && previousPath !== path && previousPath.indexOf(path) !== -1) {
          this.$router.go(-1)
          return
        }
      }

      this.$router.push(path)
    },

    /**
     * Сохранение сущности.
     */
    save() {
      this.formErrors.clear()

      this.$validator.validateAll()
        .then(result => {
          if (!result) {
            this.$refs.validationModal.show()
            return
          }

          let data

          try {
            data = this.getToSaveData()
          }
          catch(e) {
            if (e instanceof HandleableException) {
              Core.notify(e.getNotifyParams())
              return
            }
            else {
              throw e
            }
          }

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

          const request = new Core.requestHandler(requestType, this.makePageApiUrl(), data)
            .success(response => {
              if (this.type === 'create') {
                window.location.href = this.makePageUrl(response.data.id)
              }

              if (this.type === 'edit') {
                this.pullDataFromResponse(response)
              }
            })
            .fail(response => {
              let errors

              try {
                errors = response.data.errors
              }
              catch(e) {}

              this.setValidationErrors(errors || [])

              if (errors) {
                this.$refs.validationModal.show()
              }
            })
            .notFound(() => {
              Core.notify('Товар был удален до внесения изменений.', {type: 'warning'})
              this.redirectToTable()
            })

          this.addToQueue('save', request)
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
      new Core.requestHandler('delete', this.makePageApiUrl())
        .success(() => {
          this.redirectToTable()
        })
        .start()
    },

    /**
     * Сброс комонента.
     */
    reset() {
      this.clearQueues()
    },
  },

  created() {
    if (this.type === 'create' && !this.userCan(`create`)) {
      this.redirectToTable()
      return
    }

    if (this.type === 'edit' && !this.userCan(`see`)) {
      this.redirectToTable()
      return
    }

    this.addQueue('save', 'break')
    this.loadData()
    this.extendSlugChecker()
  },
}