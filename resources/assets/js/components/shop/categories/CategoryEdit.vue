<script>
  import 'select2'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import ShopQuickNav from '../ShopQuickNav'
  import Core from '../../../core'
  import TreeSelect from '../../TreeSelect'
  import CKEditor from '../../CKEditor'
  import LanguagePicker from '../../LanguagePicker'

  import EntityEdit from '../../../mixins/EntityEdit'
  import Translatable from '../../../mixins/Translatable'


  export default {
    name: 'category-edit',

    mixins: [
      EntityEdit,
      Translatable
    ],

    props: [
      'id',
    ],

    data() {
      return {
        entityName: 'category',
        category: null,
        categoriesTree: [],
        saveDisabled: false,

        defaultFieldsValues: {
          parent_id: 0,
          slug: '',
          enabled: true,

          created_at: null,
          updated_at: null,
        },

        defaultTranslatableFieldsValues: {
          title: '',
          description: '',
          meta_title: '',
          meta_description: ''
        },

        usedMainData: [
          'categories-tree',
          'languages',
        ],

        reloadDataOnSave: true
      }
    },

    components: {
      ShopQuickNav,
      TreeSelect,
      'ckeditor': CKEditor,
      LanguagePicker,
      bModal
    },

    methods: {
      /**
       * Инициализация модели данных.
       */
      initEntity(data = {}) {
        let entity = this.makeEntityBaseData(data)

        entity.i18 = this.initI18(data.i18)

        this.setEntityData(entity)
      },

      /**
       * Автозаполнение slug из заголовка категории.
       */
      slugAutocomplete() {
        let model = this.getEntityModel()
        model.slug = Core.makeUrl(model.i18[this.activeLanguageCode].title)
      },
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="categories"></shop-quick-nav>

    <div class="block full">
      <div class="block-title" v-if="type === 'create'">
        <h1><strong>Создание категории</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-success active" @click="save" :disabled="saveDisabled"><i class="fa fa-plus-circle"></i> Создать</a>
        </div>
      </div>

      <div class="block-title" v-if="type === 'edit'">
        <h1><strong>Редактирование категории #{{ this.id }}</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-primary active" @click="save" :disabled="saveDisabled"><i class="fa fa-floppy-o"></i> Сохранить</a>

          <a href="javascript:void(0);" class="btn btn-sm btn-danger active" @click="remove" :disabled="saveDisabled">Удалить</a>
        </div>
      </div>

      <div class="row" v-if="category">

        <div class="col-lg-6">
          <div class="block">
            <div class="block-title clearfix">
              <h2><i class="fa fa-globe"></i> <strong>Языковая</strong> информация</h2>

              <div class="block-options pull-right">
                <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" :class="{'has-error': translatesSwitcherHasError()}"></language-picker>
              </div>
            </div>

            <template v-for="language in languages">
              <div :class="`form-horizontal form-bordered${activeLanguageCode === language.code ? '' : ' in-space'}`" :key="language.code">

                <div :class="`form-group${formErrors.has(`i18.${language.code}.title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Название <span class="text-danger">*</span></label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" :id="`title-${language.code}`" v-model="category.i18[language.code].title" :name="`i18.${language.code}.title`" v-validate="'required|max:255'">
                    <span v-show="formErrors.has(`i18.${language.code}.title`)" class="help-block">{{ formErrors.first(`i18.${language.code}.title`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18.${language.code}.description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`description-${language.code}`">Описание</label>
                  <div class="col-md-9">
                    <ckeditor :id="`description-${language.code}`" :content.sync="category.i18[language.code].description" :name="`i18.${language.code}.description`" />
                    <span v-show="formErrors.has(`i18.${language.code}.description`)" class="help-block">{{ formErrors.first(`i18.${language.code}.description`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18.${language.code}.meta_title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-заголовок</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" :id="`title-${language.code}`" v-model="category.i18[language.code].meta_title" :name="`i18.${language.code}.meta_title`" v-validate="'max:255'">
                    <span v-show="formErrors.has(`i18.${language.code}.meta_title`)" class="help-block">{{ formErrors.first(`i18.${language.code}.meta_title`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18.${language.code}.meta_description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-описание</label>
                  <div class="col-md-9">
                    <textarea class="form-control" :id="`meta-description-${language.code}`" v-model="category.i18[language.code].meta_description" :name="`i18.${language.code}.meta_description`" v-validate="'max:65000'"></textarea>
                    <span v-show="formErrors.has(`i18.${language.code}.meta_description`)" class="help-block">{{ formErrors.first(`i18.${language.code}.meta_description`) }}</span>
                  </div>
                </div>
              </div>
            </template>

          </div>
        </div>

        <div class="col-lg-6">
          <div class="block">
            <div class="block-title">
              <h2><i class="fa fa-pencil"></i> <strong>Основная</strong> информация</h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div :class="`form-group${formErrors.has('slug') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="slug">Slug <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <div class="input-group">
                    <input type="text" id="slug" class="form-control" v-model="category.slug" name="slug" v-validate="'required|min:3|max:255|slug_exist'" required>
                    <a class="btn input-group-addon" @click="slugAutocomplete"><i class="fa fa-refresh"></i> Автозаполнение</a>
                  </div>

                  <span v-show="formErrors.has('slug')" class="help-block">{{ formErrors.first('slug') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('parent_id') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="parent_id">Родительская категория</label>
                <div class="col-md-8">
                  <tree-select :options="categoriesTree" :selected.sync="category.parent_id" :disabled="id" placeholder="Выберите категорию"></tree-select>

                  <span v-show="formErrors.has('parent_id')" class="help-block">{{ formErrors.first('parent_id') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('enabled') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Опубликовано</label>
                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" v-model="category.enabled"><span></span>
                  </label>

                  <span v-show="formErrors.has('enabled')" class="help-block">{{ formErrors.first('enabled') }}</span>
                </div>
              </div>

              <div class="form-group" v-if="category.created_at">
                <label class="col-md-3 control-label">Дата создания</label>
                <div class="col-md-9">
                  <p class="form-control-static">{{ category.created_at }}</p>
                </div>
              </div>

              <div class="form-group" v-if="category.updated_at">
                <label class="col-md-3 control-label">Последнее изменение</label>
                <div class="col-md-9">
                  <p class="form-control-static">{{ category.updated_at }}</p>
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
      Вы действительно хотите удалить категорию?
    </b-modal>
  </div>
</template>


