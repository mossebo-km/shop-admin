import CategoriesTreeSelectModel from '../resources/shop/CategoriesTreeSelectModel'
import PriceTypeDataModel from '../resources/shop/PriceTypeDataModel'
import SupplierDataModel from '../resources/shop/SupplierDataModel'
import RoomDataModel from '../resources/shop/RoomDataModel'
import StyleDataModel from '../resources/shop/StyleDataModel'

import Core from "../core";

export default {
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
      return this.fetchMainData()
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

    initCurrencies(currencies = []) {
      this.currencies = this.getSortedData(this.getEnabledData(currencies))
    },

    initPriceTypes(prices = []) {
      this.priceTypes = this.getSortedData(this.getEnabledData(prices)).map(item => new PriceTypeDataModel(item, this.languages))
    },

    initLanguages(languages = []) {
      this.languages = this.getSortedData(this.getEnabledData(languages))
    },

    initSuppliers(suppliers = []) {
      this.suppliers = this.getSortedData(this.getEnabledData(suppliers)).map(item => new SupplierDataModel(item))
    },

    initCategoriesTree(tree = []) {
      this.categoriesTree = tree.map(item => new CategoriesTreeSelectModel(item, this.languages))
    },

    initStyles(styles) {
      this.styles = this.getSortedData(this.getEnabledData(styles)).map(item => new StyleDataModel(item, this.languages))
    },

    initRooms(rooms) {
      this.rooms = this.getSortedData(this.getEnabledData(rooms)).map(item => new RoomDataModel(item, this.languages))
    },

    initRoles(roles = []) {
      this.roles = this.getSortedData(roles)
        // .map(item => new AdminRoleModel(item))
    },

    getEnabledData(data = []) {
      return data.filter(item => !!item.enabled)
    },

    getSortedData(data = []) {
      return data.sort((a, b) => {
        let res = a.position - b.position

        if (res === 0 && a.id && b.id) {
          res = a.id - b.id
        }

        return res
      })
    },
  }
}