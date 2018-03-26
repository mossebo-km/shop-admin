import notify from './notify.js'
import requestHandler from './apiRequest.js'
import storage from './storage.js'
import dataHandler from './dataHandler.js'
import transliteration from './transliteration'
import queueHandler from './queueHandler'

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
  queueHandler,

  transliteration,

  makeUrl(string) {
    return this.transliteration(string.toLowerCase().replace('_', '-').replace(/\s/g, '-'), true).replace(/[^0-9a-zA-Z\-]+/g, '')
  },

  trim (str, symbol = ' ') {
    let before = new RegExp(`${symbol}$`)
    let after = new RegExp(`^${symbol}`)

    return str.replace(before, '').replace(after, '')
  },

  // uniqueId (idStrLen = 16) {
  //   let idStr = (Math.floor((Math.random() * 25)) + 10).toString(36) + "_"
  //   idStr += (new Date()).getTime().toString(36) + "_"

  //   do {
  //     idStr += (Math.floor((Math.random() * 35))).toString(36)
  //   } while (idStr.length < idStrLen)

  //   return (idStr);
  // }
}