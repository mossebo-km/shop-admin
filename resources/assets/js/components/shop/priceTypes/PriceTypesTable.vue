<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import ShopQuickNav from '../ShopQuickNav'

  import TablePage from '../../../mixins/TablePage'
  import Sortable from '../../../mixins/Sortable'
  import StatusChangeable from '../../../mixins/StatusChangeable'
  import Translatable from '../../../mixins/Translatable'

  import Toggle from '../../Toggle'
  import LanguagePicker from '../../LanguagePicker'

  import PriceTypesTableModel from '../../../resources/PriceTypesTableModel'

  export default {
    name: 'price-type-table',

    mixins: [
      Sortable,
      StatusChangeable,
      TablePage,
      Translatable
    ],

    components: {
      Toggle,
      ShopQuickNav,
      bModal,
      LanguagePicker
    },

    props: [
      'id',
    ],

    data() {
      return {
        tableItemsDataName: 'price-types',
        usedMainData: [
          'languages'
        ]
      }
    },

    methods: {
      initItems (items = []) {
        this.items = this.getSortedData(items).map(item => new PriceTypesTableModel(item, this.languages))
      },
    }
  }
</script>

<template>
  <div>
    <shop-quick-nav active="price-types" />

    <div class="block full">
      <div class="block-title clearfix">
        <h1>
          <strong>
            Типы цен
          </strong>
        </h1>

        <div class="block-title-control">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" />

          <span class="btn-separator-xs"></span>

          <router-link v-if="userCan('price-types.create')" to="/shop/price-types/create" class="btn btn-sm btn-success active">
            <i class="fa fa-plus-circle"></i> Создать
          </router-link>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-middle table-center table-condensed table-bordered table-hover table-sortable">
          <thead>
            <tr>
              <th v-if="userCan('price-types.edit')">
                <span class="table-column-sort"></span>
              </th>

              <th style="width: 100%">
                Название
              </th>

              <th class="text-center" v-if="userCan('price-types.edit')">
                <span class="table-column-enabled">
                  Статус
                </span>
              </th>

              <th v-if="userCan('price-types.delete')">
                <span class="table-column-delete"></span>
              </th>
            </tr>
          </thead>

          <tbody class="ui-sortable">
            <tr v-for="priceType in items" :key="priceType.id" class="js-sort-item">
              <td class="table-sort-handler js-sort-handler" v-if="userCan('price-types.edit')">
                <span>
                  <input type="hidden" name="ids" :value="priceType.id">
                </span>
              </td>

              <td style="width: 100%">
                <router-link v-bind:to="priceType.url">
                  <strong v-html="priceType.i18n[activeLanguageCode].title"></strong>
                </router-link>
              </td>

              <td v-if="userCan('price-types.edit')">
                <span class="table-column-enabled table-remove-restore__restore">
                  <toggle @change="statusChange(priceType.id)" :checked="priceType.enabled"></toggle>
                </span>
              </td>

              <td v-if="userCan('price-types.delete')">
                <span class="table-column-delete">
                  <a class="btn btn-danger" @click="remove(priceType.id)">
                    <i class="fa fa-times"></i>
                  </a>
                </span>
              </td>
            </tr>

            <tr v-if="! (items && items.length)">
              <td class="text-center" colspan="5">
                Список типов цен пуст.
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <b-modal
      id="removeModal"
      ref="removeModal"
      title="Удаление типа цены"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить тип цены?
    </b-modal>
  </div>
</template>

