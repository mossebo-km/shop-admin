<script>
  import axios from 'axios'

  import ShopQuickNav from './ShopQuickNav.vue'
  import Toggle from './Toggle.vue'
  import Loading from './Loading.vue'
  import noty from '../scripts/noty.js'
  import ModalBuilder from '../scripts/modal.js'

  export default {
    name: 'products-table',
    data () {
      return {
        loading: false,
        post: null,
        error: null,
        products: []
      }
    },
    created () {
      this.fetchData()
    },
    watch: {
      '$route': 'fetchData'
    },
    methods: {


      /*
        Загрузка списка товаров.
      */

      fetchData () {
        this.error = this.post = null
        this.loading = true

        axios.get('/api' + this.$route.path, {
          responseType: 'json',
        })
        .then((response) => {
          this.loading = false
          const products = response.data || []

          this.products = products.map(item => {
            return {
              ...item,
              url: '/products/' + item.id,
              onChage: (status) => {
                this.onStatusChange(item.id, status)
              }
            }
          })
        })
        .catch((error) => {
          noty('Техническая ошибка. Обратитесь к разработчикам.', {type: 'error'})
          console.log(error.toString());
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
          console.log(error.toString())
        })
      },


      /*
        Удаление товара.
      */

      onRemove(id) {
        new ModalBuilder({
          title: 'Удаление товара',
          message: 'Вы действительно хотите удалить товар?',
          onConfirm: () => {
            axios.delete(`/api/products/${id}`)
            .then(function (response) {
              noty(response.data.message, {type: 'success'})
            })
            .catch(error => {
              noty('Техническая ошибка. Обратитесь к разработчикам.', {type: 'error'})
              console.log(error.toString())
            })
          }
        }).show()
      }
    },

    components : {
      'shop-quick-nav': ShopQuickNav,
      'toggle': Toggle,
      'loading': Loading,
    }
  }
</script>

<template>
  <div id="products-table-page">
    <shop-quick-nav></shop-quick-nav>

    <div v-if="error" class="error">
      {{ error }}
    </div>

    <loading :loading="loading">
      <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 70px;">ID</th>
            <th>Product Name</th>
            <th class="text-right hidden-xs">Price</th>
            <th class="hidden-xs">Status</th>
            <th class="hidden-xs text-center">Added</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="product in products">
            <td class="text-center"><router-link v-bind:to="product.url"><strong>PID.{{ product.id }}</strong></router-link></td>
            <td><router-link v-bind:to="product.url">{{ product.title }} #{{ product.id }}</router-link></td>
            <td class="text-right hidden-xs"><strong>{{ product.prices[4] }}</strong></td>
            <td class="hidden-xs">
              <span class="label label-success">Available (227)</span>
            </td>
            <td class="hidden-xs text-center">{{ product.updated_at }}</td>
            <td class="text-center">
              <div class="btn-group btn-group-xs">
                <toggle v-on:change="product.onChage" :checked="product.enabled"></toggle>
                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </loading>
  </div>
</template>