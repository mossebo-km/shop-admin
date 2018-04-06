import notify from './notify.js'
import requestHandler from './apiRequest.js'
import storage from './storage.js'
import dataHandler from './dataHandler.js'
import transliteration from './transliteration'
import queueHandler from './queueHandler'
import auth from './auth'

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
  auth,

  transliteration,

  makeUrl(string) {
    return this.transliteration(string.toLowerCase().replace('_', '-').replace(/\s/g, '-'), true).replace(/[^0-9a-zA-Z\-]+/g, '')
  },

  trim (str, symbol = ' ') {
    let before = new RegExp(`${symbol}$`)
    let after = new RegExp(`^${symbol}`)

    return str.toString().replace(before, '').replace(after, '')
  },

  formatPrice(value, currency) {
    let formatted = new Intl.NumberFormat('ru-RU', {
      style: 'currency',
      currency: currency.code,
      maximumFractionDigits: currency.precision
    })

    value = (value || 0).toString().replace(',', '.')

    return formatted.format(value).replace(',' + ''.padStart(currency.precision, '0'), '')
  },

  addApiTokenToUrl(url) {
    if (url.indexOf('?') === -1) {
      url += '?'
    }
    else {
      url += '&'
    }

    return url + 'api_token=' + this.getApiToken()
  },

  getApiToken() {
    return window.config.userToken
  },

  camelize(str, capitalizeFirstLetter = false) {
    let replaceFunc
    if (capitalizeFirstLetter) {
      replaceFunc = letter => letter.toUpperCase()
    }
    else {
      replaceFunc = (letter, index) => {return index === 0 ? letter.toLowerCase() : letter.toUpperCase()}
    }

    return str.replace(/(?:^\w|[A-Z]|\b\w)/g, replaceFunc).replace(/[\_\-\s]+/g, '')
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