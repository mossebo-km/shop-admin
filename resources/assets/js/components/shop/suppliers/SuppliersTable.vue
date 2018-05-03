<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import ShopQuickNav from '../ShopQuickNav'

  import TablePage from '../../../mixins/TablePage'
  import Sortable from '../../../mixins/Sortable'
  import StatusChangeable from '../../../mixins/StatusChangeable'
  import Toggle from '../../Toggle'

  import SuppliersTableModel from '../../../resources/SuppliersTableModel'

  export default {
    name: 'suppliers-table',

    mixins: [
      Sortable,
      StatusChangeable,
      TablePage
    ],

    components : {
      ShopQuickNav,
      bModal,
      Toggle,
    },

    data() {
      return {
        tableItemsDataName: 'suppliers',
      }
    },

    methods: {
      initItems (items = []) {
        this.items = items.map(item => new SuppliersTableModel(item))
      },
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="suppliers" />

    <div class="block full">
      <div class="block-title clearfix">
        <h1>
          <strong>
            Категории
          </strong>
        </h1>

        <div class="block-title-control" v-if="userCan('suppliers.create')">
          <router-link to="/shop/suppliers/create" class="btn btn-sm btn-success active">
            <i class="fa fa-plus-circle"></i> Создать
          </router-link>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-middle table-center table-condensed table-bordered table-hover">
          <thead>
            <tr>
              <th>
                <span class="table-column-id">
                  ID
                </span>
              </th>

              <th style="width: 100%">
                Название
              </th>

              <th v-if="userCan('suppliers.edit')">
                <span class="table-column-enabled">
                  Статус
                </span>
              </th>

              <th v-if="userCan('suppliers.delete')">
                <span class="table-column-delete"></span>
              </th>
            </tr>
          </thead>

          <tbody>
            <tr v-if="items && items.length" v-for="supplier in items">
              <td class="text-center">
                <strong class="table-column-id">
                  <router-link :to="supplier.url">{{ supplier.id }}</router-link>
                </strong>
              </td>

              <td style="width: 100%">
                <router-link :to="supplier.url">{{ supplier.name }}</router-link>
              </td>

              <td v-if="userCan('suppliers.edit')">
                <span class="table-column-enabled">
                  <toggle @change="statusChange(supplier.id)" :checked="supplier.enabled" :key="supplier.id"></toggle>
                </span>
              </td>

              <td v-if="userCan('suppliers.delete')">
                <span class="table-column-delete">
                  <a class="btn btn-danger" @click="remove(supplier.id)">
                    <i class="fa fa-times"></i>
                  </a>
                </span>
              </td>
            </tr>

            <tr v-if="! (items && items.length)">
              <td class="text-center" colspan="4">
                Список поставщиков пуст.
              </td>
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