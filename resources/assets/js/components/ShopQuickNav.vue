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
            url: '/categories',
            icon: 'gi-list',
            title: 'Категории'
          },
          {
            url: '/products',
            icon: 'gi-shopping_bag',
            title: 'Товары'
          },
          {
            url: '/orders',
            icon: 'gi-shop_window',
            title: 'Заказы'
          },
          {
            url: '/customers',
            icon: 'gi-user',
            title: 'Клиенты'
          },
        ]
      }
    },

    methods: {
      isActive(item) {
        return item.url.replace('/', '') === this.active;
      }
    }
  }

</script>

<template>
  <div class="content-header">
    <ul class="nav-horizontal text-center">
      <li v-for="(item, index) in links" :class="{ active: isActive(item) }">
        <router-link :to="item.url"><i :class="['gi', item.icon]"></i> {{ item.title }}</router-link>
      </li>
    </ul>
  </div>
</template>
