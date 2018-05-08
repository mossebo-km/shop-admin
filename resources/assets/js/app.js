import Sortable from 'jquery-ui-sortable-npm'
import magnificPopup from 'magnific-popup'
import 'select2'

import Vue from 'vue'
import VueRouter from 'vue-router'
import VeeValidate from 'vee-validate'

import Core from './core'

import Dashboard from './components/shop/Dashboard'

import CategoriesTable from './components/shop/categories/CategoriesTable'
import CategoryEdit from './components/shop/categories/CategoryEdit'

import ProductsTable from './components/shop/products/ProductsTable'
import ProductEdit from './components/shop/products/ProductEdit'

import OrdersTable from './components/shop/orders/OrdersTable'

import CustomerEdit from './components/shop/customers/CustomerEdit'
import CustomersTable from './components/shop/customers/CustomersTable'

import SuppliersTable from './components/shop/suppliers/SuppliersTable'
import SupplierEdit from './components/shop/suppliers/SupplierEdit'

import AttributesTable from './components/shop/attributes/AttributesTable'
import AttributeEdit from './components/shop/attributes/AttributeEdit'

import PriceTypesTable from './components/shop/priceTypes/PriceTypesTable'
import PriceTypeEdit from './components/shop/priceTypes/PriceTypeEdit'

import AdminsTable from './components/system/Admins/AdminsTable'
import AdminEdit from './components/system/Admins/AdminEdit'

import RolesTable from './components/system/rbac/Roles/RolesTable'
import RoleEdit from './components/system/rbac/Roles/RoleEdit'

import PermissionGroupsTable from './components/system/rbac/Permissions/PermissionGroupsTable'
import PermissionGroupEdit from './components/system/rbac/Permissions/PermissionGroupEdit'

import Loading from './components/Loading'
import ClearCacheBtn from './components/ClearCacheBtn'
import MainMenu from './components/MainMenu'
import Avatar from './components/Avatar'


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = Vue;

Vue.use(VueRouter);
Vue.use(VeeValidate, {
  fieldsBagName: 'formFields',
  errorBagName: 'formErrors'
});

window.CKEDITOR_BASEPATH = '/js/vendor/ckeditor/';



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('products-table', require('./components/ProductsTable.vue'));
// Vue.component('shop-quick-nav', require('./components/ShopQuickNav.vue'));

// const app = new Vue({
//     el: '#app',
//     template: '<products-list></products-list>'
// });

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


// 2. Определение путей
// Каждый путь должен указывать на компонент
// "Компонентом" может быть как созданный через `Vue.extend()`
// полноценный конструктор, так и просто объект с настройками компонента
// Вложенные пути будут рассмотрены далее.
const routes = [
  { path: '/', component: Dashboard },
  { path: '/shop', redirect: '/shop/products' },
  { path: '/shop/categories', component: CategoriesTable },
  { path: '/shop/categories/create', component: CategoryEdit, props: { type: 'create' } },
  { path: '/shop/categories/:id', component: CategoryEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/shop/products', component: ProductsTable },
  { path: '/shop/products/create', component: ProductEdit, props: { type: 'create' } },
  { path: '/shop/products/:id', component: ProductEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/shop/orders', component: OrdersTable },

  { path: '/shop/customers', component: CustomersTable },

  { path: '/shop/suppliers', component: SuppliersTable },
  { path: '/shop/suppliers/create', component: SupplierEdit, props: { type: 'create' } },
  { path: '/shop/suppliers/:id', component: SupplierEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/shop/attributes', component: AttributesTable },
  { path: '/shop/attributes/create', component: AttributeEdit, props: { type: 'create' } },
  { path: '/shop/attributes/:id', component: AttributeEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/shop/price-types', component: PriceTypesTable },
  { path: '/shop/price-types/create', component: PriceTypeEdit, props: { type: 'create' } },
  { path: '/shop/price-types/:id', component: PriceTypeEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/shop/customers', component: CustomersTable },
  { path: '/shop/customers/create', component: CustomerEdit, props: { type: 'create' } },
  { path: '/shop/customers/:id', component: CustomerEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/system/admins', component: AdminsTable },
  { path: '/system/admins/create', component: AdminEdit, props: { type: 'create' } },
  { path: '/system/admins/:id', component: AdminEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/system/rbac/roles', component: RolesTable },
  { path: '/system/rbac/roles/create', component: RoleEdit, props: { type: 'create' } },
  { path: '/system/rbac/roles/:id', component: RoleEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/system/rbac/roles', component: RolesTable },
  { path: '/system/rbac/roles/create', component: RoleEdit, props: { type: 'create' } },
  { path: '/system/rbac/roles/:id', component: RoleEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/system/rbac/permission-groups', component: PermissionGroupsTable },
  { path: '/system/rbac/permission-groups/create', component: PermissionGroupEdit, props: { type: 'create' } },
  { path: '/system/rbac/permission-groups/:id', component: PermissionGroupEdit, props: route => ({...route.params, type: 'edit'}) },
]





// 3. Создаём экземпляр роутера с опцией `routes`
// Можно передать и другие опции, но пока не будем усложнять
const router = new VueRouter({
  mode: 'history',
  routes // сокращение от `routes: routes`
})

// 4. Создаём и монтируем корневой экземпляр Vue нашего приложения.
// Удостоверьтесь, что передали экземпляр роутера в опции `router`,
// что позволит приложению знать о его наличии



Core.init().then(() => {
  const app = new Vue({
    router,
    components: {
      Loading,
      ClearCacheBtn,
      MainMenu,
      Avatar
    },

    data() {
      return {
        loading: false
      }
    },

    methods: {
      loadingStart() {
        this.loading = true
      },

      loadingEnd() {
        this.loading = false
      }
    }
  }).$mount('#app')
})