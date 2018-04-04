<script>
  export default {
    name: 'shop-quick-nav',

    props: [
      'active'
    ],

    data() {
      return {
        links: [
          {
            url: '/shop/products',
            icon: 'gi gi-shopping_bag',
            title: 'Товары'
          },
          {
            url: '/shop/categories',
            icon: 'fa fa-folder',
            title: 'Категории'
          },
          {
            url: '/shop/suppliers',
            icon: 'fa fa-truck',
            title: 'Поставщики'
          },

          // {
          //   url: '/shop/attributes',
          //   icon: 'fa fa-list',
          //   title: 'Аттрибуты'
          // },

          // {
          //   url: '/shop/orders',
          //   icon: 'gi gi-shop_window',
          //   title: 'Заказы'
          // },
          // {
          //   url: '/shop/customers',
          //   icon: 'gi gi-user',
          //   title: 'Клиенты'
          // },
        ]
      }
    },

    methods: {
      isActive(item) {
        return item.url.indexOf( this.active ) !== -1
      }
    }
  }

</script>

<template>
  <div class="content-header">
    <ul class="nav-horizontal text-center">
      <li v-for="(item, index) in links" :class="{ active: isActive(item) }">
        <router-link :to="item.url"><i :class="item.icon"></i> {{ item.title }}</router-link>
      </li>
    </ul>
  </div>
</template>
