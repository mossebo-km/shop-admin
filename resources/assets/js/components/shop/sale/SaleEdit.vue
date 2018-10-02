<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'
  import EntityPage from '../../../mixins/EntityPage'
  import Translatable from '../../../mixins/Translatable'
  import DatePickerRangeMixin from '../../../mixins/DatePicker/DatePickerRange'
  import LanguagePicker from '../../LanguagePicker'
  import TreeSelectTranslatable from '../../TreeSelectTranslatable'
  import AjaxMultiselect from '../../AjaxMultiselect'
  import PricesTable from '../PricesTable'
  import Loading from '../../Loading'
  import Core from '../../../core'
  import PricesTableModel from '../../../resources/shop/PricesTableModel'
  import SaleEditModel from '../../../resources/shop/Sale/SaleEditModel'

  export default {
    name: 'sale-edit',

    mixins: [
      EntityPage,
      Translatable,
      DatePickerRangeMixin
    ],

    components: {
      bModal,
      LanguagePicker,
      TreeSelectTranslatable,
      AjaxMultiselect,
      PricesTable,
      Loading
    },

    props: [
      'id',
    ],

    data() {
      return {
        loading: false,
        entityName: 'sale',
        sale: null,

        usedMainData: [
          'languages',
        ],

        reloadDataOnSave: true,

        dateStartConfig: {
          ... this.getBaseDatePickerConfig()
        },

        dateFinishConfig: {
          ... this.getBaseDatePickerConfig()
        },
      }
    },

    methods: {
      setSelected(selected) {
        if (selected) {
          this.updatePrice()
        }
      },
      /**
       * Инициализация модели данных.
       */
      initEntity(data) {
        this.setEntityData(new SaleEditModel(data, this.languages))
        this.dateFinishConfig = this.getFinishDatePickerConfig()
      },

      productSearchUrl() {
        return '/api' + this.getPathToTable() + '/search'
      },

      relatedLinkMaker(option) {
        let linkEl = document.createElement('a')

        linkEl.setAttribute('href', '/shop/products/' + option.id)
        linkEl.setAttribute('target', '_blank')

        linkEl.innerHTML = option.text

        return linkEl
      },

      updatePrice() {
        this.loading = true

        return new Core.requestHandler('get', '/api' + this.getPathToTable() + '/price/' + this.sale.product_id)
          .success(response => {
            this.sale.prices = new PricesTableModel(response.data.prices)

            this.loading = false
          })
          .start()
      },


    },
  }
</script>

