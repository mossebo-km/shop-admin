<script>
  import bTable from 'bootstrap-vue/es/components/table/table'
  import bPagination from 'bootstrap-vue/es/components/pagination/pagination'
  import bFormSelect from 'bootstrap-vue/es/components/form-select/form-select'
  import bModal from 'bootstrap-vue/es/components/modal/modal'
  import bDropdown from 'bootstrap-vue/es/components/dropdown/dropdown'
  import bDropdownItem from 'bootstrap-vue/es/components/dropdown/dropdown-item'

  import Core from '../../../core'

  import ShopQuickNav from '../ShopQuickNav'
  import Toggle from '../../Toggle'
  import Loading from '../../Loading'
  import SearchInput from '../../SearchInput'
  import Dropdown from '../../Dropdown'

  import TablePage from '../../../mixins/TablePage'


  export default {
    name: 'products-table',

    mixins: [
      TablePage
    ],

    data () {
      return {
        loading: false,
        sortBy: 'id',
        sortDesc: false,
        currentPage: 1,
        perPage: 15,
        totalRows: 0,
        perPageOptions: [ 15, 30, 60 ],
        searchPhrase: '',
        fields: [
          {
            key: 'id',
            label: 'ID',
            sortable: true,
            class: 'text-center'
          },
          {
            key: 'image',
            label: ' ',
            class: 'text-center'
          },
          {
            key: 'title',
            label: 'Название',
            sortable: true,
          },
          {
            key: 'price',
            label: 'Цена',
            sortable: true,
            class: 'text-right hidden-xs'
          },
          {
            key: 'created_at',
            label: 'Дата добавления',
            sortable: true,
            class: 'text-center hidden-xs'
          },
          {
            key: 'enabled',
            label: 'Статус',
            sortable: true,
            class: 'text-center'
          },
          {
            key: 'controls',
            label: ' ',
            class: 'text-center'
          },
        ],

        priceTypes: [],
        activePriceType: null,

        usedMainData: [
          'price-types'
        ]
      }
    },

    components : {
      ShopQuickNav,
      Toggle,
      Loading,
      bTable,
      bPagination,
      bFormSelect,
      bModal,
      SearchInput,
      bDropdown,
      bDropdownItem,
      Dropdown
    },

    watch: {
      '$route': [
        'clearQueue',
      ]
    },

    methods: {
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
          new Core.requestHandler('get', this.prepareUrl(), {
            currentPage,
            perPage,
            sortBy,
            sortType: sortDesc ? 'desc' : 'asc',
            search: this.searchPhrase,
            priceType: this.activePriceType
          })
            .success(response => {
              const data = response.data;

              this.totalRows = parseInt(data.totalRows)
              this.currentPage = parseInt(data.currentPage) || 1
              this.perPage = parseInt(data.perPage)

              const items = data.items || []

              resolve(items.map(item => {
                return {
                  ...item,
                  url: '/shop/products/' + item.id,
                }
              }))
            })
            .start()
        })
      },

      setActivePriceType(id) {
        if (this.activePriceType === id) return

        this.activePriceType = id

        if (this.sortBy === 'price') {
          this.refreshTable()
        }
      },

      activePriceTypeTitle() {
        let priceType = this.priceTypes.find(item => item.id == this.activePriceType ) || {title: ''}
        return priceType.title
      },

      getItemPrice(item) {
        let price = item.prices.find(item => {
          return item.price_type_id == this.activePriceType && item.currency_code == 'RUB'
        }) || { formatted : '' }

        return price.formatted
      },

      sortingChanged(ctx) {
        ctx.currentPage = 1
      },

      search(phrase) {
        if (this.searchPhrase != phrase) {
          this.searchPhrase = phrase
          this.refreshTable()
        }
      },

      clearQueue() {
        this.statusQueue.clear()
      },

      refreshTable() {
        this.$refs.table.refresh()
      },
      a(p) {
        console.log(p)
      }
    },

    computed: {
      showedFrom: function() {
        return (this.currentPage - 1) * this.perPage + 1
      },

      showedTo: function() {
        let to = this.currentPage * this.perPage
        return (to > this.totalRows ? this.totalRows : to)
      },

      showPagination: function() {
        return this.perPage < this.totalRows;
      },
    },

    created() {
      this.statusQueue = Core.queueHandler.makeQueue('iteration', 'product-status')
    },

    beforeDestroy: function() {
      this.clearQueue()
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="products"></shop-quick-nav>

    <div class="block full">
      <div class="block-title clearfix">
        <h1><strong>Товары</strong></h1>

        <div class="block-title-control">
          <router-link to="/shop/products/create" class="btn btn-sm btn-success active"><i class="fa fa-plus-circle"></i> Создать</router-link>
        </div>
      </div>

      <loading :loading="loading">
        <div class="table-responsive">
          <div class="dataTables_wrapper form-inline no-footer">
            <div class="row">
              <div class="col-sm-6 col-xs-12 clearfix">
                <div class="dataTables_paginate paging_bootstrap" v-if="showPagination">
                  <b-pagination :total-rows="totalRows" :per-page="perPage" v-model="currentPage" class="my-0" />
                </div>
              </div>

              <div class="col-sm-6 col-xs-6">
                <div class="dataTables_filter">
                  <label>
                    <div class="input-group">
                      <search-input placeholder="Поиск" class="form-control" type="search" aria-controls="example-datatable" @change="search" />
                      <a href="javascript:void(0)" class="input-group-addon" @click="search"><i class="fa fa-search"></i></a>
                    </div>
                  </label>
                </div>
              </div>
            </div>

            <b-table
              v-if="priceTypes.length"
              show-empty
              stacked="md"
              ref="table"
              :sort-by.sync="sortBy"
              :sort-desc.sync="sortDesc"
              :items="fetchItems"
              :fields="fields"
              :busy.sync="loading"
              :current-page="currentPage"
              :per-page="perPage"
              @sort-changed="sortingChanged"
              empty-text="Список товаров пуст."
              empty-filtered-text="Товары с такими параметрами не найдены."
              class="table table-vcenter table-condensed table-hover table-bordered dataTable no-footer">

              <template slot="id" slot-scope="product">
                <router-link v-bind:to="product.item.url"><strong>{{ product.item.id }}</strong></router-link>
              </template>

              <template slot="image" slot-scope="product">
                <router-link v-bind:to="product.item.url" v-if="product.item.image && product.item.image.thumb">
                  <div class="product-preview-image">
                    <img :src="product.item.image.thumb.src" :srcset="`${product.item.image.thumb.srcset} 2x`">
                  </div>
                </router-link>
              </template>

              <template slot="title" slot-scope="product">
                <router-link v-bind:to="product.item.url">
                  {{ product.item.title }}
                </router-link>
              </template>

              <template slot="price" slot-scope="product">
                <strong>{{ getItemPrice(product.item) }}</strong>
              </template>

              <template slot="created_at" slot-scope="product">
                {{ product.item.created_at }}
              </template>

              <template slot="enabled" slot-scope="product">
                <toggle @change="statusChange(product.item.id)" :checked="product.item.enabled" :key="product.item.id"></toggle>
              </template>

              <template slot="controls" slot-scope="product">
                <a href="javascript:void(0)" data-toggle="tooltip" title="Удалить" class="btn btn-danger" @click="remove(product.item.id)"><i class="fa fa-times"></i></a>
              </template>

              <template slot="HEAD_price" slot-scope="product">
                {{ activePriceTypeTitle() }}
                <dropdown className="btn-group btn-group-sm" position="right" :options="priceTypes" @click.native.stop>
                  <template slot="button">
                    <a class="btn btn-default dropdown-toggle" href="javascript:void(0)"><i class="fa fa-chevron-down fa-fw"></i></a>
                  </template>

                  <template slot="option" slot-scope="{ id, title }">
                    <li :class="{active: activePriceType === id}">
                      <a href="javascript:void(0)" @click="setActivePriceType(id)">{{ title }}</a>
                    </li>
                  </template>
                </dropdown>
              </template>

            </b-table>

            <div class="row">
              <div class="col-sm-6 col-xs-12 clearfix">
                <div class="dataTables_paginate paging_bootstrap" v-if="showPagination">
                  <b-pagination :total-rows="totalRows" :per-page="perPage" v-model="currentPage" class="my-0" />
                </div>
              </div>


              <div class="col-sm-6 col-xs-6">
                <div class="dataTables_length">
                  <label>
                    <b-form-select :options="perPageOptions" v-model="perPage" />
                  </label>
                </div>

                <div class="dataTables_info" role="status" aria-live="polite">
                  <strong>{{ showedFrom }}</strong> - <strong>{{ showedTo }}</strong> of <strong>{{ totalRows }}</strong>
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
