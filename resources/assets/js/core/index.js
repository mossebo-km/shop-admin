import notify from './notify.js'
import requestHandler from './requestHandler.js'
import storage from './storage.js'
import dataHandler from './dataHandler.js'

export default {
  contentEditor: {
    init(query) {
      CKEDITOR.replaceAll( query )
    },
    destroy() {
      if (CKEDITOR.instances.myInstanceName) {
        CKEDITOR.instances.myInstanceName.destroy()
      }
    }
  },

  runCallback(callback) {
    if (typeof callback === 'function') {
      callback.apply(callback, Array.prototype.slice.call(arguments, 1))
    }
  },

  notify,
  requestHandler,
  storage,
  dataHandler
}