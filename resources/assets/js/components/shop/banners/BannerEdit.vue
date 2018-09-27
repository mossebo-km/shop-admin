<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import Core from '../../../core'
  import FileManager from '../../FileManager'
  import TreeSelect from '../../TreeSelect'
  import CKEditor from '../../CKEditor'
  import LanguagePicker from '../../LanguagePicker'

  import EntityPage from '../../../mixins/EntityPage'
  import Translatable from '../../../mixins/Translatable'
  import ColorSelect from '../../ColorSelect'
  import StandartBanner from './preview/StandartBanner'
  import HeaderBanner from './preview/HeaderBanner'

  import Number from '../../../directives/number'

  import BannerModel from '../../../resources/shop/banner/BannerModel'


  export default {
    name: 'banner-edit',

    mixins: [
      EntityPage,
      Translatable,
    ],

    directives: {
      Number
    },

    components: {
      TreeSelect,
      'ckeditor': CKEditor,
      FileManager,
      LanguagePicker,
      bModal,
      ColorSelect,
      StandartBanner,
      HeaderBanner
    },

    props: [
      'id',
    ],

    data() {
      return {
        entityName: 'banner',
        banner: null,

        backgroundType: 'gradient',

        usedMainData: [
          'languages',
          'banner-places'
        ],

        bannerPlaces: [],

        reloadDataOnSave: true
      }
    },

    methods: {
      getToSaveData() {
        let data = {
          ... this.getEntityModel(),
        }

        if (this.backgroundType === 'gradient') {
          data.background_image = ''
          data.mobile_image = ''
          data.desktop_image = ''
        }

        return data
      },

      updateImage(label, images = []) {
        this.banner[label] = images.length ? images[0] : false
      },

      setColor(label, color) {
        _.set(this.banner, label, color)
      },

      prepareUrl(url) {
        return Core.marketUrl(url)
      },

      gradientTypes() {
        return [
          {
            id: 'linear',
            title: 'Линейный'
          },

          {
            id: 'radial',
            title: 'Радиальный'
          }
        ]
      },

      backgroundTypes() {
        return [
          {
            id: 'image',
            title: 'Изображение'
          },

          {
            id: 'gradient',
            title: 'Градиент'
          }
        ]
      },

      comparedTitle(activeLanguageCode) {
        return ['title', 'caption'].reduce((acc, item) => {
          if (this.banner.i18n[activeLanguageCode][item]) {
            acc.push(this.banner.i18n[activeLanguageCode][item])
          }

          return acc
        }, []).join(' ')
      },

      /**
       * Инициализация модели данных.
       */
      initEntity(data) {
        this.setEntityData(new BannerModel(data, this.languages))

        if (this.banner.background_image) {
          this.backgroundType = 'image'
        }
      },
    },

    computed: {
      bannerPlacesSelectOptions() {
        return this.bannerPlaces.map(item => ({
          id: item.id,
          title: item.name
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
            Создание баннера
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

          <a v-if="userCan('banners.create')" class="btn btn-sm btn-success active" @click="save">
            <i class="fa fa-plus-circle"></i> Создать
          </a>
        </div>
      </div>

      <div class="block-title" v-if="type === 'edit'">
        <h1>
          <strong>
            Редактирование баннера #{{ this.id }}
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

          <a v-if="userCan('banners.edit')" class="btn btn-sm btn-primary active" @click="save">
            <i class="fa fa-floppy-o"></i> Сохранить
          </a>

          <a v-if="userCan('banners.delete')" class="btn btn-sm btn-danger active" @click="remove">
            Удалить
          </a>
        </div>
      </div>

      <div class="row" v-if="banner">

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
                      v-model="banner.i18n[language.code].title"
                      :name="`i18n.${language.code}.title`"
                      v-validate="'max:8'">

                    <span v-show="formErrors.has(`i18n.${language.code}.title`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.title`) }}
                    </span>

                    <span class="help-block">
                      До 8 символов
                    </span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.caption`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`caption-${language.code}`">
                    Описание <span class="text-danger">*</span>
                  </label>

                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control"
                      :id="`caption-${language.code}`"
                      v-model="banner.i18n[language.code].caption"
                      :name="`i18n.${language.code}.caption`"
                      v-validate="'max:36'">

                    <span v-show="formErrors.has(`i18n.${language.code}.caption`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.caption`) }}
                    </span>

                    <span class="help-block">
                      До 36 символов
                    </span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.button`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`button-${language.code}`">
                    Надпись на кнопке
                  </label>

                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control"
                      :id="`button-${language.code}`"
                      v-model="banner.i18n[language.code].button"
                      :name="`i18n.${language.code}.button`"
                      v-validate="'max:255'">

                    <span v-show="formErrors.has(`i18n.${language.code}.button`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.button`) }}
                    </span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.link`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`link-${language.code}`">
                    Ссылка
                  </label>

                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control"
                      :id="`link-${language.code}`"
                      v-model="banner.i18n[language.code].link"
                      :name="`i18n.${language.code}.link`"
                      v-validate="'max:255'">

                    <span v-show="formErrors.has(`i18n.${language.code}.link`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.link`) }}
                    </span>
                  </div>
                </div>
              </div>
            </template>

          </div>

          <div class="block">
            <div class="block-title">
              <h2>
                <i class="fa fa-pencil"></i> <strong>Основная</strong> информация
              </h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div :class="`form-group${formErrors.has('places') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Места размещения
                </label>

                <div class="col-md-9">
                  <tree-select
                    :options="bannerPlacesSelectOptions"
                    :selected.sync="banner.places"
                    :multiple="true"
                    :params="{minimumResultsForSearch: -1, allowClear: false, closeOnSelect: false}"
                  ></tree-select>

                  <span v-show="formErrors.has('places')" class="help-block">
                    {{ formErrors.first('places') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('enabled') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Опубликовано
                </label>

                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" v-model="banner.enabled">
                    <span></span>
                  </label>

                  <span v-show="formErrors.has('enabled')" class="help-block">
                    {{ formErrors.first('enabled') }}
                  </span>
                </div>
              </div>

              <div class="form-group" v-if="banner.created_at">
                <label class="col-md-3 control-label">
                  Дата создания
                </label>

                <div class="col-md-9">
                  <p class="form-control-static">
                    {{ banner.created_at }}
                  </p>
                </div>
              </div>

              <div class="form-group" v-if="banner.updated_at">
                <label class="col-md-3 control-label">
                  Последнее изменение
                </label>

                <div class="col-md-9">
                  <p class="form-control-static">
                    {{ banner.updated_at }}
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="block">
            <div class="block-title">
              <h2>
                <i class="fa fa-font"></i> <strong>Цвет</strong> текста
              </h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div :class="`form-group${formErrors.has('title_color') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Цвет заголовка <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                  <color-select
                    :color="banner.title_color || undefined"
                    @update:color="setColor('title_color', $event)"
                  ></color-select>

                  <span v-show="formErrors.has('title_color')" class="help-block">
                    {{ formErrors.first('title_color') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('caption_color') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Цвет описания <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                  <color-select
                    :color="banner.caption_color || undefined"
                    @update:color="setColor('caption_color', $event)"
                  ></color-select>

                  <span v-show="formErrors.has('caption_color')" class="help-block">
                    {{ formErrors.first('caption_color') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('button_color') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Цвет надписи на кнопке <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                  <color-select
                    :color="banner.button_color || undefined"
                    @update:color="setColor('button_color', $event)"
                  ></color-select>

                  <span v-show="formErrors.has('button_color')" class="help-block">
                    {{ formErrors.first('button_color') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('button_background_color') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Цвет кнопки <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                  <color-select
                    :color="banner.button_background_color || undefined"
                    @update:color="setColor('button_background_color', $event)"
                  ></color-select>

                  <span v-show="formErrors.has('button_background_color')" class="help-block">
                    {{ formErrors.first('button_background_color') }}
                  </span>
                </div>
              </div>

            </div>
          </div>

          <div class="block">
            <div class="block-title">
              <h2>
                <i class="fa fa-image"></i> <strong>Стандартный баннер</strong>
              </h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div class="form-group">
                <label class="col-md-3 control-label">
                  Изображение
                </label>

                <div class="col-md-9">
                  <file-manager
                    id="small_image"
                    :file.sync="banner.small_image"
                  ></file-manager>
                </div>
              </div>

            </div>
          </div>

          <div class="block">
            <div class="block-title">
              <h2>
                <i class="fa fa-image"></i> <strong>Фон</strong>
              </h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div class="form-group">
                <label class="col-md-3 control-label">
                  Тип фона
                </label>

                <div class="col-md-9">
                  <tree-select
                    :options="backgroundTypes()"
                    :selected.sync="backgroundType"
                    :params="{minimumResultsForSearch: -1, allowClear: false}"
                  ></tree-select>
                </div>
              </div>

              <template v-if="backgroundType === 'gradient'">
                <div :class="`form-group${formErrors.has('gradient.color_from') ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label">
                    Первый цвет <span class="text-danger">*</span>
                  </label>

                  <div class="col-md-9">
                    <color-select
                      :color="banner.gradient.color_from || undefined"
                      @update:color="setColor('gradient.color_from', $event)"
                    ></color-select>

                    <span v-show="formErrors.has('gradient.color_from')" class="help-block">
                    {{ formErrors.first('gradient.color_from') }}
                  </span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has('gradient.color_to') ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label">
                    Второй цвет <span class="text-danger">*</span>
                  </label>

                  <div class="col-md-9">
                    <color-select
                      :color="banner.gradient.color_to || undefined"
                      @update:color="setColor('gradient.color_to', $event)"
                    ></color-select>

                    <span v-show="formErrors.has('gradient.color_to')" class="help-block">
                    {{ formErrors.first('gradient.color_to') }}
                  </span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has('gradient.type') ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label">
                    Тип градиента <span class="text-danger">*</span>
                  </label>

                  <div class="col-md-9">
                    <tree-select
                      :options="gradientTypes()"
                      :selected.sync="banner.gradient.type"
                      :params="{minimumResultsForSearch: -1, allowClear: false}"
                    ></tree-select>

                    <span v-show="formErrors.has('gradient.type')" class="help-block">
                    {{ formErrors.first('gradient.type') }}
                  </span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has('gradient.angle') ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label">
                    Угол градиента <span class="text-danger">*</span>
                  </label>

                  <div class="col-md-9">
                    <input
                      type="number"
                      class="form-control"
                      v-model="banner.gradient.angle"
                      :name="banner.gradient.angle"
                      v-number
                      v-validate="'min_value:0|max_value:360'">

                    <span v-show="formErrors.has('gradient.angle')" class="help-block">
                    {{ formErrors.first('gradient.angle') }}
                  </span>
                  </div>
                </div>
              </template>

              <template v-if="backgroundType === 'image'">

                <div class="form-group">
                  <label class="col-md-3 control-label">
                    Стандартное фоновое изображение
                  </label>

                  <div class="col-md-9">
                    <file-manager
                      id="background_image"
                      :file.sync="banner.background_image"
                    ></file-manager>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">
                    Мобильное изображение в шапке
                  </label>

                  <div class="col-md-9">
                    <file-manager
                      id="mobile_image"
                      :file.sync="banner.mobile_image"
                    ></file-manager>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">
                    Десктопное изображение в шапке
                  </label>

                  <div class="col-md-9">
                    <file-manager
                      id="desktop_image"
                      :file.sync="banner.desktop_image"
                    ></file-manager>
                  </div>
                </div>

              </template>

            </div>
          </div>

        </div>

        <div class="col-lg-12">
          <div class="block">
            <div class="block-title">
              <h2>
                <i class="fa fa-pencil"></i> <strong>Баннер</strong>
              </h2>
            </div>

            <div class="banner-preview">
              <div class="banner-preview__row">
                <standart-banner
                  class="banner--long"
                  :link="prepareUrl(banner.i18n[activeLanguageCode].link)"

                  :title="banner.i18n[activeLanguageCode].title"
                  :caption="banner.i18n[activeLanguageCode].caption"
                  :button-text="banner.i18n[activeLanguageCode].button"

                  :title-color="banner.title_color"
                  :caption-color="banner.caption_color"
                  :button-color="banner.button_color"
                  :button-background="banner.button_background_color"

                  :image="banner.small_image"
                  :background-image="backgroundType === 'image' ? banner.background_image : undefined"

                  :gradient-from="banner.gradient.color_from"
                  :gradient-to="banner.gradient.color_to"
                  :greadient-type="banner.gradient.type"
                  :gradient-angle="banner.gradient.angle"
                ></standart-banner>
              </div>

              <div class="banner-preview__row">
                <div class="banner-preview__standart">
                  <standart-banner
                    class="banner--medium"
                    :link="prepareUrl(banner.i18n[activeLanguageCode].link)"

                    :title="banner.i18n[activeLanguageCode].title"
                    :caption="banner.i18n[activeLanguageCode].caption"
                    :button-text="banner.i18n[activeLanguageCode].button"

                    :title-color="banner.title_color"
                    :caption-color="banner.caption_color"
                    :button-color="banner.button_color"
                    :button-background="banner.button_background_color"

                    :image="banner.small_image"
                    :background-image="backgroundType === 'image' ? banner.background_image : undefined"

                    :gradient-from="banner.gradient.color_from"
                    :gradient-to="banner.gradient.color_to"
                    :greadient-type="banner.gradient.type"
                    :gradient-angle="banner.gradient.angle"
                  ></standart-banner>
                </div>

                <div class="banner-preview__big">
                  <standart-banner
                    class="banner--big"

                    :link="prepareUrl(banner.i18n[activeLanguageCode].link)"

                    :title="banner.i18n[activeLanguageCode].title"
                    :caption="banner.i18n[activeLanguageCode].caption"
                    :button-text="banner.i18n[activeLanguageCode].button"

                    :title-color="banner.title_color"
                    :caption-color="banner.caption_color"
                    :button-color="banner.button_color"
                    :button-background="banner.button_background_color"

                    :image="banner.small_image"
                    :background-image="backgroundType === 'image' ? banner.background_image : undefined"

                    :gradient-from="banner.gradient.color_from"
                    :gradient-to="banner.gradient.color_to"
                    :greadient-type="banner.gradient.type"
                    :gradient-angle="banner.gradient.angle"
                  ></standart-banner>
                </div>
              </div>

              <div class="banner-preview__row">
                <div class="header-banner-wrap">
                  <header-banner
                    :image="backgroundType === 'image' ? banner.desktop_image : undefined"

                    :link="prepareUrl(banner.i18n[activeLanguageCode].link)"

                    :title="comparedTitle(activeLanguageCode)"
                    :button-text="banner.i18n[activeLanguageCode].button"

                    :title-color="banner.caption_color"
                    :button-color="banner.button_color"
                    :button-background="banner.button_background_color"

                    :gradient-from="banner.gradient.color_from"
                    :gradient-to="banner.gradient.color_to"
                    :greadient-type="banner.gradient.type"
                    :gradient-angle="banner.gradient.angle"
                  ></header-banner>
                </div>
              </div>

              <div class="banner-preview__row">
                <div class="header-banner-wrap header-banner-wrap--mobile">
                  <header-banner
                    class="header-banner--mobile"
                    :image="backgroundType === 'image' ? banner.mobile_image : undefined"

                    :link="prepareUrl(banner.i18n[activeLanguageCode].link)"

                    :title="comparedTitle(activeLanguageCode)"
                    :button-text="banner.i18n[activeLanguageCode].button"

                    :title-color="banner.caption_color"
                    :button-color="banner.button_color"
                    :button-background="banner.button_background_color"

                    :gradient-from="banner.gradient.color_from"
                    :gradient-to="banner.gradient.color_to"
                    :greadient-type="banner.gradient.type"
                    :gradient-angle="banner.gradient.angle"
                  ></header-banner>
                </div>
              </div>
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
      title="Удаление категории"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить эту категорию?
    </b-modal>
  </div>
</template>
