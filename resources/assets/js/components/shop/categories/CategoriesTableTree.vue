<script>
  import Toggle from '../../Toggle'

  export default {
    name: 'categories-table-tree',

    props: [
      'tree',
      'level',
      'statusChange',
      'remove',
      'parentId',
      'activeLanguageCode'
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
    <div v-for="category in tree" class="js-sort-item" :key="category.id">
      <input type="hidden" :value="category.id" name="ids">

      <div class="table-row">
        <div class="table-cell table-sort-handler js-sort-handler"><span></span></div>

        <div class="table-cell text-center">
          <router-link v-bind:to="category.url"><strong>{{ category.id }}</strong></router-link>
        </div>

        <div class="table-cell lev">
          <span v-if="category.sub" @click="expand(category.id)" :class="`btn btn-primary btn-expand${isExpanded(category.id) ? ' btn-alt' : ''}`">
            <i class="fa fa-plus" v-if="!isExpanded(category.id)"></i>
            <i class="fa fa-minus" v-else="isExpanded(category.id)"></i>
          </span>

          <router-link v-bind:to="category.url"><strong v-html="category.i18[activeLanguageCode].title"></strong></router-link>
        </div>

        <div class="table-cell">
          <a :href="category.siteUrl" target="_blank" rel="external">
            <strong>{{ category.slug }}</strong>
            <i class="fa fa-external-link"></i>
          </a>
        </div>

        <div class="table-cell text-center">
          <toggle @change="statusChange(category.id)" :checked="category.enabled" :key="category.id"></toggle>
        </div>

        <div class="table-cell text-center">
          <a href="javascript:void(0)" data-toggle="tooltip" title="Удалить" class="btn btn-danger" @click="remove(category.id)"><i class="fa fa-times"></i></a>
        </div>
      </div>

      <categories-table-tree v-if="category.sub" v-show="isExpanded(category.id)"
        :tree="category.sub"
        :level="parseInt(level) + 1"
        :statusChange="statusChange"
        :remove="remove"
        :activeLanguageCode="activeLanguageCode"
        :parentId="category.id">
      </categories-table-tree>
    </div>
  </div>
</template>