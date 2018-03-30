<script>
  import Toggle from '../../Toggle'

  export default {
    name: 'categories-table-tree',

    props: [
      'tree',
      'level',
      'onStatusChange',
      'onRemove',
      'parentId'
    ],

    data() {
      return {
        expanded: []
      }
    },

    components: {
      'toggle': Toggle,
    },

    methods: {
      expand(categoryId) {
        const index = this.expanded.indexOf(categoryId)

        if (index === -1) {
          this.expanded.push(categoryId)
        }
        else {
          this.expanded.splice(index, 1)
        }
      },

      isExpanded(categoryId) {
        return this.expanded.indexOf(categoryId) !== -1
      }
    }
  }
</script>

<template>
  <div :class="'ui-sortable table-group table-level-' + level">
    <div v-for="(category, key) in tree" class="ui-sortable-handle">
      <input type="hidden" :value="category.id" name="ids">

      <div class="table-row">
        <div class="table-cell text-center">
          <router-link v-bind:to="'/shop/categories/' + category.id"><strong>{{ category.id }}</strong></router-link>
        </div>

        <div class="table-cell lev">
          <span v-if="category.sub" @click="expand(category.id)" :class="`btn btn-primary btn-expand${isExpanded(category.id) ? ' btn-alt' : ''}`">
            <i class="fa fa-plus" v-if="!isExpanded(category.id)"></i>
            <i class="fa fa-minus" v-else="isExpanded(category.id)"></i>
          </span>
          <router-link v-bind:to="'/shop/categories/' + category.id"><strong>{{ category.title }}</strong></router-link>
        </div>

        <div class="table-cell">
          <a :href="'/categories/' + category.slug" target="_blank" rel="external">
            <strong>{{ category.slug }}</strong>
            <i class="fa fa-external-link"></i>
          </a>
        </div>

        <div class="table-cell text-center">
          <toggle @change="onStatusChange(category.id)" :checked="category.enabled" :key="category.id"></toggle>
        </div>

        <div class="table-cell text-center">
          <a href="javascript:void(0)" data-toggle="tooltip" title="Удалить" class="btn btn-danger" @click="onRemove(category.id)"><i class="fa fa-times"></i></a>
        </div>
      </div>

      <categories-table-tree v-if="category.sub" v-show="isExpanded(category.id)"
        :tree="category.sub"
        :level="parseInt(level) + 1"
        :onStatusChange="onStatusChange"
        :onRemove="onRemove"
        :parentId="category.id">
      </categories-table-tree>
    </div>
  </div>
</template>