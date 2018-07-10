<script>
  import bTable from 'bootstrap-vue/es/components/table/table'
  import bPagination from 'bootstrap-vue/es/components/pagination/pagination'
  import bFormSelect from 'bootstrap-vue/es/components/form-select/form-select'
  import bModal from 'bootstrap-vue/es/components/modal/modal'
  import bDropdown from 'bootstrap-vue/es/components/dropdown/dropdown'
  import bDropdownItem from 'bootstrap-vue/es/components/dropdown/dropdown-item'

  import Core from '../../../core'

  import Toggle from '../../Toggle'
  import Loading from '../../Loading'
  import SearchInput from '../../SearchInput'
  import Dropdown from '../../Dropdown'
  import LanguagePicker from '../../LanguagePicker'

  import TablePage from '../../../mixins/TablePage'
  import Translatable from '../../../mixins/Translatable'
  import StatusChangeable from '../../../mixins/StatusChangeable'

  import ProductsTableModel from '../../../resources/shop/ProductsTableModel'

  const defaultTableState = {
    sortBy: 'id',
    sortDesc: false,
    page: 1,
    perPage: 15,
    searchPhrase: '',
    type: 'all'
  }


  export default {
    name: 'products-table',

    mixins: [
      StatusChangeable,
      TablePage,
      Translatable,
    ],

    components : {
      Toggle,
      Loading,
      bTable,
      bPagination,
      bFormSelect,
      bModal,
      SearchInput,
      bDropdown,
      bDropdownItem,
      Dropdown,
      LanguagePicker
    },

    data () {
      let fields = [
        {
          key: 'id',
          sortable: true,
        },
        {
          key: 'image',
          sortable: false,
        },
        {
          key: 'title',
          sortable: true,
          label: 'Название',
          thStyle: {
            width: this.userCan('shop.prices.see', false) ? "70%" : "100%"
          }
        },
      ]

      if (this.userCan('shop.prices.see', false)) {
        fields.push({
          key: 'price',
          sortable: true,
          thStyle: {
            width: "30%"
          }
        })
      }

      if (this.userCan('edit')) {
        fields.push({
          key: 'enabled',
          sortable: true,
        })
      }

      if (this.userCan('delete')) {
        fields.push({
          key: 'delete',
          sortable: false,
        })
      }

      return {
        rbacNamespace: 'shop.products',
        loading: false,
        totalRows: 0,
        perPageOptions: [ 15, 30, 60 ],
        types: {
          all: 'Все',
          popular: 'Популярные',
          new: 'Новинки',
        },
        ... defaultTableState,
        fields,

        priceTypes: [],
        activePriceType: null,

        usedMainData: [
          'languages',
          'price-types'
        ]
      }
    },

    created() {
      let query = window.location.search.replace('?', '')

      if (_.isEmpty(query)) return

      query.split('&').forEach(item => {
        item = item.split('=')

        let key = item[0]
        let value = item[1]

        this[key] = this.getValid(key, value)
      })
    },

    methods: {
      getValidSortBy(value) {
        if (this.fields.find(field => field.key === value)) {
          return value
        }

        return defaultTableState.sortBy
      },

      getValidSortDesc(value) {
        if (_.isBoolean(value)) {
          return value
        }

        if (value === 'true') {
          return true
        }

        if (value === 'false') {
          return false
        }

        return defaultTableState.sortDesc
      },

      getValidPage(value) {
        value = parseInt(value)
        return isNaN(value) ? defaultTableState.page : value
      },

      getValidType(value) {
        return value in this.types ? value : defaultTableState.type
      },

      getValidPerPage(value) {
        value = parseInt(value)

        if (this.perPageOptions.indexOf(value) !== -1) {
          return value
        }

        return this.perPageOptions[0]
      },

      getValidSearchPhrase(value) {
        return value
      },

      getValid(key, value) {
        let methodName = 'getValid' + Core.camelize(key, true)

        return this[methodName](value)
      },

      setHistoryState() {
        let queryArr = Object.keys(defaultTableState).reduce((acc, key) => {
          let validValue = this.getValid(key, this[key])

          if (validValue !== defaultTableState[key]) {
            acc.push(encodeURIComponent(key) + '=' + encodeURIComponent(this[key]))
          }

          return acc
        }, [])

        let pathWithQuery = window.location.pathname

        if (queryArr.length > 0) {
          pathWithQuery += '?' + queryArr.join('&')
        }

        if (this.$router.path !== pathWithQuery) {
          this.$router.push(pathWithQuery)
        }
      },

      loadData() {
        this.fetchMainData()
          .then(data => {
            this.initMainData(data)
            this.activePriceType = this.priceTypes[0].id
          })
      },

      /*
        Загрузка списка.
      */

      fetchItems ({currentPage, perPage, sortBy, sortDesc}) {
        return new Promise(resolve => {
          new Core.requestHandler('get', this.makePageApiUrl(), {
            page: currentPage,
            perPage,
            sortBy,
            sortType: sortDesc ? 'desc' : 'asc',
            search: this.searchPhrase,
            priceType: this.activePriceType,
            type: this.type
          })
            .success(response => {
              const data = response.data;

              this.totalRows = this.nanToNum(parseInt(data.totalRows))
              this.page = parseInt(data.page) || 1
              this.perPage = this.nanToNum(parseInt(data.perPage))

              const items = data.products || []

              resolve(items.map(item => new ProductsTableModel(item, this.languages)))
            })
            .start()
        })
      },

      setType(type) {
        if (this.type === type) return

        this.type = type

        this.refreshTable()
      },

      setActivePriceType(id) {
        if (this.activePriceType === id) return

        this.activePriceType = id

        if (this.sortBy === 'price') {
          this.refreshTable()
        }
      },

      getItemPrice(item) {
        let price = item.prices.find(item => {
          return item.price_type_id == this.activePriceType && item.currency_code == 'RUB'
        }) || { formatted : '' }

        return price.formatted
      },

      sortingChanged(ctx) {
        ctx.page = 1
      },

      search(phrase) {
        if (this.searchPhrase != phrase) {
          this.page = 1
          this.searchPhrase = phrase
          this.refreshTable()
        }
      },

      setPerPage(value) {
        this.perPage = value
        this.page = 1
      },

      refreshTable() {
        this.$nextTick(() => {
          this.$refs.table.refresh()
        })
      },

      nanToNum(value, num = 0) {
        return isNaN(value) ? num : value
      }
    },

    computed: {
      showedFrom() {
        return this.nanToNum((this.page - 1) * this.perPage + 1)
      },

      showedTo() {
        let to = this.page * this.perPage
        return this.nanToNum(to > this.totalRows ? this.totalRows : to)
      },

      showPagination() {
        return this.perPage < this.totalRows;
      },

      activePriceTypeTitle() {
        let priceType = this.priceTypes.find(item => item.id == this.activePriceType)
        return priceType.i18n[this.activeLanguageCode].title
      },
    },
  }
