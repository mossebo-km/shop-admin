import Core from './'

const availableMessageTypes = [
  'alert',
  'success',
  'warning',
  'error',
  'info',
]

export default class apiRequest {
  constructor(method = 'get', url, data = {}, configParams = {}) {
    this.isCrashed = false
    this.status = 'crashed'
    this.callbacks = []
    this.fetchRequestCancel = false
    this.isDone = false
    this.response = null

    let config = {
      method: method,
      url: url,
    }

    data = {
      api_token: Core.getApiToken(),
      ... data
    }

    if (['post', 'put', 'patch'].indexOf(method) !== -1) {
      config.data = data
    }
    else {
      config.params = data
    }

    this.config = {
      ...config,
      ...configParams,
      cancelToken: new axios.CancelToken(c => this.fetchRequestCancel = c)
    }

    return this
  }

  start() {
    axios.request(this.config)
      .then(response => {
        this._handleResponse(response)
      })
      .catch(error => {
        if (error.constructor.name === 'Cancel') return

        let response = error.response || {}

        if ('data' in response && typeof response.data === 'object' && response.data !== null && Object.keys(response.data).length !== 0) {
          this._handleResponse(response)
          return
        }
        else if (response.status >= 500) {
          Core.notify('Техническая ошибка. Обратитесь к разработчикам.', {type: 'error'})
          this.status = 'crashed'
        }
        else if (response.status === 404) {
          this.status = '404'
        }

        this._done()
      })

    return this
  }

  abort() {
    if (!this.isDone && typeof this.fetchRequestCancel === 'function') {
      this.fetchRequestCancel()
      this.fetchRequestCancel = false
    }
  }

  _handleResponse(response) {
    this.response = response;

    const data = response.data

    if (data.redirect) {
      let redirect = data.redirect

      if (redirect.indexOf('/') === 0) {
        redirect = '/' + Core.trim(redirect, '/')
      }

      window.location.href = redirect
      return
    }

    this.status = data.status || 'success'

    if (data.message) {
      if (availableMessageTypes.indexOf(this.status) === -1) return

      Core.notify(data.message, {
        type: this.status
      })
    }

    if (data.withData) {
      Core.dataHandler.setDataToStorage(data.withData)
    }

    this._done()
  }

  _done() {
    this.isDone = true

    this.callbacks.forEach(callback => {
      Core.runCallback(callback, this.response)
    })
  }

  _onDone(callback) {
    if (this.isDone) {
      Core.runCallback(callback, this.response)
    }
    else {
      this.callbacks.push(callback)
    }
  }

  success(callback) {
    this._onDone(() => {
      if (this.status !== 'error' && this.status !== 'crashed') {
        Core.runCallback(callback, this.response)
      }
    })

    return this
  }

  fail(callback) {
    this._onDone(() => {
      if (this.status === 'error') {
        Core.runCallback(callback, this.response)
      }
    })

    return this
  }

  crash(callback) {
    this._onDone(() => {
      if (this.status !== 'crashed') return

      Core.runCallback(callback)
    })

    return this
  }

  notFound(callback) {
    this._onDone(() => {
      if (this.status !== '404') return

      Core.runCallback(callback)
    })

    return this
  }

  any(callback) {
    this._onDone(callback)

    return this
  }
}