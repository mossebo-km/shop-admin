<script>
  import Toggle from './Toggle.vue'

  export default {
    name: 'categories-table-tree',
    props: ['tree', 'level', 'onStatusChange', 'onRemove', 'parentId'],
    components: {
      'toggle': Toggle,
    },
    methods: {
      expand(id) {
        document.querySelector(`#table-group-${id}`).classList.toggle('expanded');
      },
    }
  }
</script>

<template>
  <div :class="'ui-sortable table-group table-level-' + level" :id="'table-group-' + (parentId || 0)">
    <div v-for="(category, key) in tree" class="ui-sortable-handle">
      <input type="hidden" :value="category.id" name="ids">

      <div class="table-row">
        <div class="table-cell text-center">
          <router-link v-bind:to="'/categories/' + category.id"><strong>CID.{{ category.id }}</strong></router-link>
        </div>

        <div class="table-cell lev">
          <span v-if="category.sub" @click="expand(category.id)" class="btn btn-primary btn-expand">
            <i class="fa fa-plus"></i>
          </span>
          <router-link v-bind:to="'/categories/' + category.id"><strong>{{ category.title }} #{{ category.id }}</strong></router-link>
        </div>

        <div class="table-cell">
          <a :href="'/categories/' + category.slug" target="_blank" rel="external">
            <strong>{{ category.slug }}</strong>
            <i class="fa fa-external-link"></i>
          </a>
        </div>

        <div class="table-cell">
          {{ category.created_at }}
        </div>

        <div class="table-cell text-center">
          <toggle @change="onStatusChange(category.id)" :checked="category.enabled" :key="category.id"></toggle>
        </div>

        <div class="table-cell text-center">
          <a href="javascript:void(0)" data-toggle="tooltip" title="Удалить" class="btn btn-danger" @click="onRemove(category.id)"><i class="fa fa-times"></i></a>
        </div>
      </div>

      <categories-table-tree v-if="category.sub"
        :tree="category.sub"
        :level="parseInt(level) + 1"
        :onStatusChange="onStatusChange"
        :onRemove="onRemove"
        :parentId="category.id">
      </categories-table-tree>
    </div>
  </div>
</template>