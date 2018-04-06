<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import Core from '../../../core'
  import CategoriesTableTree from './CategoriesTableTree'
  import ShopQuickNav from '../ShopQuickNav'

  import TablePage from '../../../mixins/TablePage'
  import Sortable from '../../../mixins/Sortable'


  export default {
    name: 'categories-table',

    mixins: [
      TablePage,
      Sortable
    ],

    components : {
      ShopQuickNav,
      bModal,
      CategoriesTableTree
    },

    methods: {
      /**
       * Отчистка очереди.
       */
      clearQueue() {
        this.sortQueue.clear()
        this.statusQueue.clear()
      },
    },

    created() {
      this.sortQueue = Core.queueHandler.makeQueue('break', 'table-sort')
    },

    updated() {
      this.initSort()
    },

    beforeDestroy() {
      this.clearQueue()
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="categories"></shop-quick-nav>

    <div class="block full">
      <div class="block-title">
        <h1><strong>Категории</strong></h1>

        <div class="block-title-control">
          <router-link to="/shop/categories/create" class="btn btn-sm btn-success active"><i class="fa fa-plus-circle"></i> Создать</router-link>
        </div>
      </div>

      <div class="table-responsive" id="categories-table-page">

        <div class="table table-center table-condensed table-bordered table-hover table-categories dataTable no-footer">
          <div class="table-head">
            <div class="table-row">
              <div class="table-cell text-center">
                ID
              </div>
              <div class="table-cell">
                Название
              </div>
              <div class="table-cell">
                Slug
              </div>
              <div class="table-cell">
                Статус
              </div>
              <div class="table-cell"></div>
            </div>
          </div>

          <categories-table-tree v-if="items && items.length" :tree="items" level="0" :statusChange="statusChange" :remove="remove"></categories-table-tree>

          <div v-if="!items.length" class="table-group">
            <div class="table-row">
              <div class="table-cell table-cell-empty text-center">
                Список категорий пуст
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <b-modal id="removeModal"
      ref="removeModal"
      title="Удаление категории"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">
      Вы действительно хотите удалить категорию?
    </b-modal>
  </div>
</template>