<script>
  import 'select2'
  import Vue from 'vue'
  import { Validator } from 'vee-validate'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import ShopQuickNav from '../../ShopQuickNav.vue'
  import Core from '../../../core'
  import TreeSelect from '../../TreeSelect.vue'
  import CKEditor from '../../CKEditor.vue'
  import LanguagePicker from '../../LanguagePicker.vue'

  import PricesTable from '../../PricesTable.vue'
  import DropzoneGallery from '../../DropzoneGallery.vue'
  import EntityEdit from '../../../mixins/EntityEdit'
  import Translatable from '../../../mixins/Translatable'


  export default {
    name: 'product-edit',

    mixins: [
      EntityEdit,
      Translatable
    ],

    props: [
      'id',
      'type'
    ],

    data() {
      return {
        languages: [],
        activeLanguageCode: null,
        categories: [],
        currencies: [],
        priceTypes: [],

        product: null,
        validationErrors: [],
        saveDisabled: false,
      }
    },

    components: {
      ShopQuickNav,
      TreeSelect,
      'ckeditor': CKEditor,
      LanguagePicker,
      bModal,
      DropzoneGallery,
      PricesTable
    },

    methods: {
      initData(data) {
        let languages = []

        data['languages'].forEach(language => {
          if (language.enabled) {
            languages.push(language)
          }

          if (language.default) {
            this.activeLanguageCode = language.code
          }
        })

        this.languages = languages
        this.categories = data['categories-tree']

        this.initEntity(data.product)
      },

      getToSaveData() {
        return {
          ... this.product,
          images: this.product.images.map(item => item.id),
        }
      },

      /*
        Основные данные товара.
      */

      initEntity(data = {}) {
        let entity = {}
        let defaultFieldsValues = {
          slug: '',
          sku: '',
          quantity: 1,
          is_new: false,
          is_popular: false,
          is_payable: true,
          enabled: true,
        }

        for (let fieldName in defaultFieldsValues) {
          if (fieldName in data) {
            entity[fieldName] = data[fieldName]
          }
          else {
            entity[fieldName] = defaultFieldsValues[fieldName]
          }
        }

        entity.categories = data.categories || []
        entity.images = this.initImages(data.images)
        entity.i18 = this.initI18(data.i18)
        entity.prices = this.initPrices(data.prices)

        this.product = entity
      },

        initImages(images = []) {
          return images.map(item => ({
            id: item.id,
            name: item.original,
            size: item.size,
            type: item.type,
            thumbnail: item.medium.src
          }))
        },

        initPrices(prices = []) {
          let sorted = {}

          prices.forEach(item => {
            if (! (item.price_type_id in sorted)) {
              sorted[item.price_type_id] = {}
            }

            sorted[item.price_type_id][item.currency_code] = item.value
          })

          return sorted
        },

        /*
          Переводы товара.
        */

        initI18(data = []) {
          let result = {}

          this.languages.forEach(language => {
            let existing = data.find(item => language.code === item.language_code) || {}

            let i18 = {
              title: existing.title || '',
              description: existing.description || '',
              meta_title: existing.meta_title || '',
              meta_description: existing.meta_description || ''
            }

            result[language.code] = i18
          })

          return result
        },

      getEntityModel() {
        return this.product
      },

      pullModelFromResponse(response) {
        this.initEntity(response.data.product)
      },

      /*
        Автозаполнение slug из заголовка категории.
      */

      onSlugAutocomplete() {
        this.product.slug = Core.makeUrl(this.product.i18[this.activeLanguageCode].title)
      },
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="products"></shop-quick-nav>

    <div class="block full">
      <div class="block-title" v-if="type === 'create'">
        <h1><strong>Создание товара</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-success active" @click="save" :disabled="saveDisabled"><i class="fa fa-plus-circle"></i> Создать</a>
        </div>
      </div>

      <div class="block-title" v-if="type === 'edit'">
        <h1><strong>Редактирование товара #{{ this.id }}</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-primary active" @click="save" :disabled="saveDisabled"><i class="fa fa-floppy-o"></i> Сохранить</a>

          <a href="javascript:void(0);" class="btn btn-sm btn-danger active" @click="remove" :disabled="saveDisabled">Удалить</a>
        </div>
      </div>

      <div class="row" v-if="product">

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

                <div :class="`form-group${errors.has(`i18.${language.code}.title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Название категории <span class="text-danger">*</span></label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" :id="`title-${language.code}`" v-model="product.i18[language.code].title" :name="`i18.${language.code}.title`" v-validate="'required|max:255'">
                    <span v-show="errors.has(`i18.${language.code}.title`)" class="help-block">{{ errors.first(`i18.${language.code}.title`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${errors.has(`i18.${language.code}.description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`description-${language.code}`">Описание</label>
                  <div class="col-md-9">
                    <ckeditor :id="`description-${language.code}`" :content.sync="product.i18[language.code].description" :name="`i18.${language.code}.description`" />
                    <span v-show="errors.has(`i18.${language.code}.description`)" class="help-block">{{ errors.first(`i18.${language.code}.description`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${errors.has(`i18.${language.code}.meta_title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-заголовок</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" :id="`title-${language.code}`" v-model="product.i18[language.code].meta_title" :name="`i18.${language.code}.meta_title`" v-validate="'max:255'">
                    <span v-show="errors.has(`i18.${language.code}.meta_title`)" class="help-block">{{ errors.first(`i18.${language.code}.meta_title`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${errors.has(`i18.${language.code}.meta_description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-описание</label>
                  <div class="col-md-9">
                    <textarea class="form-control" :id="`meta-description-${language.code}`" v-model="product.i18[language.code].meta_description" :name="`i18.${language.code}.meta_description`" v-validate="'max:65000'"></textarea>
                    <span v-show="errors.has(`i18.${language.code}.meta_description`)" class="help-block">{{ errors.first(`i18.${language.code}.meta_description`) }}</span>
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

              <div :class="`form-group${errors.has('slug') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="slug">Slug <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <div class="input-group">
                    <input type="text" id="slug" class="form-control" v-model="product.slug" name="slug" v-validate="'required|min:3|max:255|slug_exist'" required>
                    <a class="btn input-group-addon" @click="onSlugAutocomplete"><i class="fa fa-refresh"></i> Автозаполнение</a>
                  </div>

                  <span v-show="errors.has('slug')" class="help-block">{{ errors.first('slug') }}</span>
                </div>
              </div>

              <div :class="`form-group${errors.has('categories') ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" for="product-category">Категория</label>
                  <div class="col-md-8">
                    <tree-select :options="categories" :selected.sync="product.categories" :multiple="true" placeholder="Выберите категорию"></tree-select>

                    <span v-show="errors.has('categories')" class="help-block">{{ errors.first('categories') }}</span>
                  </div>
              </div>

              <div :class="`form-group${errors.has('enabled') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Статус публикации</label>
                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" id="enabled" name="enabled" v-model="product.enabled"><span></span>
                  </label>

                  <span v-show="errors.has('enabled')" class="help-block">{{ errors.first('enabled') }}</span>
                </div>
              </div>

              <div :class="`form-group${errors.has('is_payable') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Доступность оплаты</label>
                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" id="is-payable" name="is_payable" v-model="product.is_payable"><span></span>
                  </label>

                  <span v-show="errors.has('is_payable')" class="help-block">{{ errors.first('is_payable') }}</span>
                </div>
              </div>

              <div :class="`form-group${errors.has('is_new') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Новинка</label>
                <div class="col-md-9">
                  <label class="switch switch-success">
                    <input type="checkbox" id="is-new" name="is_new" v-model="product.is_new"><span></span>
                  </label>

                  <span v-show="errors.has('is_new')" class="help-block">{{ errors.first('is_new') }}</span>
                </div>
              </div>

              <div :class="`form-group${errors.has('is_popular') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Популярный товар</label>
                <div class="col-md-9">
                  <label class="switch switch-warning">
                    <input type="checkbox" id="is-popular" name="is_popular" v-model="product.is_popular"><span></span>
                  </label>

                  <span v-show="errors.has('is_popular')" class="help-block">{{ errors.first('is_popular') }}</span>
                </div>
              </div>

              <div class="form-group" v-if="'showed' in product">
                <label class="col-md-3 control-label">Показано раз:</label>
                <div class="col-md-9">
                  <p class="form-control-static">{{ product.showed }}</p>
                </div>
              </div>

              <div class="form-group" v-if="'bought' in product">
                <label class="col-md-3 control-label">Куплено раз:</label>
                <div class="col-md-9">
                  <p class="form-control-static">{{ product.bought }}</p>
                </div>
              </div>

              <div class="form-group" v-if="product.created_at">
                <label class="col-md-3 control-label">Дата создания</label>
                <div class="col-md-9">
                  <p class="form-control-static">{{ product.created_at }}</p>
                </div>
              </div>

              <div class="form-group" v-if="product.updated_at">
                <label class="col-md-3 control-label">Последнее изменение</label>
                <div class="col-md-9">
                  <p class="form-control-static">{{ product.updated_at }}</p>
                </div>
              </div>

            </div>
          </div>
        </div>


        <div class="col-lg-12">
          <div class="block">
            <div class="block-title">
              <h2><i class="fa fa-pencil"></i> <strong>Цены</strong></h2>
            </div>

            <prices-table :prices.sync="product.prices"></prices-table>
          </div>
        </div>

        <div class="col-lg-12" v-if="type === 'edit'">
          <div class="block">
            <div class="block-title">
              <h2><i class="fa fa-pencil"></i> <strong>Изображения</strong></h2>
            </div>

            <dropzone-gallery
              style="margin-bottom: 20px"
              :url="prepareUrl('image')"
              :images.sync="product.images" />
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
      Вы действительно хотите удалить товар?
    </b-modal>
  </div>
</template>

