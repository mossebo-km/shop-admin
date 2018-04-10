import Core from '../core'

import Base from './Base'
import DataHandler from './DataHandler'

export default {
  mixins: [
    Base, DataHandler
  ],

  data() {
    return {
      usedMainData: [],
    }
  },

  methods: {
    /**
     * Загрузка всех необходимых данных.
     */
    loadData() {
      this.fetchMainData()
        .then(data => this.initMainData(data))
    },

    /**
     * Загрузка основных общих данных.
     *
     * @returns Promise
     */
    fetchMainData() {
      if (this.usedMainData) {
        return Core.dataHandler.get(this.usedMainData)
      }
      else {
        return new Promise(resolve => resolve([]))
      }
    },

    /**
     * Инициализация основных данных.
     *
     * @param data
     */
    initMainData(data = {}) {
      for (let i in data) {
        let methodName = 'init' + Core.camelize(i, true)

        if (typeof this[methodName] === "function") {
          this[methodName](data[i])
        }
        else {
          let variableName = Core.camelize(i)
          this[variableName] = data[i]
        }
      }
    },
  }
}