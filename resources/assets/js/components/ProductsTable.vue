<script>
  import ShopQuickNav from './ShopQuickNav.vue'
  import Toggle from './Toggle.vue'
  import Loading from './Loading.vue'
  import SearchInput from './SearchInput.vue'
  import Core from '../core'

  import bTable from 'bootstrap-vue/es/components/table/table'
  import bPagination from 'bootstrap-vue/es/components/pagination/pagination'
  import bFormSelect from 'bootstrap-vue/es/components/form-select/form-select'
  import bModal from 'bootstrap-vue/es/components/modal/modal'


  export default {
    name: 'products-table',

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
        ]
      }
    },

    watch: {
      '$route': [
        'clearQueue',
        'fetchItems'
      ]
    },

    methods: {
      /*
        Загрузка списка.
      */

      fetchItems ({currentPage, perPage, sortBy, sortDesc}) {
        return new Promise((resolve, reject) => {
          this.dataQueue.add(new Core.requestHandler('get', `/api${this.$route.path}`, {
            currentPage,
            perPage,
            sortBy,
            sortType: sortDesc ? 'desc' : 'asc',
            search: this.searchPhrase
          }))
            .onDone()
            .success(response => {
              const data = response.data;

              this.totalRows = parseInt(data.totalRows)
              this.currentPage = parseInt(data.currentPage) || 1
              this.perPage = parseInt(data.perPage)

              const items = data.items || []

              resolve(items.map(item => {
                return {
                  ...item,
                  url: '/products/' + item.id,
                }
              }))
            })
        });
      },


      /*
        Смена статуса товара.
      */

      onStatusChange(id) {
        this.statusQueue.add(new Core.requestHandler('get', `/api/products/${id}/status`))
      },


      /*
        Удаление товара.
      */

      onRemove(id) {
        var _ = this;

        this.toRemoveId = id
        this.$refs.removeModal.show()
      },

      onRemoveConfirm() {
        new Core.requestHandler('delete', `/api/products/${this.toRemoveId}`)
          .success(() => this.$refs.table.refresh())
          .start()
      },

      onSortingChanged(ctx) {
        ctx.currentPage = 1
      },

      onSearch(phrase) {
        if (this.searchPhrase != phrase) {
          this.searchPhrase = phrase
          this.$refs.table.refresh()
        }
      },

      clearQueue() {
        this.dataQueue.clear()
        this.statusQueue.clear()
      },
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

    components : {
      'shop-quick-nav': ShopQuickNav,
      'toggle': Toggle,
      'loading': Loading,
      'b-table': bTable,
      'b-pagination': bPagination,
      'b-form-select': bFormSelect,
      'b-modal': bModal,
      'search-input': SearchInput
    },

    created() {
      this.dataQueue = Core.queueHandler.makeQueue('break', 'products-data')
      this.statusQueue = Core.queueHandler.makeQueue('iteration', 'product-status')
    },

    beforeDestroy: function() {
      this.clearQueue()
    }
  }
</script>

<template>
  <div>
    <shop-quick-nav active="products"></shop-quick-nav>

    <div class="block full">
      <div class="block-title">
        <h1><strong>Товары</strong></h1>

        <div class="block-title-control">
          <router-link to="/products/create" class="btn btn-sm btn-success active"><i class="fa fa-plus-circle"></i> Создать</router-link>
        </div>
      </div>

      <loading :loading="loading">
        <div class="table-responsive" id="products-table-page">
          <div class="dataTables_wrapper form-inline no-footer">
            <div class="row">
              <div class="col-sm-6 col-xs-5">
                <div class="dataTables_length" id="example-datatable_length">
                  <label>
                    <b-form-select :options="perPageOptions" v-model="perPage" />
                  </label>
                </div>
              </div>

              <div class="col-sm-6 col-xs-7">
                <div id="example-datatable_filter" class="dataTables_filter">
                  <label>
                    <div class="input-group">
                      <search-input placeholder="Search" class="form-control" type="search" aria-controls="example-datatable" v-on:change="onSearch" />
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </label>
                </div>
              </div>
            </div>

            <b-table show-empty
                   stacked="md"
                   ref="table"
                   :sort-by.sync="sortBy"
                   :sort-desc.sync="sortDesc"
                   :items="fetchItems"
                   :fields="fields"
                   :busy.sync="loading"
                   :current-page="currentPage"
                   :per-page="perPage"
                   @sort-changed="onSortingChanged"
                   empty-text="Список товаров пуст."
                   empty-filtered-text="Товары с такими параметрами не найдены."
                   class="table table-vcenter table-condensed table-hover table-bordered dataTable no-footer">

              <template slot="id" slot-scope="product">
                <router-link v-bind:to="product.item.url"><strong>{{ product.item.id }}</strong></router-link>
              </template>


              <template slot="title" slot-scope="product">
                <router-link v-bind:to="product.item.url">{{ product.item.title }}</router-link>
              </template>

              <template slot="price" slot-scope="product">
                <strong>{{ product.item.prices[4] }}</strong>
              </template>

              <template slot="created_at" slot-scope="product">
                {{ product.item.created_at }}
              </template>

              <template slot="enabled" slot-scope="product">
                <toggle @change="onStatusChange(product.item.id)" :checked="product.item.enabled" :key="product.item.id"></toggle>
              </template>

              <template slot="controls" slot-scope="product">
                <a href="javascript:void(0)" data-toggle="tooltip" title="Удалить" class="btn btn-danger" @click="onRemove(product.item.id)"><i class="fa fa-times"></i></a>
              </template>
            </b-table>

            <div class="row" v-if="showPagination">
              <div class="col-sm-5 hidden-xs">
                <div class="dataTables_info" id="example-datatable_info" role="status" aria-live="polite">
                  <strong>{{ showedFrom }}</strong>-
                  <strong>{{ showedTo }}</strong> of
                  <strong>{{ totalRows }}</strong>
                </div>
              </div>
              <div class="col-sm-7 col-xs-12 clearfix">
                <div class="dataTables_paginate paging_bootstrap" id="example-datatable_paginate">
                  <b-pagination :total-rows="totalRows" :per-page="perPage" v-model="currentPage" class="my-0" />
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
      @ok="onRemoveConfirm">
      Вы действительно хотите удалить товар?
    </b-modal>
  </div>
</template>
