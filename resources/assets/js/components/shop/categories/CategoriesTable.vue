<script>
  import Core from '../../../core'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import CategoriesTableTree from './CategoriesTableTree'
  import ShopQuickNav from '../ShopQuickNav'
  import LanguagePicker from '../../LanguagePicker'

  import TablePage from '../../../mixins/TablePage'
  import Sortable from '../../../mixins/Sortable'
  import StatusChangeable from '../../../mixins/StatusChangeable'
  import Translatable from '../../../mixins/Translatable'

  import CategoriesTableModel from '../../../resources/CategoriesTableModel'

  /*
    todo: Разобраться с сортировкой. Пересмотреть формат таблицы.
   */
  export default {
    name: 'categories-table',

    mixins: [
      StatusChangeable,
      Sortable,
      TablePage,
      Translatable,
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

        usedMainData: [
          'languages'
        ],
      }
    },

    methods: {
      getSortParams() {
        return {
          ... this.getDefaultSortParams(),
          items: '> .js-sort-item',
        }
      },

      initItems(items = []) {
        this.items = items.map(item => new CategoriesTableModel(item, this.languages))
      },

      expandAll() {
        Core.events.trigger('categories-expand-all')
      },

      compressAll() {
        Core.events.trigger('categories-compress-all')
      }
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="categories" />

    <div class="block full">
      <div class="block-title clearfix">
        <h1>
          <strong>
            Категории
          </strong>
        </h1>

        <div class="block-title-control">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" />

          <span class="btn-separator-xs"></span>

          <a class="btn btn-default btn-sm btn-alt" @click="expandAll">
            <i class="fa fa-expand"></i> Раскрыть все
          </a>

          <a class="btn btn-default btn-sm btn-alt" @click="compressAll">
            <i class="fa fa-compress"></i> Свернуть все
          </a>

          <span class="btn-separator-xs"></span>

          <router-link v-if="userCan('categories.create')" to="/shop/categories/create" class="btn btn-sm btn-success active">
            <i class="fa fa-plus-circle"></i> Создать
          </router-link>
        </div>
      </div>

      <div class="table-responsive">

        <div class="table table-middle table-center table-condensed table-bordered table-hover table-sortable">
          <div class="table-head">
            <div class="table-row">
              <div v-if="userCan('categories.edit')" class="table-cell table-cell-column-sort"></div>

              <div class="table-cell table-cell-column-id">
                ID
              </div>

              <div class="table-cell">
                Название
              </div>

              <div class="table-cell table-cell-column-slug">
                Slug
              </div>

              <div class="table-cell table-cell-column-num">
                Товаров
              </div>

              <div v-if="userCan('categories.edit')" class="table-cell table-cell-column-enabled">
                Статус
              </div>

              <div v-if="userCan('categories.delete')" class="table-cell table-cell-column-delete"></div>
            </div>
          </div>

          <categories-table-tree
            v-if="items && items.length"
            :tree="items"
            level="0"
            :statusChange="statusChange"
            :remove="remove"
            :activeLanguageCode="activeLanguageCode" />

          <div v-if="!items.length" class="table-group">
            <div class="table-row">
              <div class="table-cell table-cell-empty text-center">
                Список категорий пуст.
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