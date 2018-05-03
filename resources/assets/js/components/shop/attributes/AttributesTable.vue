<script>
  import TablePage from '../../../mixins/TablePage'
  import Sortable from '../../../mixins/Sortable'
  import StatusChangeable from '../../../mixins/StatusChangeable'
  import Translatable from '../../../mixins/Translatable'


  import ShopQuickNav from '../ShopQuickNav'
  import Toggle from '../../Toggle'
  import LanguagePicker from '../../LanguagePicker'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import AttributesTableModel from '../../../resources/AttributesTableModel'


  export default {
    name: "attributes-table",

    mixins: [
      Sortable,
      StatusChangeable,
      TablePage,
      Translatable,
    ],

    components: {
      Toggle,
      LanguagePicker,
      ShopQuickNav,
      bModal
    },

    data() {
      return {
        tableItemsDataName: 'attributes',

        usedMainData: [
          'languages',
        ],
      }
    },

    methods: {
      initItems (items = []) {
        this.items = this.getSortedData(items).map(item => new AttributesTableModel(item, this.languages))
      },
    }
  }
</script>

<template>
  <div>
    <shop-quick-nav active="attributes" />

    <div class="block full">
      <div class="block-title clearfix">
        <h1><strong>Аттрибуты</strong></h1>

        <div class="block-title-control">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode"></language-picker>

          <span v-if="languages.length > 1" class="btn-separator-xs"></span>

          <router-link v-if="userCan('attributes.create')" to="/shop/attributes/create" class="btn btn-sm btn-success active">
            <i class="fa fa-plus-circle"></i> Создать
          </router-link>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-middle table-center table-condensed table-bordered table-hover table-sortable table-attributes">
          <thead>
            <tr>
              <th v-if="userCan('attributes.edit')">
                <span class="table-column-sort"></span>
              </th>

              <th>
                <span class="table-column-id">ID</span>
              </th>

              <th style="width:100%">Название</th>

              <th v-if="userCan('attributes.edit')">
                <span class="table-column-enabled">
                  Статус
                </span>
              </th>

              <th v-if="userCan('attributes.delete')">
                <span class="table-column-delete"></span>
              </th>
            </tr>
          </thead>

          <tbody class="ui-sortable">
            <tr v-for="attribute in items" :key="attribute.id" class="js-sort-item">
              <td v-if="userCan('attributes.edit')" class="table-sort-handler js-sort-handler">
                <span>
                  <input type="hidden" name="ids" :value="attribute.id">
                </span>
              </td>

              <td>
                <span class="table-column-id">
                  <router-link v-bind:to="attribute.url">
                    <strong>{{ attribute.id }}</strong>
                  </router-link>
                </span>
              </td>

              <td style="width:100%">
                <router-link v-bind:to="attribute.url">
                  <strong>{{ attribute.i18n[activeLanguageCode].title }}</strong>
                </router-link>
              </td>

              <td v-if="userCan('attributes.edit')">
                <span class="table-column-enabled table-remove-restore__restore">
                  <toggle @change="statusChange(attribute.id)" :checked="attribute.enabled"></toggle>
                </span>
              </td>

              <td v-if="userCan('attributes.delete')">
                <span class="table-column-delete">
                  <a class="btn btn-danger" @click="remove(attribute.id)">
                    <i class="fa fa-times"></i>
                  </a>
                </span>
              </td>
            </tr>

            <tr v-if="! (items && items.length)">
              <td class="text-center" colspan="5">Список аттрибутов пуст</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <b-modal
      id="removeModal"
      ref="removeModal"
      title="Удаление аттрибута"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить аттрибут?
    </b-modal>
  </div>
</template>