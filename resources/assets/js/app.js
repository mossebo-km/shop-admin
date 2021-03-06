import Sortable from 'jquery-ui-sortable-npm'
import '@fancyapps/fancybox'
import 'select2'

import Vue from 'vue'
import VueRouter from 'vue-router'
import VeeValidate from 'vee-validate'

import Core from './core'

import Dashboard from './components/shop/Dashboard'

import CategoriesTable from './components/shop/categories/CategoriesTable'
import CategoryEdit from './components/shop/categories/CategoryEdit'

import RoomsTable from './components/shop/rooms/RoomsTable'
import RoomEdit from './components/shop/rooms/RoomEdit'

import StylesTable from './components/shop/styles/StylesTable'
import StyleEdit from './components/shop/styles/StyleEdit'

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

import PromoCodesTable from './components/shop/promoCodes/PromoCodesTable'
import PromoCodeEdit from './components/shop/promoCodes/PromoCodeEdit'

import BadgeTypesTable from './components/shop/badges/BadgeTypesTable'
import BadgeTypeEdit from './components/shop/badges/BadgeTypeEdit'

import BannersTable from './components/shop/banners/BannersTable'
import BannerEdit from './components/shop/banners/BannerEdit'

import SaleTable from './components/shop/sale/SaleTable'
import SaleEdit from './components/shop/sale/SaleEdit'

import InteriorEdit from './components/shop/interior/InteriorEdit'
import InteriorTable from './components/shop/interior/InteriorTable'


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

import ReviewsTable from './components/reviews/ReviewsTable'
import ReviewEdit from './components/reviews/ReviewEdit'

import MenusTable from './components/menu/MenusTable'
import MenuEdit from './components/menu/MenuEdit'




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
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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
  { path: '/shop/categories/:id', component: CategoryEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/rooms', component: RoomsTable },
  { path: '/shop/rooms/create', component: RoomEdit, props: { type: 'create' } },
  { path: '/shop/rooms/:id', component: RoomEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/styles', component: StylesTable },
  { path: '/shop/styles/create', component: StyleEdit, props: { type: 'create' } },
  { path: '/shop/styles/:id', component: StyleEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/products', component: ProductsTable },
  { path: '/shop/products/create', component: ProductEdit, props: { type: 'create' } },
  { path: '/shop/products/:id', component: ProductEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/orders', component: OrdersTable },

  { path: '/shop/customers', component: CustomersTable },

  { path: '/shop/suppliers', component: SuppliersTable },
  { path: '/shop/suppliers/create', component: SupplierEdit, props: { type: 'create' } },
  { path: '/shop/suppliers/:id', component: SupplierEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/attributes', component: AttributesTable },
  { path: '/shop/attributes/create', component: AttributeEdit, props: { type: 'create' } },
  { path: '/shop/attributes/:id', component: AttributeEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/price-types', component: PriceTypesTable },
  { path: '/shop/price-types/create', component: PriceTypeEdit, props: { type: 'create' } },
  { path: '/shop/price-types/:id', component: PriceTypeEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/promo-codes', component: PromoCodesTable },
  { path: '/shop/promo-codes/create', component: PromoCodeEdit, props: { type: 'create' } },
  { path: '/shop/promo-codes/:id', component: PromoCodeEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/customers', component: CustomersTable },
  { path: '/shop/customers/create', component: CustomerEdit, props: { type: 'create' } },
  { path: '/shop/customers/:id', component: CustomerEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/badge-types', component: BadgeTypesTable },
  { path: '/shop/badge-types/create', component: BadgeTypeEdit, props: { type: 'create' } },
  { path: '/shop/badge-types/:id', component: BadgeTypeEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/banners', component: BannersTable },
  { path: '/shop/banners/default', redirect: '/shop/banners' },
  { path: '/shop/banners/header', redirect: '/shop/banners' },
  { path: '/shop/banners/default/create', component: BannerEdit, props: { type: 'create', bannerType: 'default' } },
  { path: '/shop/banners/header/create', component: BannerEdit, props: { type: 'create', bannerType: 'header' } },
  { path: '/shop/banners/:id', component: BannerEdit, props: route => ({ ...route.params, type: 'edit' }), name: 'banner-edit' },

  { path: '/shop/sale', component: SaleTable },
  { path: '/shop/sale/create', component: SaleEdit, props: { type: 'create' } },
  { path: '/shop/sale/:id', component: SaleEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/shop/interiors', component: InteriorTable },
  { path: '/shop/interiors/create', component: InteriorEdit, props: { type: 'create' } },
  { path: '/shop/interiors/:id', component: InteriorEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/system/admins', component: AdminsTable },
  { path: '/system/admins/create', component: AdminEdit, props: { type: 'create' } },
  { path: '/system/admins/:id', component: AdminEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/system/rbac/roles', component: RolesTable },
  { path: '/system/rbac/roles/create', component: RoleEdit, props: { type: 'create' } },
  { path: '/system/rbac/roles/:id', component: RoleEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/system/rbac/roles', component: RolesTable },
  { path: '/system/rbac/roles/create', component: RoleEdit, props: { type: 'create' } },
  { path: '/system/rbac/roles/:id', component: RoleEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/system/rbac/permission-groups', component: PermissionGroupsTable },
  { path: '/system/rbac/permission-groups/create', component: PermissionGroupEdit, props: { type: 'create' } },
  { path: '/system/rbac/permission-groups/:id', component: PermissionGroupEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/reviews', component: ReviewsTable },
  { path: '/reviews/:id', component: ReviewEdit, props: route => ({ ...route.params, type: 'edit' }) },

  { path: '/menus', component: MenusTable },
  { path: '/menus/create', component: MenuEdit, props: { type: 'create' } },
  { path: '/menus/:id', component: MenuEdit, props: route => ({ ...route.params, type: 'edit' }) },
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

    created() {
      let resizeHandler = _.debounce(() => {
        this.windowWidth = window.innerWidth
        this.$emit('resize')
      }, 50)

      window.addEventListener('resize', resizeHandler, { passive: true })
    },

    methods: {
      loadingStart() {
        this.loading = true
      },

      loadingEnd() {
        this.loading = false
      },

      config() {
        return Core.config.apply(Core, arguments)
      }
    }
  }).$mount('#app')
})

let isFirstTime = true

router.afterEach(() => {
  if (isFirstTime) {
    isFirstTime = false
  }
  else {
    let previousPath = window.location.href.replace(window.location.origin, '')

    setTimeout(() => {
      window.history.replaceState({
        ... window.history.state,
        previousPath
      }, '', window.location.href)
    })
  }
})

jQuery.extend(true, jQuery.fn.datetimepicker.defaults, {
  icons: {
    time: 'gi gi-clock',
    date: 'gi gi-calendar',
    up: 'fa fa-chevron-up',
    down: 'fa fa-chevron-down',
    previous: 'fa fa-chevron-left',
    next: 'fa fa-chevron-right',
    today: 'gi gi-calendar-check',
    clear: 'fa fa-trash',
    close: 'fa fa-times'
  }
});


window.processSelectedFile = function(file, input) {
  let inputEl = document.querySelector('#' + input)

  if (inputEl) {
    inputEl.value = file

    inputEl.dispatchEvent(makeEvent('change'));
  }
}


function makeEvent(eventName) {
  let myEvent

  if (typeof CustomEvent === 'undefined') {
    myEvent = document.createEvent(eventName)
    myEvent.initCustomEvent(eventName, false, true)
  }
  else {
    myEvent = new CustomEvent(eventName, {
      bubbles: false,
      cancelable: true
    })
  }

  return myEvent
}