<script>
  import ShopQuickNav from './ShopQuickNav.vue'
  import Loading from './Loading.vue'
  import noty from '../scripts/noty.js'
  import Core from '../core'
  import Sortable from 'jquery-ui-sortable-npm'
  import CategoriesTableTree from './CategoriesTableTree'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  export default {
    name: 'categories-table',
    data () {
      return {
        loading: false,
        tree: []
      }
    },
    watch: {
      '$route': 'fetchItems'
    },
    methods: {
      /*
        Загрузка списка.
      */

      fetchItems () {
        this.abortRequest()
        this.loading = true

        this.fetchItemsRequest = new Core.requestHandler('get', `/api${this.$route.path}`)
          .success(response => {
            this.tree = response.data.tree || []
          })
          .any(() => {
            this.abortRequest()
          })
      },


      /*
        Отмена запроса.
      */

      abortRequest() {
        if (this.fetchItemsRequest) {
          this.loading = false
          this.fetchItemsRequest.abort()
          this.fetchItemsRequest = false;
        }
      },


      /*
        Смена статуса категории.
      */

      onStatusChange(id) {
        new Core.requestHandler('get', `/api/categories/${id}/status`)
      },


      /*
        Нажатие на кнопку удаления записи.
      */

      onRemove(id) {
        var _ = this;

        this.toRemoveId = id
        this.$refs.removeModal.show()
      },


      /*
        При подтвержении удаления записи.
      */

      onRemoveConfirm() {
        new Core.requestHandler('delete', `/api/categories/${this.toRemoveId}`)
          .success(this.fetchItems)
      },


      /*
        При обновлении списка записей.
      */

      onRefresh() {
        $( ".ui-sortable" ).sortable({
          nested: true,
          stop: this.onPositionChange,
        });
      },


      /*
        При изменении порядка записей.
      */

      onPositionChange() {
        let ids = [];

        [].forEach.call(document.querySelectorAll('[name="ids"]'), el => {
          ids.push(el.value);
        });

        new Core.requestHandler('post', '/api/categories/sort', {ids})
      }
    },

    computed: {
      showedFrom: function() {
        return (this.currentPage - 1) * this.perPage + 1
      },

      showedTo: function() {
        let to = this.currentPage * this.perPage
        return (to > this.totalRows ? this.totalRows : to)
      },

      showPagination: function() {
        return this.perPage < this.totalRows;
      },
    },

    components : {
      'shop-quick-nav': ShopQuickNav,
      'loading': Loading,
      'b-modal': bModal,
      'categories-table-tree': CategoriesTableTree
    },

    mounted() {
      this.fetchItems()
    },

    updated() {
      this.onRefresh()
    },

    beforeDestroy() {
      this.abortRequest()
    }
  }
</script>

<template>
  <div>
    <shop-quick-nav active="categories"></shop-quick-nav>

    <div class="block full">
      <div class="block-title">
        <h1><strong>Категории</strong></h1>
      </div>

      <loading :loading="loading">
        <div class="table-responsive" id="categories-table-page">

          <div class="table table-vcenter table-condensed table-bordered table-hover table-categories dataTable no-footer">
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
                  Количество товаров
                </div>
                <div class="table-cell">
                  Статус
                </div>
                <div class="table-cell"></div>
              </div>
            </div>

            <categories-table-tree v-if="tree.length" :tree="tree" level="0" :onStatusChange="onStatusChange" :onRemove="onRemove"></categories-table-tree>

            <div v-if="!tree.length" class="table-group">
              <div class="table-row">
                <div class="table-cell table-cell-empty text-center">
                  Список категорий пуст
                </div>
              </div>
            </div>
          </div>

        </div>
      </loading>
    </div>

    <b-modal id="removeModal"
      ref="removeModal"
      title="Удаление категории"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="onRemoveConfirm">
      Вы действительно хотите удалить категорию?
    </b-modal>
  </div>
</template>