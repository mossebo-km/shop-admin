<script>
  import Core from '../../../core'

  import TablePage from '../../../mixins/TablePage'
  import Sortable from '../../../mixins/Sortable'
  import Translatable from '../../../mixins/Translatable'


  import ShopQuickNav from '../ShopQuickNav'
  import Toggle from '../../Toggle'
  import LanguagePicker from '../../LanguagePicker'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import AttributesTableModel from '../../../resources/AttributesTableModel'


  export default {
    name: "attributes-table",

    mixins: [
      TablePage,
      Sortable,
      Translatable
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

        defaultTranslatableFieldsValues: {
          title: ''
        },

        usedMainData: [
          'languages',
        ],

        sortableParams: {
          items: '.js-sort-item',
          handle: '.js-sort-handler',
          opacity: 0.9,
          start: function(e, helper) {
            let height = helper.item.height()
            helper.placeholder.css({
              height,
              visibility: 'visible'
            })
          },
          stop: this.changePosition,
        }
      }
    },

    methods: {
      initItems (data) {
        this.items = data[this.tableItemsDataName].map(item => new AttributesTableModel(item, this.languages))
      },

      changePosition() {
        new Core.requestHandler('post', this.prepareUrl('sort'), {
          ids: this.collectSortIds()
        }).start()
      }
    }
  }
</script>

<template>
  <div>
    <shop-quick-nav active="attributes"></shop-quick-nav>

    <div class="block full">
      <div class="block-title clearfix">
        <h1><strong>Аттрибуты</strong></h1>

        <div class="block-title-control">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode"></language-picker>

          <span v-if="languages.length > 1" class="btn-separator-xs"></span>

          <router-link v-if="userCan('attribute.create')" to="/shop/attributes/create" class="btn btn-sm btn-success active"><i class="fa fa-plus-circle"></i> Создать</router-link>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-middle table-center table-condensed table-bordered table-hover dataTable table-sortable">
          <thead>
            <tr>
              <th v-if="userCan('attribute.edit')"></th>
              <th class="text-center">ID</th>
              <th>Название</th>
              <th class="text-center" v-if="userCan('attribute.edit')">Статус</th>
              <th v-if="userCan('attribute.delete')"></th>
            </tr>
          </thead>
          <tbody class="ui-sortable">
            <tr v-for="attribute in items" :key="attribute.id" class="js-sort-item">
              <td class="table-sort-handler js-sort-handler" v-if="userCan('attribute.edit')">
                <span>
                  <input type="hidden" name="ids" :value="attribute.id">
                </span>
              </td>

              <td class="text-center">
                <router-link v-bind:to="attribute.url"><strong>{{ attribute.id }}</strong></router-link>
              </td>

              <td style="width: 100%">
                <router-link v-bind:to="attribute.url">
                  <strong>{{ attribute.i18[activeLanguageCode].title }}</strong>
                </router-link>
              </td>

              <td v-if="userCan('attribute.edit')">
                <div class="table-control table-remove-restore__restore">
                  <toggle @change="statusChange(attribute.id)" :checked="attribute.enabled"></toggle>
                </div>
              </td>

              <td v-if="userCan('attribute.delete')">
                <div class="table-control">
                  <a href="javascript:void(0)" class="btn btn-danger" @click="remove(attribute.id)"><i class="fa fa-times"></i></a>
                </div>
              </td>
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


