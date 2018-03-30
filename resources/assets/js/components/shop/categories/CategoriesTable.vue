<script>
  import Sortable from 'jquery-ui-sortable-npm'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import Core from '../../../core'
  import CategoriesTableTree from './CategoriesTableTree'
  import ShopQuickNav from '../ShopQuickNav'


  export default {
    name: 'categories-table',

    data () {
      return {
        tree: []
      }
    },

    components : {
      'shop-quick-nav': ShopQuickNav,
      'b-modal': bModal,
      'categories-table-tree': CategoriesTableTree
    },

    methods: {
      /*
        Инициализация списка.
      */
      initItems (response) {
        this.tree = response.data ? response.data.tree || [] : []
      },


      /*
        Смена статуса категории.
      */

      onStatusChange(id) {
        this.statusQueue.add(new Core.requestHandler('get', `/api/categories/${id}/status`))
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
          .success(response => this.initItems(response))
          .start()
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

        this.sortQueue.add(new Core.requestHandler('post', '/api/categories/sort', {ids}))
      },

      clearQueue() {
        this.sortQueue.clear()
        this.statusQueue.clear()
      },
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

    created() {
      this.sortQueue = Core.queueHandler.makeQueue('break', 'category-sort')
      this.statusQueue = Core.queueHandler.makeQueue('iteration', 'category-status')
    },

    updated() {
      this.onRefresh()
    },

    beforeDestroy() {
      this.clearQueue()
    },

    beforeRouteEnter(to, from, next) {
        return new Core.requestHandler('get', '/api' + to.path)
          .success(response => {
            next(vm => {
              vm.initItems(response)
            })
          })
          .start()
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