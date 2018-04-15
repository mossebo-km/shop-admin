<script>
  import Core from '../core'
  import number from '../directives/number'
  import Loading from './Loading.vue'
  import CurrencyConverter from './converters/CurrencyConverter'

  export default {
    props: {
      prices: {
        type: Object,
        required: true
      }
    },

    directives: {
      ... number,
    },

    data() {
      return {
        loading: true,
        currencies: [],
        priceTypes: [],
        rPrices: this.prices,
      }
    },

    components: {
      Loading,
      CurrencyConverter
    },

    watch: {
      'prices': 'initPrices'
    },

    methods: {
      fetchMainData() {
        this.loading = true
        Core.dataHandler.get(['price-types', 'currencies'])
          .then(data => {
            this.priceTypes = data['price-types'].filter(item => !!item.enabled).sort((a, b) => a.position - b.position)
            this.currencies = data['currencies'].filter(item => !!item.enabled).sort((a, b) => a.position - b.position)
            this.initPrices()
            this.loading = false
          })
      },

      getCurrency(currencyCode) {
        return this.currencies.find(item => item.code === currencyCode)
      },

      onChange() {
        this.$emit('update:prices', this.rPrices)
      },

      initPrices() {
        let result = {}

        this.priceTypes.forEach(priceType => {
          if (! (priceType.id in result)) {
            result[priceType.id] = {}
          }

          this.currencies.forEach(currency => {
            if (! (currency.code in result[priceType.id])) {
              result[priceType.id][currency.code] = ''

              if (priceType.id in this.prices && currency.code in this.prices[priceType.id]) {
                result[priceType.id][currency.code] = this.prices[priceType.id][currency.code]
              }
            }
          })
        })

        this.rPrices = result
      },
    },

    created() {
      this.fetchMainData()
    },
  }
</script>


<template>
  <div class="table-responsive">
    <loading :loading="loading">
      <table class="table table-bordered table-striped table-vcenter prices-table" v-if="! loading">
        <thead>
          <tr>
            <th>Тип</th>
            <th v-for="currency in currencies">{{ currency.name }}, {{ currency.code }}</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="priceType in priceTypes">
            <td><span class="prices-table__type">{{ priceType.title }}</span></td>
            <td v-for="currency in currencies">
              <div class="input-group">
                <input type="text" v-model="rPrices[priceType.id][currency.code]" v-number @input="onChange" class="form-control">
                <currency-converter :value="rPrices[priceType.id][currency.code]" :currency="getCurrency(currency.code)"></currency-converter>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </loading>
  </div>
</template>