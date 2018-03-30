<script>
  import ShopQuickNav from '../../ShopQuickNav.vue'

  export default {
    name: 'manufacturers-table',

    components : {
      'shop-quick-nav': ShopQuickNav,
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="manufacturers"></shop-quick-nav>
  </div>
</template>