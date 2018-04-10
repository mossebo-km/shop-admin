<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import ShopQuickNav from '../ShopQuickNav'

  import Core from '../../../core'
  import TablePage from '../../../mixins/TablePage'
  import Sortable from '../../../mixins/Sortable'
  import Toggle from '../../Toggle'

  export default {
    name: 'suppliers-table',

    mixins: [
      TablePage,
      Sortable,
    ],

    components : {
      ShopQuickNav,
      bModal,
      Toggle,
    },

    methods: {
      /**
       * При изменении порядка записей.
       */
      onPositionChange() {
        let ids = [];

        [].forEach.call(document.querySelectorAll('[name="ids"]'), el => {
          ids.push(el.value);
        });

        this.sortQueue.add(new Core.requestHandler('post', this.prepareUrl(), {ids}))
      },

      /**
       *
       */
      clearQueue() {
        this.sortQueue.clear()
        this.statusQueue.clear()
      },
    },

    created() {
      this.sortQueue = Core.queueHandler.makeQueue('iteration', 'category-sort')
    },

    updated() {
      this.initSort()
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="suppliers"></shop-quick-nav>

    <div class="block full">
      <div class="block-title clearfix">
        <h1><strong>Категории</strong></h1>

        <div class="block-title-control">
          <router-link to="/shop/suppliers/create" class="btn btn-sm btn-success active"><i class="fa fa-plus-circle"></i> Создать</router-link>
        </div>
      </div>

      <div class="table-responsive" id="categories-table-page">
        <table class="table table-middle table-center table-condensed table-bordered table-hover table-categories dataTable">
          <thead>
            <tr>
              <th style="width: 128px" class="text-center">Id</th>
              <th>Название</th>
              <th style="width: 128px" class="text-center">Статус</th>
              <th style="width: 128px"></th>
            </tr>
          </thead>

          <tbody>
            <tr v-if="items && items.length" v-for="supplier in items">
              <td class="text-center"><strong><router-link :to="`/shop/suppliers/${supplier.id}`">{{ supplier.id }}</router-link></strong></td>
              <td><router-link :to="`/shop/suppliers/${supplier.id}`">{{ supplier.name }}</router-link></td>
              <td class="text-center">
                <toggle @change="statusChange(supplier.id)" :checked="supplier.enabled" :key="supplier.id"></toggle>
              </td>
              <td class="text-center">
                <a href="javascript:void(0)" data-toggle="tooltip" title="Удалить" class="btn btn-danger" @click="remove(supplier.id)"><i class="fa fa-times"></i></a>
              </td>
            </tr>

            <tr v-if="! (items && items.length)">
              <td class="text-center" colspan="4">Список поставщиков пуст</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

    <b-modal
      id="removeModal"
      ref="removeModal"
      title="Удаление поставщика"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить поставщика?
    </b-modal>
  </div>
</template>