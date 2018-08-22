<script>
  import {menuItems} from '../MainMenu'
  import Core from '../../core'
  import Base from '../../mixins/Base'

  export default {
    name: 'shop-quick-nav',

    props: [
      'active'
    ],

    mixins: [
      Base
    ],

    data() {
      return {
        items: []
      }
    },

    methods: {
      prepareItems(menuItems = []) {
        return menuItems.reduce((acc, item) => {
          if (item.permission && !this.userCan(item.permission)) {
            return acc
          }

          if (item.children instanceof Array && item.children.length > 0) {
            let children = this.prepareItems(item.children)

            if (children.length === 0) {
              return acc
            }

            acc.push({
              ... item,
              children
            })

            return acc
          }

          acc.push(item)

          return acc
        }, [])
      },

      isActive(item) {
        return item.url && item.url.indexOf( this.active ) !== -1
      }
    },

    mounted() {
      this.items = this.prepareItems(Core.getMainMenuData()[0].children)
    }
  }

</script>

<template>
  <div class="content-header" v-if="items.length > 0">
    <ul class="nav-horizontal text-center">
      <template v-for="item in items">
        <li v-if="item.url" :class="{ active: isActive(item) }" :key="item.url">
          <router-link :to="item.url"><i :class="item.icon"></i> {{ item.title }}</router-link>
        </li>
      </template>
    </ul>
  </div>
</template>
