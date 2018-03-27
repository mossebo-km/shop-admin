import Validation from './Validation'
import { Validator } from 'vee-validate'
import Core from '../core'

export default {
  mixins: [Validation],
  methods: {
    /*
      Подготавливает url.
    */
    prepareUrl(segment) {
      let url = Core.trim(this.$route.path.replace('create', ''), '/')

      if (segment) {
        url += '/' + Core.trim(segment, '/')
      }

      return `/api/${url}`
    },

    /*
      Отдает подготовленные для сохранения данные модели.
    */
    getToSaveData() {
      return {
        ... this.getModel()
      }
    },



    fetchEntity() {
      this.dataQueue.add(new Core.requestHandler('get', this.prepareUrl()))
        .onDone()
          .success(this.pullModelFromResponse)
          .fail(response => {
            if (response.status === 404 && this.type === 'edit') {
              Core.notify('Запись не найдена.', {type: 'error'})
              this.$router.push('/products')
            }
          })
    },

    /*
      Вытаскивает данные модели из ответа сервера.
    */
    pullModelFromResponse(response) {
      this.initModel(response.data.model)
    },

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
              .success(this.pullModelFromResponse)
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
          this.$router.push('/products')
        })
        .start()
    },

    clearQueue() {
      this.dataQueue.clear()
      this.saveQueue.clear()
    },
  },

  created() {
    this.dataQueue = Core.queueHandler.makeQueue('iteration', 'entity-data')
    this.saveQueue = Core.queueHandler.makeQueue('block', 'entity-save')

    Validator.extend('slug_exist', {
      getMessage: field => `Slug занят.`,
      validate: slug => new Promise(resolve => {
        new Core.requestHandler('get', this.prepareUrl('slug'), {slug})
          .success(() => resolve( {valid: true} ))
          .fail(() => resolve( {valid: false} ))
          .start()
      })
    })
  },
}