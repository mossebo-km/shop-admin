<script>
  import ShopQuickNav from '../ShopQuickNav'

  export default {
    name: 'customers-table',

    components : {
      'shop-quick-nav': ShopQuickNav,
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="customers"></shop-quick-nav>
  </div>
</template>