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
      componentInitializedWithUrl: null
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
      this.usedMainData.forEach(label => {
        if (! label in data) return

        let methodName = 'init' + Core.camelize(label, true)

        if (typeof this[methodName] === "function") {
          this[methodName](data[label])
        }
        else {
          let variableName = Core.camelize(label)
          this[variableName] = data[label]
        }
      })
    },

    /*
      Подготавливает url.
    */
    prepareUrl(segment, segmentIsUrl = false) {
      let url

      url = segmentIsUrl ? segment : this.componentInitializedWithUrl.replace('create', '')

      url = Core.trim(url, '/')

      if (segment && !segmentIsUrl) {
        url += '/' + Core.trim(segment, '/')
      }

      return `/api/${url}`
    },
  },

  created() {
    this.componentInitializedWithUrl = this.$route.path
  }
}