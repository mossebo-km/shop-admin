import Core from './'

export default {
  storageKey: 'interactionDataKey',

  get(dataLabels) {
    this.dataLabels = dataLabels
    this.data = {}

    return this.getRelevantKey()
      .then(key => {
        if (key === Core.storage.get(this.storageKey)) {
          return this.getFromStorage()
        }
        else {
          Core.storage.add(this.storageKey, key)
          return this.getFromServer()
        }
      })

  },

  getRelevantKey() {
    return new Promise((resolve) => {
      new Core.requestHandler('get', '/api/data/relevantKey')
        .success(response => {
          const key = response.data.key
          resolve(key)
        })
        .start()
    })
  },

  getFromStorage() {
    return new Promise(resolve => {
      for (let i = 0; i < this.dataLabels.length; i++) {
        let label = this.dataLabels[i]
        let fromLocalStorage = Core.storage.get(label)

        if (fromLocalStorage) {
          this.data[label] = fromLocalStorage
          this.dataLabels.splice(i, 1)
        }
      }

      if (this.dataLabels.length === 0) {
        resolve(this.data)
      }
      else {
        resolve(this.getFromServer())
      }
    })
  },

  getFromServer() {
    return new Promise((resolve) => {
      new Core.requestHandler('get', '/api/data', {
        responseType: 'json',
        labels: this.dataLabels
      })
        .success(response => {
          const data = response.data.data

          for (let i in data) {
            Core.storage.add(i, data[i])
          }

          this.data = {
            ... this.data,
            ... response.data.data
          }

          resolve(this.data)
        })
        .start()
    })
  }
}