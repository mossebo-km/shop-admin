<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import FileManager from '../../FileManager'
  import LanguagePicker from '../../LanguagePicker'
  import AjaxMultiselect from '../../AjaxMultiselect'

  import TreeSelect from '../../TreeSelect'
  import EntityPage from '../../../mixins/EntityPage'
  import Translatable from '../../../mixins/Translatable'

  import InteriorEditModel from '../../../resources/shop/interior/InteriorEditModel'
  import InteriorPointModel from '../../../resources/shop/interior/InteriorPointModel'

  import InteriorPreview from './preview/InteriorPreview'

  export default {
    name: 'interior-edit',

    mixins: [
      EntityPage,
      Translatable,
    ],

    components: {
      InteriorPreview,
      AjaxMultiselect,
      FileManager,
      LanguagePicker,
      bModal,
      TreeSelect
    },

    props: [
      'id',
    ],

    data() {
      return {
        entityName: 'interior',
        interior: null,

        rooms: [],
        styles: [],

        usedMainData: [
          'languages',
          'rooms',
          'styles',
        ],

        reloadDataOnSave: true
      }
    },

    methods: {
      productSearchUrl() {
        return '/api' + this.getPathToTable() + '/search'
      },

      productLinkMaker(option) {
        let linkEl = document.createElement('a')

        linkEl.setAttribute('href', '/shop/products/' + option.id)
        linkEl.setAttribute('target', '_blank')

        linkEl.innerHTML = option.text

        return linkEl
      },

      initEntity(data) {
        this.setEntityData(new InteriorEditModel(data, this.languages))
      },

      addPoint() {
        this.interior.points.push(new InteriorPointModel())
      },

      removePoint(point) {
        this.interior.points = this.interior.points.filter(item => item.id !== point.id)
      }
    },

    computed: {
      roomsToSelect() {
        return this.rooms.map(room => {
          return {
            id: room.id,
            title: room.i18n[this.activeLanguageCode].title
          }
        })
      },

      stylesToSelect() {
        return this.styles.map(style => ({
          id: style.id,
          title: style.i18n[this.activeLanguageCode].title
        }))
      }
    }
  }
</script>

<template>
  <div>
    <div class="block full">
      <div class="block-title clearfix" v-if="type === 'create'">
        <h1>
          <strong>
            Создание интерьера
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
            :class="{'has-error': formTranslatesHasError()}"
          ></language-picker>

          <span class="btn-separator-xs"></span>

          <a v-if="userCan('interiors.create')" class="btn btn-sm btn-success active" @click="save">
            <i class="fa fa-plus-circle"></i> Создать
          </a>
        </div>
      </div>

      <div class="block-title clearfix" v-if="type === 'edit'">
        <h1>
          <strong>
            Редактирование интерьера #{{ this.id }}
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

          <a v-if="userCan('interiors.edit')" class="btn btn-sm btn-primary active" @click="save">
            <i class="fa fa-floppy-o"></i> Сохранить
          </a>

          <a v-if="userCan('interiors.delete')" class="btn btn-sm btn-danger active" @click="remove">
            Удалить
          </a>
        </div>
      </div>

      <div class="row" v-if="interior">
        <div class="col-lg-6">
          <div :class="`block${langSwitchHovered ? ' block-illuminated' : ''}`">
            <div class="block-title">
              <h2>
                <i class="fa fa-globe"></i> <strong>Языковая</strong> информация
              </h2>
            </div>

            <template v-for="language in languages">
              <div :class="`form-horizontal form-bordered${activeLanguageCode === language.code ? '' : ' in-space'}`" :key="language.code">

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">
                    Заголовок
                  </label>

                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control"
                      :id="`title-${language.code}`"
                      v-model="interior.i18n[language.code].title"
                      :name="`i18n.${language.code}.title`"
                      v-validate="'required|max:255'">

                    <span v-show="formErrors.has(`i18n.${language.code}.title`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.title`) }}
                    </span>
                  </div>
                </div>
              </div>
            </template>
          </div>

          <div class="block">
            <div class="block-title">
              <h2>
                <i class="fa fa-image"></i> <strong>Интерьер</strong>
              </h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div class="form-group">
                <label class="col-md-3 control-label">
                  Изображение
                </label>

                <div class="col-md-9">
                  <file-manager
                    id="image"
                    :file.sync="interior.image"
                  ></file-manager>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('rooms') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Комнаты
                </label>

                <div class="col-md-8">
                  <tree-select
                    :options="roomsToSelect"
                    :selected.sync="interior.rooms"
                    :multiple="true"
                    placeholder="Выберите комнату" />

                  <span v-show="formErrors.has('rooms')" class="help-block">
                    {{ formErrors.first('rooms') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('styles') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Стили
                </label>

                <div class="col-md-8">
                  <tree-select
                    :options="stylesToSelect"
                    :selected.sync="interior.styles"
                    :multiple="true"
                    placeholder="Выберите стиль" />

                  <span v-show="formErrors.has('styles')" class="help-block">
                    {{ formErrors.first('styles') }}
                  </span>
                </div>
              </div>

            </div>
          </div>

          <div class="block">
            <div class="block-title clearfix">
              <h2>
                <i class="fa fa-dot-circle-o"></i> <strong>Точки</strong>
              </h2>

              <div class="block-title-control">
                <button
                  class="btn btn-sm btn-primary active"
                  @click="addPoint"
                >
                  <i class="fa fa-plus-circle"></i>
                  Добавить
                </button>
              </div>
            </div>

            <div v-if="interior.points.length" class="form-horizontal form-bordered">
              <div style="margin: 0 -1px -8px -1px;position: relative;top: -6px;">
                <table class="table table-middle table-center table-condensed table-bordered table-hover" style="margin-bottom: 0;">
                  <thead>
                    <tr>
                      <th>
                        Товар
                      </th>

                      <th style="text-align: center;">
                        <span class="table-column-enabled">
                          Похожий
                        </span>
                      </th>

                      <th style="text-align: center;">
                        <span class="table-column-delete">
                          Удалить
                        </span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="point in interior.points">
                      <td style="width: 100%">
                        <ajax-multiselect
                          :url="productSearchUrl()"
                          :languages="languages"
                          :activeLanguageCode="activeLanguageCode"
                          :selected.sync="point.product_id"
                          :options="point.product"
                          :link-url-maker="productLinkMaker"
                        ></ajax-multiselect>
                      </td>

                      <td style="text-align: center;">
                        <span class="table-column-enabled">
                          <label class="switch switch-primary">
                            <input type="checkbox" id="is-payable" name="is_payable" v-model="point.is_similar">
                            <span></span>
                          </label>
                        </span>
                      </td>

                      <td style="text-align: center;">
                        <span class="table-column-delete">
                          <a class="btn btn-danger" @click="removePoint(point)" style="margin:0;"><i class="fa fa-times"></i></a>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="block">
            <div class="clearfix" style="margin-bottom: 20px;">
              <interior-preview
                :points="interior.points"
                :image="interior.image ? interior.image : undefined"
                :active-language-code="activeLanguageCode"
              ></interior-preview>
            </div>
          </div>
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
      title="Удаление интерьера"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить этот интерьер?
    </b-modal>
  </div>
</template>