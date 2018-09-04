<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import Core from '../../../core'
  import TreeSelectTranslatable from '../../TreeSelectTranslatable'
  import CKEditor from '../../CKEditor'
  import LanguagePicker from '../../LanguagePicker'

  import EntityPage from '../../../mixins/EntityPage'
  import Translatable from '../../../mixins/Translatable'
  import ImageUpload from '../../../mixins/ImageUpload'

  import CategoryModel from '../../../resources/shop/CategoryModel'


  export default {
    name: 'category-edit',

    mixins: [
      EntityPage,
      Translatable,
      ImageUpload
    ],

    components: {
      TreeSelectTranslatable,
      'ckeditor': CKEditor,
      LanguagePicker,
      bModal
    },

    props: [
      'id',
    ],

    data() {
      return {
        entityName: 'category',
        category: null,
        categoriesTree: [],

        usedMainData: [
          'languages',
          'categories-tree',
        ],

        reloadDataOnSave: true
      }
    },

    methods: {
      /**
       * Инициализация модели данных.
       */
      initEntity(data) {
        this.setEntityData(new CategoryModel(data, this.languages))
      },

      /**
       * Автозаполнение slug из заголовка.
       */
      slugAutocomplete() {
        let model = this.getEntityModel()
        model.slug = Core.makeUrl(model.i18n[this.activeLanguageCode].title)
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
            Создание категории
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

          <a v-if="userCan('categories.create')" class="btn btn-sm btn-success active" @click="save">
            <i class="fa fa-plus-circle"></i> Создать
          </a>
        </div>
      </div>

      <div class="block-title" v-if="type === 'edit'">
        <h1>
          <strong>
            Редактирование категории #{{ this.id }}
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

          <a v-if="userCan('categories.edit')" class="btn btn-sm btn-primary active" @click="save">
            <i class="fa fa-floppy-o"></i> Сохранить
          </a>

          <a v-if="userCan('categories.delete')" class="btn btn-sm btn-danger active" @click="remove">
            Удалить
          </a>
        </div>
      </div>

      <div class="row" v-if="category">

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
                    Название <span class="text-danger">*</span>
                  </label>

                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control"
                      :id="`title-${language.code}`"
                      v-model="category.i18n[language.code].title"
                      :name="`i18n.${language.code}.title`"
                      v-validate="'required|max:255'">

                    <span v-show="formErrors.has(`i18n.${language.code}.title`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.title`) }}
                    </span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`description-${language.code}`">
                    Описание
                  </label>

                  <div class="col-md-9">
                    <ckeditor
                      :id="`description-${language.code}`"
                      :content.sync="category.i18n[language.code].description"
                      :name="`i18n.${language.code}.description`" />

                    <span v-show="formErrors.has(`i18n.${language.code}.description`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.description`) }}
                    </span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.meta_title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">
                    Мета-заголовок
                  </label>

                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control"
                      :id="`title-${language.code}`"
                      v-model="category.i18n[language.code].meta_title"
                      :name="`i18n.${language.code}.meta_title`"
                      v-validate="'max:255'">

                    <span v-show="formErrors.has(`i18n.${language.code}.meta_title`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.meta_title`) }}
                    </span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.meta_description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">
                    Мета-описание
                  </label>

                  <div class="col-md-9">
                    <textarea
                      class="form-control"
                      :id="`meta-description-${language.code}`"
                      v-model="category.i18n[language.code].meta_description"
                      :name="`i18n.${language.code}.meta_description`"
                      v-validate="'max:65000'"></textarea>

                    <span v-show="formErrors.has(`i18n.${language.code}.meta_description`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.meta_description`) }}
                    </span>
                  </div>
                </div>
              </div>
            </template>

          </div>
        </div>

        <div class="col-lg-6">
          <div class="block">
            <div class="block-title">
              <h2>
                <i class="fa fa-pencil"></i> <strong>Основная</strong> информация
              </h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div :class="`form-group${formErrors.has('slug') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="slug">
                  Slug <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                  <div class="input-group">
                    <input
                      type="text"
                      id="slug"
                      class="form-control"
                      v-model="category.slug"
                      name="slug"
                      v-validate="'required|min:3|max:255|slug_exist'"
                      required>

                    <a class="btn input-group-addon" @click="slugAutocomplete">
                      <i class="fa fa-refresh"></i> Автозаполнение
                    </a>
                  </div>

                  <span v-show="formErrors.has('slug')" class="help-block">
                    {{ formErrors.first('slug') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('parent_id') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Родительская категория
                </label>

                <div class="col-md-8">
                  <tree-select-translatable
                    :options="categoriesTree"
                    :selected.sync="category.parent_id"
                    :disabled="id"
                    placeholder="Выберите категорию"
                    :activeLanguageCode="activeLanguageCode"
                    :defaultLanguageCode="defaultLanguageCode" />

                  <span v-show="formErrors.has('parent_id')" class="help-block">
                    {{ formErrors.first('parent_id') }}
                  </span>
                </div>
              </div>

              <div v-if="type === 'edit'" class="form-group">
                <label class="col-md-3 control-label">
                  Изображение
                </label>

                <div class="col-md-9">
                  <dropzone-gallery
                    ref="gallery"
                    v-if="type === 'edit'"
                    :params="{maxFiles: 1}"
                    :url="makePageApiUrl('image')"
                    :images="dropzoneImage"
                    @update:images="updateImage"
                    :safeDelete="false"
                    :errors="formErrors"
                  ></dropzone-gallery>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('enabled') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Опубликовано
                </label>

                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" v-model="category.enabled">
                    <span></span>
                  </label>

                  <span v-show="formErrors.has('enabled')" class="help-block">
                    {{ formErrors.first('enabled') }}
                  </span>
                </div>
              </div>

              <div class="form-group" v-if="category.created_at">
                <label class="col-md-3 control-label">
                  Дата создания
                </label>

                <div class="col-md-9">
                  <p class="form-control-static">
                    {{ category.created_at }}
                  </p>
                </div>
              </div>

              <div class="form-group" v-if="category.updated_at">
                <label class="col-md-3 control-label">
                  Последнее изменение
                </label>

                <div class="col-md-9">
                  <p class="form-control-static">
                    {{ category.updated_at }}
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <b-modal id="validationModal"
      ref="validationModal"
      title="Ошибка валидации"
      title-tag="h3"
      centered
      ok-title="Ок"
      ok-only
      hide-header-close>

      Проверьте правильность заполнения формы!
    </b-modal>

    <b-modal id="removeModal"
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


