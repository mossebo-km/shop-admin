<script>
  import Core from '../../../core'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import CategoriesTableTree from './CategoriesTableTree'
  import ShopQuickNav from '../ShopQuickNav'
  import LanguagePicker from '../../LanguagePicker'

  import TablePage from '../../../mixins/TablePage'
  import Sortable from '../../../mixins/Sortable'
  import Translatable from '../../../mixins/Translatable'

  import CategoriesTableModel from '../../../resources/CategoriesTableModel'


  /*
    todo: Разобраться с сортировкой. Пересмотреть формат таблицы.
   */
  export default {
    name: 'categories-table',

    mixins: [
      TablePage,
      Sortable,
      Translatable
    ],

    components : {
      ShopQuickNav,
      bModal,
      CategoriesTableTree,
      LanguagePicker
    },

    watch: {
      items: 'refreshSort'
    },

    data() {
      return {
        tableItemsDataName: 'categories',

        sortableParams: {
          items: '> .js-sort-item',
          handle: '.js-sort-handler',
          opacity: 0.9,
          start: function(e, helper) {
            let height = helper.item.height()
            helper.placeholder.css({
              height,
              visibility: 'visible'
            })
          },
        },

        usedMainData: [
          'languages'
        ]
      }
    },

    methods: {
      createQueue() {
        this.sortQueue = Core.queueHandler.makeQueue('break', 'table-sort')
        this.statusQueue = Core.queueHandler.makeQueue('iteration', 'table-status')
      },

      initItems(items = []) {
        this.items = items.map(item => new CategoriesTableModel(item, this.languages))
      },

      /**
       * Отчистка очереди.
       */
      clearQueue() {
        this.sortQueue.clear()
        this.statusQueue.clear()
      },
    },

    created() {
      this.createQueue()
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
      <div class="block-title clearfix">
        <h1><strong>Категории</strong></h1>

        <div class="block-title-control">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" :class="{'has-error': formTranslatesHasError()}"></language-picker>

          <span v-if="languages.length > 1" class="btn-separator-xs"></span>

          <router-link to="/shop/categories/create" class="btn btn-sm btn-success active"><i class="fa fa-plus-circle"></i> Создать</router-link>
        </div>
      </div>

      <div class="table-responsive">

        <div class="table table-center table-condensed table-bordered table-hover table-categories table-sortable dataTable no-footer table-sortable">
          <div class="table-head">
            <div class="table-row">
              <div class="table-cell"></div>

              <div class="table-cell text-center">
                ID
              </div>
              <div class="table-cell">
                Название
              </div>
              <div class="table-cell">
                Slug
              </div>
<<<<<<< Updated upstream
              <div class="table-cell">
=======

              <div class="table-cell table-cell-column-num">
                Товаров
              </div>

              <div v-if="userCan('categories.edit')" class="table-cell table-cell-column-enabled">
>>>>>>> Stashed changes
                Статус
              </div>
              <div class="table-cell"></div>
            </div>
          </div>

          <categories-table-tree v-if="items && items.length" :tree="items" level="0" :statusChange="statusChange" :remove="remove" :activeLanguageCode="activeLanguageCode"></categories-table-tree>

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