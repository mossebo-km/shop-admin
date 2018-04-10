<script>
  import 'select2'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import ShopQuickNav from '../ShopQuickNav'
  import TreeSelect from '../../TreeSelect'
  import CKEditor from '../../CKEditor'
  import LanguagePicker from '../../LanguagePicker'

  import PricesTable from '../../PricesTable'
  import DropzoneGallery from '../../DropzoneGallery'
  import EntityEdit from '../../../mixins/EntityEdit'
  import Translatable from '../../../mixins/Translatable'

  import number from '../../../directives/number'

  import WeightConverter from '../../converters/WeightConverter'
  import SizeConverter from '../../converters/SizeConverter'

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

        categoriesTree: [],
        currencies: [],
        priceTypes: [],
        suppliers:  [],

        saveDisabled: false,

        defaultFieldsValues: {
          supplier_id: 0,
          quantity: 1,
          is_new: false,
          is_popular: false,
          is_payable: true,
          enabled: true,

          created_at: null,
          updated_at: null,

          width: 0,
          height: 0,
          length: 0,
          weight: 0,
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
          'suppliers',
          'price-types',
          'currencies'
        ]
      }
    },

    components: {
      ShopQuickNav,
      TreeSelect,
      'ckeditor': CKEditor,
      LanguagePicker,
      bModal,
      DropzoneGallery,
      PricesTable,
      WeightConverter,
      SizeConverter
    },

    methods: {
      getToSaveData() {
        let model = this.getEntityModel()

        return {
          ... model,
          images: model.images.reduce((acc, item) => {
            if (!item.deleted) {
              acc.push({
                id: item.id,
                modifications: item.modifications
              })
            }

            return acc
          }, [])
        }
      },

      /**
       * Инициализация модели.
       *
       * @param data
       */
      initEntity(data = {}) {
        let entity = this.makeEntityBaseData(data)

        entity.categories = data.categories || []
        entity.images = data.images || []
        entity.i18 = this.initI18(data.i18)
        entity.prices = this.initPrices(data.prices)

        this.setEntityData(entity)
      },

        /**
         * Инициализация цен.
         *
         * @param prices
         */
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
          <a href="javascript:void(0);" class="btn btn-sm btn-success active" @click="save" :disabled="saveDisabled"><i class="fa fa-plus-circle"></i> Создать</a>
        </div>
      </div>

      <div class="block-title clearfix" v-if="type === 'edit'">
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

              <div class="block-title-control pull-right">
                <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" :class="{'has-error': formTranslatesHasError()}"></language-picker>
              </div>
            </div>

            <template v-for="language in languages">
              <div :class="`form-horizontal form-bordered${activeLanguageCode === language.code ? '' : ' in-space'}`" :key="language.code">

                <div :class="`form-group${formErrors.has(`i18.${language.code}.title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Название <span class="text-danger">*</span></label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" :id="`title-${language.code}`" v-model="product.i18[language.code].title" :name="`i18.${language.code}.title`" v-validate="'required|max:255'">
                    <span v-show="formErrors.has(`i18.${language.code}.title`)" class="help-block">{{ formErrors.first(`i18.${language.code}.title`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18.${language.code}.description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`description-${language.code}`">Описание</label>
                  <div class="col-md-9">
                    <ckeditor :id="`description-${language.code}`" :content.sync="product.i18[language.code].description" :name="`i18.${language.code}.description`" />
                    <span v-show="formErrors.has(`i18.${language.code}.description`)" class="help-block">{{ formErrors.first(`i18.${language.code}.description`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18.${language.code}.meta_title`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-заголовок</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" :id="`title-${language.code}`" v-model="product.i18[language.code].meta_title" :name="`i18.${language.code}.meta_title`" v-validate="'max:255'">
                    <span v-show="formErrors.has(`i18.${language.code}.meta_title`)" class="help-block">{{ formErrors.first(`i18.${language.code}.meta_title`) }}</span>
                  </div>
                </div>

                <div :class="`form-group${formErrors.has(`i18.${language.code}.meta_description`) ? ' has-error' : ''}`">
                  <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-описание</label>
                  <div class="col-md-9">
                    <textarea class="form-control" :id="`meta-description-${language.code}`" v-model="product.i18[language.code].meta_description" :name="`i18.${language.code}.meta_description`" v-validate="'max:65000'"></textarea>
                    <span v-show="formErrors.has(`i18.${language.code}.meta_description`)" class="help-block">{{ formErrors.first(`i18.${language.code}.meta_description`) }}</span>
                  </div>
                </div>
              </div>
            </template>

          </div>

          <div class="block">
            <div class="block-title">
              <h2><i class="fa fa-pencil"></i> <strong>Основная</strong> информация</h2>
            </div>

            <div class="form-horizontal form-bordered">
              <div :class="`form-group${formErrors.has('supplier_id') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="product-supplier">Поставщик <span class="text-danger">*</span></label>
                <div class="col-md-8">
                  <tree-select :options="suppliers" :selected.sync="product.supplier_id" placeholder="Выберите поставщика"></tree-select>

                  <span v-show="formErrors.has('supplier_id')" class="help-block">{{ formErrors.first('supplier_id') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('categories') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="product-category">Категория</label>
                <div class="col-md-8">
                  <tree-select :options="categoriesTree" :selected.sync="product.categories" :multiple="true" placeholder="Выберите категорию"></tree-select>

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
                    <input type="text" class="form-control" id="width" v-model="product.width" name="width" v-validate="'required|integer|min_value:1'">
                    <size-converter :value="product.width"></size-converter>
                  </div>
                  <span v-show="formErrors.has('width')" class="help-block">{{ formErrors.first('width') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('height') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="height">Высота <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <div class="input-group">
                    <input type="text" class="form-control" id="height" v-model="product.height" name="height" v-validate="'required|integer|min_value:1'">
                    <size-converter :value="product.height"></size-converter>
                  </div>
                  <span v-show="formErrors.has('height')" class="help-block">{{ formErrors.first('height') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('length') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="length">Длина <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <div class="input-group">
                    <input type="text" class="form-control" id="length" v-model="product.length" name="length" v-validate="'required|integer|min_value:1'">
                    <size-converter :value="product.length"></size-converter>
                  </div>
                  <span v-show="formErrors.has('length')" class="help-block">{{ formErrors.first('length') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('weight') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="weight">Вес <span class="text-danger">*</span></label>
                <div class="col-md-9">
                  <div class="input-group">
                    <input type="text" class="form-control" id="weight" v-model="product.weight" name="weight" v-validate="'required|integer|min_value:1'">
                    <weight-converter :value="product.weight"></weight-converter>
                  </div>
                  <span v-show="formErrors.has('weight')" class="help-block">{{ formErrors.first('weight') }}</span>
                </div>
              </div>

            </div>
          </div>

          <dropzone-gallery
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

        <prices-table :prices.sync="product.prices"></prices-table>
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

