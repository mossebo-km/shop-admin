<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import Core from '../../../core'
  import CategoriesTableTree from './CategoriesTableTree'
  import ShopQuickNav from '../ShopQuickNav'

  import Base from '../../../mixins/Base'
  import Sortable from '../../../mixins/Sortable'


  export default {
    name: 'categories-table',

    mixins: [Base, Sortable],

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
      fetchItems() {
        new Core.requestHandler('get', this.prepareUrl())
          .success(response => this.initTree(response))
          .start()
      },

      /*
        Инициализация списка.
       */
      initTree (response) {
        this.tree = response.data ? response.data.tree || [] : []
      },

      /*
        Смена статуса записи.
       */
      statusChange(id) {
        this.statusQueue.add(new Core.requestHandler('get', this.prepareUrl(`${id}/status`)))
      },

      /*
        Нажатие на кнопку удаления записи.
       */
      remove(id) {
        var _ = this;

        this.toRemoveId = id
        this.$refs.removeModal.show()
      },

      /*
        При подтвержении удаления записи.
       */
      removeConfirm() {
        new Core.requestHandler('delete', this.prepareUrl(`${this.toRemoveId}`))
          .success(() => this.fetchItems())
          .start()
      },



      /*
        Отчистка очереди
       */
      clearQueue() {
        this.sortQueue.clear()
        this.statusQueue.clear()
      },
    },

    created() {
      this.sortQueue = Core.queueHandler.makeQueue('break', 'category-sort')
      this.statusQueue = Core.queueHandler.makeQueue('iteration', 'category-status')
    },

    updated() {
      this.initSort()
    },

    beforeDestroy() {
      this.clearQueue()
    },

    beforeRouteEnter(to, from, next) {
        return new Core.requestHandler('get', '/api' + to.path)
          .success(response => {
            next(vm => {
              vm.initTree(response)
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

          <categories-table-tree v-if="tree && tree.length" :tree="tree" level="0" :statusChange="statusChange" :remove="remove"></categories-table-tree>

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
      @ok="removeConfirm">
      Вы действительно хотите удалить категорию?
    </b-modal>
  </div>
</template>