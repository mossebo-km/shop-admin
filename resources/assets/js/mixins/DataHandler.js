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
      let build = tree => {
        return tree.map(item => {
          let res = new CategoriesTreeSelectModel(item, this.languages)

          if (item.sub) {
            res.sub = build(item.sub)
          }

          return res
        })
      }

      this.categoriesTree = build(tree)
    },

    getEnabledData(data = []) {
      return data.filter(item => !!item.enabled)
    },

    getSortedData(data = []) {
      return data.sort((a, b) => a.position - b.position)
    },
  }
}