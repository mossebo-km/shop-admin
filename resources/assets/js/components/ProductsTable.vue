<script>
  import ShopQuickNav from './ShopQuickNav.vue'
  import Toggle from './Toggle.vue'
  import Loading from './Loading.vue'
  import noty from '../scripts/noty.js'
  import ModalBuilder from '../scripts/modal.js'
  import bTable from 'bootstrap-vue/es/components/table/table'
  import bPagination from 'bootstrap-vue/es/components/pagination/pagination'
  import bFormSelect from 'bootstrap-vue/es/components/form-select/form-select'
  import bFormInput from 'bootstrap-vue/es/components/form-input/form-input'

  export default {
    name: 'products-table',
    data () {
      return {
        loading: false,
        post: null,
        error: null,
        sortBy: 'id',
        sortDesc: false,
        currentPage: 1,
        perPage: 15,
        totalRows: 0,
        perPageOptions: [ 15, 30, 60 ],
        filter: null,
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
            label: 'Добавлен',
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
      '$route': 'fetchItems'
    },
    methods: {
      /*
        Загрузка списка товаров.
      */

      fetchItems ({currentPage, perPage, sortBy, sortDesc}) {
        if (typeof this.fetchRequestCancel === 'function') {
          this.fetchRequestCancel()
        }

        this.error = this.post = null
        this.loading = true

        let promise = axios.get('/api' + this.$route.path, {
          responseType: 'json',
          cancelToken: new axios.CancelToken(c => this.fetchRequestCancel = c),
          params: {
            currentPage,
            perPage,
            sortBy,
            sortType: sortDesc ? 'desc' : 'asc'
          }
        })

        return promise.then(response => {
          this.loading = false
          this.fetchRequestCancel = false

          const items = response.data.items || []

          this.totalRows = parseInt(response.data.totalRows)
          this.currentPage = parseInt(response.data.currentPage) || 1
          this.perPage = parseInt(response.data.perPage)

          return (items.map(item => {
            return {
              ...item,
              url: '/products/' + item.id,
              onChage: (status) => {
                this.onStatusChange(item.id, status)
              }
            }
          }))
        })
        .catch(error => {
          if (error.constructor.name === 'Cancel') return
          noty('Техническая ошибка. Обратитесь к разработчикам.', {type: 'error'})
          console.log(error)
        })
      },


      /*
        Смена статуса товара.
      */

      onStatusChange(id, status) {
        axios.get(`/api/products/${id}/status`)
          .then(function (response) {
            noty(response.data.message, {type: 'success'})
          })
          .catch(error => {
            noty('Техническая ошибка. Обратитесь к разработчикам.', {type: 'error'})
            console.log(error)
          })
      },


      /*
        Удаление товара.
      */

      onRemove(id) {
        var _ = this;

        new ModalBuilder({
          title: 'Удаление товара',
          message: 'Вы действительно хотите удалить товар?',
          centered: true,
          onConfirm: () => {
            axios.delete(`/api/products/${id}`)
              .then(function (response) {
                noty(response.data.message, {type: 'success'})
                _.$refs.table.refresh()
              })
              .catch(error => {
                noty('Техническая ошибка. Обратитесь к разработчикам.', {type: 'error'})
                console.log(error)
              })
          }
        }).show()
      },

      onSortingChanged(ctx) {
        ctx.currentPage = 1
      },

      onFiltered(ctx) {
        ctx.currentPage = 1
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

    components : {
      'shop-quick-nav': ShopQuickNav,
      'toggle': Toggle,
      'loading': Loading,
      'b-table': bTable,
      'b-pagination': bPagination,
      'b-form-select': bFormSelect,
      'b-form-input': bFormInput
    }
  }
</script>

<template>
  <div>
    <shop-quick-nav></shop-quick-nav>

    <div v-if="error" class="error">
      {{ error }}
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
                    <b-form-input v-model="filter" placeholder="Search" class="form-control" type="search" aria-controls="example-datatable" />
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
                   @filtered="onFiltered"
                   class="table table-vcenter table-condensed table-bordered dataTable no-footer">

              <template slot="id" slot-scope="product">
                <router-link v-bind:to="product.item.url"><strong>PID.{{ product.item.id }}</strong></router-link>
              </template>


              <template slot="title" slot-scope="product">
                <router-link v-bind:to="product.item.url">{{ product.item.title }} #{{ product.item.id }}</router-link>
              </template>

              <template slot="price" slot-scope="product">
                <strong>{{ product.item.prices[4] }}</strong>
              </template>

              <template slot="created_at" slot-scope="product">
                <strong>{{ product.item.updated_at }}</strong>
              </template>

              <template slot="created_at" slot-scope="product">
                {{ product.item.updated_at }}
              </template>

              <template slot="enabled" slot-scope="product">
                <toggle v-on:change="product.item.onChage" :checked="product.item.enabled" :key="product.item.id"></toggle>
              </template>

              <template slot="controls" slot-scope="product">
                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger" v-on:click="onRemove(product.item.id)"><i class="fa fa-times"></i></a>
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

</template>

