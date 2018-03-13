import Core from './'

const availableMessageTypes = [
  'alert',
  'success',
  'warning',
  'error',
  'info',
]

export default class request {
  constructor(method = 'get', url, params = {}) {
    this.isCrashed = false
    this.status = 'crashed'
    this.callbacks = []
    this.fetchRequestCancel = false
    this.isDone = false

    if (method === 'get') {
      params = {
        params: params
      }
    }

    axios[method](url, {
      ...params,
      cancelToken: new axios.CancelToken(c => this.fetchRequestCancel = c)
    })
      .then(response => {
        this._handleResponse(response)
      })
      .catch(error => {
        if (error.constructor.name === 'Cancel') return

        this.status = 'crashed'

        Core.notify('Техническая ошибка. Обратитесь к разработчикам.', {type: 'error'})
        console.log(error)

        this._done()
      })

    return this;
  }

  abort() {
    if (!this.isDone && typeof this.fetchRequestCancel === 'function') {
      this.fetchRequestCancel()
      this.fetchRequestCancel = false
    }
  }

  _handleResponse(response) {
    this.response = response;

    if (Object.keys(response.data).length !== 0) {
      const data = response.data

      if (data.redirect) {
        window.location.href = data.redirect
      }

      this.status = data.status || 'error'

      if ('message' in data) {
        if (availableMessageTypes.indexOf(this.status) === -1) return

        Core.notify(data.message, {
          type: this.status
        })
      }
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
    this.callbacks.push(callback)
  }

  success(callback) {
    this._onDone(() => {
      if (this.status !== 'fail' && this.status !== 'crashed') {
        Core.runCallback(callback, this.response)
      }
    })

    return this
  }

  fail(callback) {
    this._onDone(() => {
      if (this.status === 'fail') {
        Core.runCallback(callback, this.response)
      }
    })

    return this
  }

  crashed(callback) {
    this._onDone(() => {
      if (this.status !== 'crashed') return

      if (typeof callback === 'function') {
        callback()
      }
      else {
        throw new Error(this.response);
      }
    });

    return this
  }

  any(callback) {
    this._onDone(callback)

    return this
  }
}