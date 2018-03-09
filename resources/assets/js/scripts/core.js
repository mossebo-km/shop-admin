import noty from '../scripts/noty.js'

export default {
  contentEditor: {
    init(query) {
      CKEDITOR.replaceAll( query, )
    },
    destroy() {
      if (CKEDITOR.instances.myInstanceName) {
        CKEDITOR.instances.myInstanceName.destroy()
      }
    }
  },

  requestErrorHandler(error) {
    noty('Техническая ошибка. Обратитесь к разработчикам.', {type: 'error'})
    console.log(error)
  }
}