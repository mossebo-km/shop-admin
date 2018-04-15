import Core from './'

export default {
  key: null,
  storageKeyName: 'dataKey',
  dataLabels: false,
  storageDataLabelsName: 'dataLabels',

  get(dataLabels = []) {
    this.data = {}

    if (dataLabels.length === 0) {
      return new Promise(resolve => resolve([]))
    }

    return this.getRelevantKey()
      .then(key => {
        if (key === this.getCurrentKey()) {
          return this.getFromStorage(dataLabels)
        }
        else {
          this.setCurrentKey(key)
          return this.getFromServer(dataLabels)
        }
      })

  },

  setCurrentKey(key) {
    if (this.getCurrentKey() !== key) {
      this.flush()
      this.key = key
      Core.storage.add(this.storageKeyName, key)
    }
  },

  getCurrentKey() {
    if (this.key === null) {
      this.key = Core.storage.get(this.storageKeyName)
    }

    return this.key
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

  getFromStorage(dataLabels) {
    dataLabels = this.prepareDataLabels(dataLabels)

    return new Promise(resolve => {
      for (let i = dataLabels.length; i >= 0; i--) {
        let label = dataLabels[i]
        let fromLocalStorage = Core.storage.get(label)

        if (typeof fromLocalStorage !== 'undefined' && fromLocalStorage !== null) {
          this.data[label] = fromLocalStorage
          dataLabels.splice(i, 1)
        }
      }

      if (dataLabels.length === 0) {
        resolve(this.data)
      }
      else {
        resolve(this.getFromServer(dataLabels))
      }
    })
  },

  getFromServer(dataLabels) {
    dataLabels = this.prepareDataLabels(dataLabels)

    return new Promise((resolve) => {
      new Core.requestHandler('get', '/api/data', {
        responseType: 'json',
        labels: dataLabels,
      })
        .success(response => {
          let data = response.data.data

          if (dataLabels.length === 1) {
            data = {
              [dataLabels[0]]: data
            }
          }

          this.setDataToStorage(data)

          this.data = {
            ... this.data,
            ... data
          }

          resolve(this.data)
        })
        .start()
    })
  },

  prepareDataLabels(dataLabels = []) {
    return [
      ...dataLabels
    ]
  },

  setDataToStorage(data) {
    if ('key' in data) {
      this.setCurrentKey(data.key)
      delete data.key
    }

    let labels = []

    for (let i in data) {
      labels.push(i)
      Core.storage.add(i, data[i])
    }

    this.addDataLabels(labels)
  },

  addDataLabels(labels = []) {
    this.dataLabels = [
      ... this.dataLabels || [],
      ... labels
    ]

    if (this.dataLabels.length > 0) {
      Core.storage.add(this.storageDataLabelsName, this.dataLabels)
    }
  },

  getDataLabels() {
    if (this.dataLabels === false) {
      this.dataLabels = Core.storage.add(this.storageDataLabelsName) || []
    }

    return this.dataLabels
  },


  flush() {
    this.getDataLabels().forEach(label => {
      Core.storage.forget(label)
    })

    Core.storage.forget(this.storageKeyName)
    Core.storage.forget(this.storageDataLabelsName)
  },
}