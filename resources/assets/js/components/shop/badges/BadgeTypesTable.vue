<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import LanguagePicker from '../../LanguagePicker'

  import TablePage from '../../../mixins/TablePage'
  import Translatable from '../../../mixins/Translatable'
  import Sortable from '../../../mixins/Sortable'
  import StatusChangeable from '../../../mixins/StatusChangeable'
  import Toggle from '../../Toggle'
  import BadgePreview from './BadgePreview'

  import BadgeTypesTableModel from '../../../resources/shop/badge/BadgeTypesTableModel'

  export default {
    name: 'badge-types-table',

    mixins: [
      Sortable,
      StatusChangeable,
      TablePage,
      Translatable
    ],

    components : {
      bModal,
      Toggle,
      LanguagePicker,
      BadgePreview
    },

    data() {
      return {
        tableItemsDataName: 'badge-types',

        usedMainData: [
          'languages'
        ],
      }
    },

    methods: {
      initItems (items = []) {
        this.items = this.getSortedData(items.map(item => new BadgeTypesTableModel(item, this.languages)))
      },
    },
  }
</script>

<template>
  <div>
    <div class="block full">
      <div class="block-title clearfix">
        <h1>
          <strong>
            Бейджи
          </strong>
        </h1>

        <div class="block-title-control" v-if="userCan('badge-types.create')">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" />

          <span class="btn-separator-xs"></span>

          <router-link to="/shop/badge-types/create" class="btn btn-sm btn-success active">
            <i class="fa fa-plus-circle"></i> Создать
          </router-link>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-middle table-center table-condensed table-bordered table-hover table-sortable">
          <thead>
            <tr>
              <th v-if="userCan('badge-types.edit')">
                <span class="table-column-sort"></span>
              </th>

              <th>
                <span class="table-column-id">
                  Превью
                </span>
              </th>

              <th style="width: 100%">
                Название
              </th>

              <th v-if="userCan('badge-types.delete')">
                <span class="table-column-delete"></span>
              </th>
            </tr>
          </thead>

          <tbody class="ui-sortable">
            <template v-if="items && items.length">
              <tr :key="badgeType.id" v-for="badgeType in items" class="js-sort-item">
                <td v-if="userCan('badge-types.edit')" class="table-sort-handler js-sort-handler">
                  <span>
                    <input type="hidden" name="ids" :value="badgeType.id">
                  </span>
                </td>

                <td class="text-center">
                  <span class="table-column-id">
                    <badge-preview
                      :color="badgeType.color"
                      :icon="badgeType.icon"
                      :title="badgeType.i18n[activeLanguageCode].title"
                      :text="badgeType.has_value ? '-20%' : undefined"
                    ></badge-preview>
                  </span>
                </td>

                <td style="width: 100%">
                  <router-link :to="badgeType.url">{{ badgeType.i18n[activeLanguageCode].title }}</router-link>
                </td>

                <td v-if="userCan('badges.delete')">
                  <span class="table-column-delete">
                    <a class="btn btn-danger" @click="remove(badgeType.id)">
                      <i class="fa fa-times"></i>
                    </a>
                  </span>
                </td>
              </tr>
            </template>

            <tr v-if="! (items && items.length)">
              <td class="text-center" colspan="4">
                Список бейджев пуст.
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

    <b-modal
      id="removeModal"
      ref="removeModal"
      title="Удаление бейджа"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить бейдж?
    </b-modal>
  </div>
</template>