<template>
  <div>
    <div class="block full">
      <div class="block-title clearfix" v-if="type === 'create'">
        <h1>
          <strong>
            Создание акционного товара
          </strong>
        </h1>

        <div class="block-title-control">
          <a class="btn btn-sm btn-default btn-alt" @click="redirectToTable">
            <i class="fa fa-arrow-left"></i>
          </a>

          <span class="btn-separator-xs"></span>

          <language-picker
            :languages="languages"
            :activeLanguageCode.sync="activeLanguageCode"
            :class="{'has-error': formTranslatesHasError()}" />

          <span class="btn-separator-xs"></span>

          <a v-if="userCan('sale.create')" class="btn btn-sm btn-success active" @click="save">
            <i class="fa fa-plus-circle"></i> Создать
          </a>
        </div>
      </div>

      <div class="block-title" v-if="type === 'edit'">
        <h1>
          <strong>
            Редактирование акционного товара #{{ this.id }}
          </strong>
        </h1>

        <div class="block-title-control">
          <a class="btn btn-sm btn-default btn-alt" @click="redirectToTable">
            <i class="fa fa-arrow-left"></i>
          </a>

          <span class="btn-separator-xs"></span>

          <language-picker
            :languages="languages"
            :activeLanguageCode.sync="activeLanguageCode"
            :class="{'has-error': formTranslatesHasError()}" />

          <span class="btn-separator-xs"></span>

          <a v-if="userCan('sale.edit')" class="btn btn-sm btn-primary active" @click="save">
            <i class="fa fa-floppy-o"></i> Сохранить
          </a>

          <a v-if="userCan('sale.delete')" class="btn btn-sm btn-danger active" @click="remove">
            Удалить
          </a>
        </div>
      </div>

      <div class="row" v-if="sale">

        <div class="col-lg-12">
          <div class="block">
            <div class="block-title">
              <h2>
                <i class="fa fa-pencil"></i> <strong>Основная</strong> информация
              </h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div :class="`form-group${formErrors.has('related') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="date_start">
                  Акционный товар
                </label>

                <div class="col-md-9">
                  <div class="input-group">
                    <ajax-multiselect
                      ref="productSearch"
                      :url="productSearchUrl()"
                      :languages="languages"
                      :activeLanguageCode="activeLanguageCode"
                      :selected.sync="sale.product_id"
                      @update:selected="setSelected"
                      :options="sale.product"
                      :link-url-maker="relatedLinkMaker"
                      :params="{minimumResultsForSearch: -1, allowClear: false, closeOnSelect: false}"
                    ></ajax-multiselect>
                  </div>

                  <span v-show="formErrors.has('related')" class="help-block">
                    {{ formErrors.first('related') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('date_start') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="date_start">
                  Дата начала
                </label>

                <div class="col-md-9">
                  <date-picker
                    id="date_start"
                    name="date_start"
                    ref="dateStart"
                    @dp-show="datePickerShow('date_start')"
                    @dp-change="dateChanged('date_start')"
                    v-model="sale.date_start"
                    :config="dateStartConfig"
                    class="date-picker"
                  ></date-picker>

                  <span v-show="formErrors.has('date_start')" class="help-block">
                    {{ formErrors.first('date_start') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('date_finish') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="date_finish">
                  Дата завершения
                </label>

                <div class="col-md-9">
                  <date-picker
                    id="date_finish"
                    name="date_finish"
                    ref="dateStart"
                    @dp-show="datePickerShow('date_finish')"
                    @dp-change="dateChanged('date_finish')"
                    v-model="sale.date_finish"
                    :config="dateFinishConfig"
                    class="date-picker"
                  ></date-picker>

                  <span v-show="formErrors.has('date_finish')" class="help-block">
                    {{ formErrors.first('date_finish') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('enabled') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Опубликовано
                </label>

                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" v-model="sale.enabled">
                    <span></span>
                  </label>

                  <span v-show="formErrors.has('enabled')" class="help-block">
                    {{ formErrors.first('enabled') }}
                  </span>
                </div>
              </div>

              <div class="form-group" v-if="sale.created_at">
                <label class="col-md-3 control-label">
                  Дата создания
                </label>

                <div class="col-md-9">
                  <p class="form-control-static">
                    {{ sale.created_at }}
                  </p>
                </div>
              </div>

              <div class="form-group" v-if="sale.updated_at">
                <label class="col-md-3 control-label">
                  Последнее изменение
                </label>

                <div class="col-md-9">
                  <p class="form-control-static">
                    {{ sale.updated_at }}
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <loading v-if="this.sale.product_id" :loading="loading">
            <prices-table
              v-if="sale.product_id"
              :prices.sync="sale.prices"
              :available-price-types="$root.config('shop.price_types.sale')"
              :activeLanguageCode="activeLanguageCode"
              :errors="formErrors"
            ></prices-table>
          </loading>
        </div>
      </div>
    </div>

    <b-modal
      id="validationModal"
      ref="validationModal"
      title="Ошибка валидации"
      title-tag="h3"
      centered
      ok-title="Ок"
      ok-only
      hide-header-close>

      Проверьте правильность заполнения формы!
    </b-modal>

    <b-modal
      id="removeModal"
      ref="removeModal"
      title="Удаление комнаты"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите акцию?
    </b-modal>
  </div>
</template>