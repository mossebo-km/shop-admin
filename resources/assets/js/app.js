import Vue from 'vue'
import VueRouter from 'vue-router'
import VeeValidate from 'vee-validate'
import CategoriesTable from './components/CategoriesTable.vue'
import CategoryEdit from './components/CategoryEdit.vue'

import Dashboard from './components/Dashboard.vue'
import ProductsTable from './components/ProductsTable.vue'
import ProductEdit from './components/ProductEdit.vue'
import OrdersTable from './components/OrdersTable.vue'
import CustomersTable from './components/CustomersTable.vue'



/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VeeValidate, {fieldsBagName: 'formFields'});

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
  { path: '/categories', component: CategoriesTable },
  { path: '/categories/create', component: CategoryEdit, props: { type: 'create' } },
  { path: '/categories/:id', component: CategoryEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/products', component: ProductsTable },
  { path: '/products/create', component: ProductEdit, props: { type: 'create' } },
  { path: '/products/:id', component: ProductEdit, props: route => ({...route.params, type: 'edit'}) },

  { path: '/orders', component: OrdersTable },

  { path: '/customers', component: CustomersTable },
]

// 3. Создаём экземпляр роутера с опцией `routes`
// Можно передать и другие опции, но пока не будем усложнять
const router = new VueRouter({
  routes // сокращение от `routes: routes`
})

// 4. Создаём и монтируем корневой экземпляр Vue нашего приложения.
// Удостоверьтесь, что передали экземпляр роутера в опции `router`,
// что позволит приложению знать о его наличии
const app = new Vue({
  router
}).$mount('#app')


