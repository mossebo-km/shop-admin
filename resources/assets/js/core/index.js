import notify from './notify.js'
import requestHandler from './requestHandler.js'
import storage from './storage.js'
import dataHandler from './dataHandler.js'
import transliteration from './transliteration'

export default {
  runCallback(callback) {
    if (typeof callback === 'function') {
      callback.apply(callback, Array.prototype.slice.call(arguments, 1))
    }
  },

  capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1)
  },

  notify,
  requestHandler,
  storage,
  dataHandler,

  transliteration,
  makeUrl(string) {
    return this.transliteration(string.toLowerCase().replace('_', '-').replace(/\s/g, '-'), true)
  }
}