
import CategoriesTreeSelectModel from '../resources/CategoriesTreeSelectModel'

export default {
  methods: {
    initCurrencies(currencies = []) {
      this.currencies = this.getSortedData(this.getEnabledData(currencies))
    },

    initPriceTypes(prices = []) {
      this.priceTypes = this.getSortedData(this.getEnabledData(prices))
    },

    initLanguages(languages = []) {
      this.languages = this.getSortedData(this.getEnabledData(languages))
    },

    initSuppliers(suppliers = []) {
      this.suppliers = this.getSortedData(this.getEnabledData(suppliers)).map(item => ({
        id: item.id,
        title: item.name
      }))
    },

    initCategoriesTree(tree = []) {
      this.categoriesTree = tree.map(item => new CategoriesTreeSelectModel(item, this.languages))
    },

    getEnabledData(data = []) {
      return data.filter(item => !!item.enabled)
    },

    getSortedData(data = []) {
      return data.sort((a, b) => a.position - b.position)
    },
  }
}