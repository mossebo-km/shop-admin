<script>
  import ShopQuickNav from './ShopQuickNav.vue'

  export default {
    name: 'orders-table',

    components : {
      'shop-quick-nav': ShopQuickNav,
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="orders"></shop-quick-nav>
  </div>
</template>