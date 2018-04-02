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
  methods: {
    /*
      Отдает подготовленные для сохранения данные модели.
     */
    getToSaveData() {
      return {
        ... this.getEntityModel()
      }
    },

    /*
      Возврат к списку сущностей
     */
    redirectToTable() {
      let currentPath = this.$route.path
      let fin = this.$route.path.indexOf('/' + this.id)
      this.$router.push(currentPath.substr(0, currentPath.length - (currentPath.length - fin)))
    },

    /*
      Сохранение сущности
     */
    save() {
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
              .success(response => {
                this.errors.clear()
                this.pullModelFromResponse(response)
              })
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

    /*
      Показ модального окна перед удалением записи.
     */
    remove() {
      var _ = this;

      if (this.type !== 'edit') return

      this.$refs.removeModal.show()
    },

    /*
      При подтвержении удаления записи.
     */
    removeConfirm() {
      new Core.requestHandler('delete', this.prepareUrl())
        .success(() => {
          this.redirectToTable()
        })
        .start()
    },

    /*
      Создание очередей
     */
    createQueue() {
      this.saveQueue = Core.queueHandler.makeQueue('break', 'entity-save')
    },

    /*
      Отчистка очередей.
     */
    clearQueue() {
      this.saveQueue.clear()
    },

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