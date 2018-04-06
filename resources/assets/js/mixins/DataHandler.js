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

    getEnabledData(data = []) {
      return data.filter(item => !!item.enabled)
    },

    getSortedData(data = []) {
      return data.sort((a, b) => a.position - b.position)
    }
  }
}