<script>
  import {ErrorBag} from 'vee-validate'
  import Core from '../../core'
  import number from '../../directives/number'
  import Loading from '../Loading.vue'
  import CurrencyConverter from '../converters/CurrencyConverter'

  export default {
    props: {
      prices: {
        type: Object,
        required: true
      },
      errors: {
        type: ErrorBag,
        default: () => new ErrorBag()
      },
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

      hasError(name) {
        return this.errors.has(name) || this.formErrors.has(name)
      },

      getError(name) {
        return this.errors.first(name) || this.formErrors.first(name)
      },

      // todo: аналогичная функция в TreeSelectTranslatable

      getTitle(priceType) {
        let title = priceType.i18n[this.activeLanguageCode].title

        if (! title && this.defaultLanguageCode) {
          title = priceType.i18n[this.defaultLanguageCode].title
        }

        return title
      },

      getCurrencyMaxValue(currency) {
        return 2147483647 / Math.pow(10 , currency.precision)
      }
    },

    created() {
      this.fetchMainData()
    },
  }
</script>


<template>
  <div class="table-responsive">
    <loading :loading="loading">
      <table class="table table-bordered table-striped table-vcenter prices-table" v-if="! loading" style="min-width: 956px">
        <thead>
          <tr>
            <th>Тип</th>
            <th v-for="currency in currencies">{{ currency.name }}, {{ currency.code }}</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="priceType in priceTypes">
            <td>
              <span class="prices-table__type">{{ getTitle(priceType) }}</span>
            </td>

            <td v-for="currency in currencies" :class="{'has-error': hasError(`prices.${priceType.id}.${currency.code}`)}">
              <div class="input-group">
                <input
                  type="text"
                  v-model="rPrices[priceType.id][currency.code]"
                  :name="`prices.${priceType.id}.${currency.code}`"
                  @input="onChange" class="form-control"
                  v-number
                  v-validate="'integer|min_value:1|max_value:4294967295'" />

                <currency-converter :value="rPrices[priceType.id][currency.code]" :currency="getCurrency(currency.code)" />

                <input
                  type="text"
                  v-model="prices$[priceType.id][currency.code]"
                  :name="`prices.${priceType.id}.${currency.code}`"
                  @input="onChange" class="form-control"
                  v-number
                  v-validate="`integer|min_value:1|max_value:${getCurrencyMaxValue(currency)}`">

                <currency-converter :value="prices$[priceType.id][currency.code]" :currency="getCurrency(currency.code)" />
              </div>

              <span v-show="hasError(`prices.${priceType.id}.${currency.code}`)" class="help-block">
                {{ getError(`prices.${priceType.id}.${currency.code}`) }}
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </loading>
  </div>
</template>