</script>

<template>
  <div>
    <div class="block full">
      <div class="block-title clearfix">
        <h1>
          <strong>
            Товары
          </strong>
        </h1>

        <div class="block-title-control">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" />

          <span class="btn-separator-xs"></span>

          <router-link v-if="userCan('create')" to="/shop/products/create" class="btn btn-sm btn-success active">
            <i class="fa fa-plus-circle"></i> Создать
          </router-link>
        </div>
      </div>

      <loading :loading="loading">
        <div class="table-responsive" style="overflow: visible">
          <div class="dataTables_wrapper form-inline no-footer">
            <div class="row">
              <div class="col-sm-4 col-xs-12 clearfix">
                <div class="dataTables_paginate paging_bootstrap" v-if="showPagination">
                  <b-pagination :total-rows="totalRows" :per-page="perPage" v-model="page" class="my-0" />
                </div>
              </div>

              <div class="col-sm-4 col-xs-12 text-center clearfix">
                <div class="btn-group">
                  <template v-for="(title, typeIdentif) in types">
                    <button :class="{'btn btn-primary': true, 'btn-alt': type !== typeIdentif}" @click="setType(typeIdentif)">{{ title }}</button>
                  </template>
                </div>
              </div>

              <div class="col-sm-4 col-xs-12 clearfix">
                <div class="dataTables_filter pull-right">
                  <div class="input-group">
                    <search-input placeholder="Поиск" class="form-control" type="search" aria-controls="example-datatable" @change="search" />
                    <a href="javascript:void(0)" class="input-group-addon" @click="search"><i class="fa fa-search"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <b-table
              @refreshed="setHistoryState"
              v-if="priceTypes.length"
              show-empty
              stacked="md"
              ref="table"
              :sort-by.sync="sortBy"
              :sort-desc.sync="sortDesc"
              :items="fetchItems"
              :fields="fields"
              :busy.sync="loading"
              :current-page="page"
              :per-page="perPage"
              @sort-changed="sortingChanged"
              empty-text="Список товаров пуст."
              empty-filtered-text="Товары с такими параметрами не найдены."
              class="table table-vcenter table-condensed table-hover table-bordered dataTable no-footer">

              <!--  ID  -->

              <template slot="HEAD_id" slot-scope="product">
                <span class="table-column-id">ID</span>
              </template>

              <template slot="id" slot-scope="product">
                <router-link :to="product.item.url">
                  <span class="table-column-id">
                    {{ product.item.id }}
                  </span>
                </router-link>
              </template>

              <!--  Изображение  -->

              <template slot="HEAD_image" slot-scope="product">
                <span class="table-column-image">Изображение</span>
              </template>

              <template slot="image" slot-scope="product">
                <span class="table-column-image">
                  <router-link :to="product.item.url">
                    <div class="product-preview-image">
                      <img :src="product.item.image.src" :srcset="`${product.item.image.srcset} 2x`">
                    </div>
                  </router-link>
                </span>
              </template>

              <!--  Название  -->

              <template slot="title" slot-scope="product">
                <router-link :to="product.item.url" v-html="product.item.i18n[activeLanguageCode].title" />
              </template>

              <!--  Цена  -->

              <template slot="HEAD_price" slot-scope="product">
                <dropdown
                  className="btn-group btn-group-xs"
                  style="margin: -4px 2px -2px;"
                  position="right"
                  :options="priceTypes"
                  @click.native.stop>

                  <template slot="button">
                    <a class="btn btn-default dropdown-toggle">
                      <i class="fa fa-chevron-down fa-fw"></i>
                    </a>
                  </template>

                  <template slot="option" slot-scope="{ id, i18n }">
                    <li :class="{active: activePriceType === id}">
                      <a @click="setActivePriceType(id)">
                        {{ i18n[activeLanguageCode].title }}
                      </a>
                    </li>
                  </template>
                </dropdown>

                {{ activePriceTypeTitle }}
              </template>

              <template slot="price" slot-scope="product">
                {{ getItemPrice(product.item) }}
              </template>

              <!--  Дата создания  -->

              <template slot="HEAD_created_at" slot-scope="product">
                <span class="table-column-date">Создан</span>
              </template>

              <template slot="created_at" slot-scope="product">
                <span class="table-column-date">
                  {{ product.item.created_at }}
                </span>
              </template>

              <!--  Статус  -->

              <template slot="HEAD_enabled" slot-scope="product">
                <span class="table-column-enabled">Статус</span>
              </template>

              <template slot="enabled" slot-scope="product">
                <span class="table-column-enabled">
                  <toggle @change="statusChange(product.item.id)" :checked="product.item.enabled" :key="product.item.id" />
                </span>
              </template>

              <!--  Удаление  -->

              <template slot="HEAD_delete" slot-scope="product">
                <span class="table-column-delete"></span>
              </template>

              <template slot="delete" slot-scope="product">
                <span class="table-column-delete">
                  <a class="btn btn-danger" @click="remove(product.item.id)">
                    <i class="fa fa-times"></i>
                  </a>
                </span>
              </template>
            </b-table>

            <div class="row">
              <div class="col-sm-6 col-xs-12 clearfix">
                <div class="dataTables_paginate paging_bootstrap" v-if="showPagination">
                  <b-pagination
                    :total-rows="totalRows"
                    :per-page="perPage"
                    v-model="page"
                    class="my-0"
                  />
                </div>
              </div>


              <div class="col-sm-6 col-xs-6">
                <div class="dataTables_length">
                  <label>
                    <b-form-select :options="perPageOptions" :value="perPage" @change="setPerPage" />
                  </label>
                </div>

                <div class="dataTables_info" role="status" aria-live="polite">
                  <strong>{{ showedFrom }}</strong> - <strong>{{ showedTo }}</strong> из <strong>{{ totalRows }}</strong>
                </div>
              </div>
            </div>
          </div>

        </div>
      </loading>
    </div>

    <b-modal id="removeModal"
      ref="removeModal"
      title="Удаление товара"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить товар?
    </b-modal>
  </div>
</template>
