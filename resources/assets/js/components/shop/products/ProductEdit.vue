<script>
  import Core from '../../../core'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import ShopQuickNav from '../ShopQuickNav'
  import TreeSelect from '../../TreeSelect'
  import TreeSelectTranslatable from '../../TreeSelectTranslatable'
  import CKEditor from '../../CKEditor'
  import LanguagePicker from '../../LanguagePicker'

  import PricesTable from '../PricesTable'
  import DropzoneGallery from '../../DropzoneGallery'
  import EntityEdit from '../../../mixins/EntityEdit'
  import Translatable from '../../../mixins/Translatable'
  import AttributesSelect from '../AttributesSelect'

  import number from '../../../directives/number'

  import WeightConverter from '../../converters/WeightConverter'
  import SizeConverter from '../../converters/SizeConverter'

  import { asyncPackageDataCollector } from '../../../core/queueHandler'

  import ProductModel from '../../../resources/ProductModel'
  import ProductAttributesModel from '../../../resources/ProductAttributesModel'

  export default {
    name: 'product-edit',

    mixins: [
      EntityEdit,
      Translatable
    ],

    directives: {
      ... number
    },

    props: [
      'id',
    ],

    data() {
      return {
        entityName: 'product',
        product: null,

        attributes: [],

        categoriesTree: [],
        currencies: [],
        priceTypes: [],
        suppliers:  [],

        saveDisabled: false,

        usedMainData: [
          'languages',
          'price-types',
          'currencies',
          'categories-tree',
          'suppliers',
        ]
      }
    },

    components: {
      ShopQuickNav,
      TreeSelect,
      TreeSelectTranslatable,
      'ckeditor': CKEditor,
      LanguagePicker,
      bModal,
      DropzoneGallery,
      PricesTable,
      WeightConverter,
      SizeConverter,
      AttributesSelect
    },

    methods: {
      loadData() {
        const a = new asyncPackageDataCollector()
        a.add(() => this.fetchMainData())

        a.add(new Core.requestHandler('get', '/api/shop/attributes'))

        if (this.type === 'edit') {
          a.add(this.fetchEntity())
        }

        a.onDone(data => {
          this.initData(data)
        })

        a.start()
      },

      initData(data) {
        this.initMainData(data)
        this.initEntity(data[this.getEntityName()])
        this.initAttributes(data['attributes'])
      },

      /**
       * Инициализация модели.
       *
       * @param data
       */
      initEntity(data = {}) {
        this.setEntityData(new ProductModel(data, this.languages))
      },

      initAttributes(data = []) {
        this.attributes = this.getSortedData(this.getEnabledData(data)).map(item => new ProductAttributesModel(item, this.languages))
      },

      getToSaveData() {
        return {
          ... this.getEntityModel(),
          images: this.getToSaveImages(),
          attributes: this.getToSaveAttributes()
        }
      },

      getToSaveImages() {
        return this.getEntityModel().images.reduce((acc, item) => {
          if (!item.deleted) {
            acc.push({
              id: item.id,
              modifications: item.modifications
            })
          }

          return acc
        }, [])
      },

      getToSaveAttributes() {
        let attributes = this.$refs.attributesSelect ? this.$refs.attributesSelect.getAttributes() : []

        return attributes.reduce((acc, attribute) => {
          if (! (attribute.selected instanceof Array && attribute.selected.length > 0)) {
            return acc
          }

          acc[attribute.id] = attribute.selected.reduce((attributeAcc, selectedId) => {
            let option = attribute.options.find(option => option.id == selectedId)

            if (option.isNew) {
              attributeAcc[option.id] = Object.keys(option.i18n).reduce((optionAcc, langCode) => {
                optionAcc[langCode] = {
                  value: option.i18n[langCode].title
                }

                return optionAcc
              }, {})
            }
            else {
              attributeAcc[option.id] = option.i18n[this.activeLanguageCode].title
            }

            return attributeAcc
          }, {})

          return acc
        }, {})
      },
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="products"></shop-quick-nav>

    <div class="block full">
      <div class="block-title clearfix" v-if="type === 'create'">
        <h1><strong>Создание товара</strong></h1>

        <div class="block-title-control">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" :class="{'has-error': formTranslatesHasError()}"></language-picker>

          <span v-if="languages.length > 1" class="btn-separator-xs"></span>

          <a href="javascript:void(0);" class="btn btn-sm btn-success active" @click="save" :disabled="saveDisabled"><i class="fa fa-plus-circle"></i> Создать</a>
        </div>
      </div>

      <div class="block-title clearfix" v-if="type === 'edit'">
        <h1><strong>Редактирование товара #{{ this.id }}</strong></h1>

        <div class="block-title-control">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" :class="{'has-error': formTranslatesHasError()}"></language-picker>

          <span v-if="languages.length > 1" class="btn-separator-xs"></span>

          <a href="javascript:void(0);" class="btn btn-sm btn-primary active" @click="save" :disabled="saveDisabled"><i class="fa fa-floppy-o"></i> Сохранить</a>

          <a href="javascript:void(0);" class="btn btn-sm btn-danger active" @click="remove" :disabled="saveDisabled">Удалить</a>
        </div>
      </div>

      <div class="row" v-if="product">

        <div class="col-lg-6">

          <!-- Переводы -->

          <div :class="`block${langSwitchHovered ? ' block-illuminated' : ''}`">
            <div class="block-title">
              <h2><i class="fa fa-globe"></i> <strong>Языковая</strong> информация</h2>
            </div>

            <template v-for="language in languages">
              <div :class="`form-horizontal form-bordered${activeLanguageCode === language.code ? '' : ' in-space'}`" :key="language.code">

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Название <span class="text-danger">*</span></label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" :id="`title-${language.code}`" v-model="product.i18n[language.code].title" :name="`i18n.${language.code}.title`" v-validate="'required|max:255'">
                    <span v-show="formErrors.has(`i18n.${language.code}.title`)" class="help-block">{{ formErrors.first(`i18n.${language.code}.title`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`description-${language.code}`">Описание</label>
                  <div class="col-md-9">
                    <ckeditor :id="`description-${language.code}`" :content.sync="product.i18n[language.code].description" :name="`i18n.${language.code}.description`" />
                    <span v-show="formErrors.has(`i18n.${language.code}.description`)" class="help-block">{{ formErrors.first(`i18n.${language.code}.description`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.meta_title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-заголовок</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" :id="`title-${language.code}`" v-model="product.i18n[language.code].meta_title" :name="`i18n.${language.code}.meta_title`" v-validate="'max:255'">
                    <span v-show="formErrors.has(`i18n.${language.code}.meta_title`)" class="help-block">{{ formErrors.first(`i18n.${language.code}.meta_title`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18n.${language.code}.meta_description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-описание</label>
                  <div class="col-md-9">
                    <textarea class="form-control" :id="`meta-description-${language.code}`" v-model="product.i18n[language.code].meta_description" :name="`i18n.${language.code}.meta_description`" v-validate="'max:65000'"></textarea>
                    <span v-show="formErrors.has(`i18n.${language.code}.meta_description`)" class="help-block">{{ formErrors.first(`i18n.${language.code}.meta_description`) }}</span>
                  </div>
                </div>
              </div>
            </template>

          </div>

          <!-- Основная информация -->

          <div class="block">
            <div class="block-title">
              <h2><i class="fa fa-pencil"></i> <strong>Основная</strong> информация</h2>
            </div>

            <div class="form-horizontal form-bordered">
              <div :class="`form-group${formErrors.has('supplier_id') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="product-supplier">Поставщик <span class="text-danger">*</span></label>
                <div class="col-md-8">
                  <tree-select :activeLanguageCode="activeLanguageCode" :options="suppliers" :selected.sync="product.supplier_id" placeholder="Выберите поставщика"></tree-select>

                  <span v-show="formErrors.has('supplier_id')" class="help-block">{{ formErrors.first('supplier_id') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('categories') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="product-category">Категория</label>
                <div class="col-md-8">
                  <tree-select-translatable :options="categoriesTree" :selected.sync="product.categories" :multiple="true" placeholder="Выберите категорию" :activeLanguageCode="activeLanguageCode"></tree-select-translatable>

                  <span v-show="formErrors.has('categories')" class="help-block">{{ formErrors.first('categories') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('enabled') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Опубликовано</label>
                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" id="enabled" name="enabled" v-model="product.enabled"><span></span>
                  </label>

                  <span v-show="formErrors.has('enabled')" class="help-block">{{ formErrors.first('enabled') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('is_payable') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Доступность оплаты</label>
                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" id="is-payable" name="is_payable" v-model="product.is_payable"><span></span>
                  </label>

                  <span v-show="formErrors.has('is_payable')" class="help-block">{{ formErrors.first('is_payable') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('is_new') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Новинка</label>
                <div class="col-md-9">
                  <label class="switch switch-success">
                    <input type="checkbox" id="is-new" name="is_new" v-model="product.is_new"><span></span>
                  </label>

                  <span v-show="formErrors.has('is_new')" class="help-block">{{ formErrors.first('is_new') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('is_popular') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Популярный товар</label>
                <div class="col-md-9">
                  <label class="switch switch-warning">
                    <input type="checkbox" id="is-popular" name="is_popular" v-model="product.is_popular"><span></span>
                  </label>

                  <span v-show="formErrors.has('is_popular')" class="help-block">{{ formErrors.first('is_popular') }}</span>
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

        <!-- Габариты -->

        <div class="col-lg-6">
          <div class="block">
            <div class="block-title">
              <h2><i class="fa fa-truck"></i> <strong>Габариты</strong></h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div :class="`form-group${formErrors.has('width') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="width">Ширина <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <div class="input-group">
                    <input type="text" class="form-control" id="width" v-model="product.width" name="width" v-number v-validate="'required|integer|min_value:1|max_value:4294967295'">
                    <size-converter :value="product.width"></size-converter>
                  </div>
                  <span v-show="formErrors.has('width')" class="help-block">{{ formErrors.first('width') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('height') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="height">Высота <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <div class="input-group">
                    <input type="text" class="form-control" id="height" v-model="product.height" name="height" v-number v-validate="'required|integer|min_value:1|max_value:4294967295'">
                    <size-converter :value="product.height"></size-converter>
                  </div>
                  <span v-show="formErrors.has('height')" class="help-block">{{ formErrors.first('height') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('length') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="length">Длина <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <div class="input-group">
                    <input type="text" class="form-control" id="length" v-model="product.length" name="length" v-number v-validate="'required|integer|min_value:1|max_value:4294967295'">
                    <size-converter :value="product.length"></size-converter>
                  </div>
                  <span v-show="formErrors.has('length')" class="help-block">{{ formErrors.first('length') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('weight') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="weight">Вес <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <div class="input-group">
                    <input type="text" class="form-control" id="weight" v-model="product.weight" name="weight" v-number v-validate="'required|integer|min_value:1|max_value:4294967295'">
                    <weight-converter :value="product.weight"></weight-converter>
                  </div>
                  <span v-show="formErrors.has('weight')" class="help-block">{{ formErrors.first('weight') }}</span>
                </div>
              </div>

            </div>
          </div>

          <!-- Аттрибуты -->

          <div class="block" v-if="attributes && attributes.length > 0">
            <div class="block-title">
              <h2><i class="fa fa-list"></i> <strong>Аттрибуты</strong></h2>
            </div>

            <attributes-select
              ref="attributesSelect"
              :attributes="attributes"
              :languages="languages"
              :activeLanguageCode="activeLanguageCode"
              :errors="formErrors"

              :selectedAttributes="product.attributes"
              :selectedOptions="product.options" />
          </div>

          <!-- Изображения -->

          <dropzone-gallery
            ref="gallery"
            v-if="type === 'edit'"
            :url="prepareUrl('image')"
            :images.sync="product.images"
            :errors="formErrors.collect('images') || []"/>
        </div>
      </div>


      <div class="block" v-if="product && product.prices">
        <div class="block-title">
          <h2><i class="fa fa-money"></i> <strong>Цены</strong></h2>
        </div>

        <prices-table :prices.sync="product.prices" :errors="formErrors"></prices-table>
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

