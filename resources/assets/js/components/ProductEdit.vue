<script>
  import $ from 'jquery'
  import 'select2'
  import Vue from 'vue'

  import ShopQuickNav from './ShopQuickNav.vue'
  import Core from '../core'
  import Loading from './Loading.vue'
  import TreeSelect from './TreeSelect.vue'
  import CKEditor from './CKEditor.vue'
  import LanguagePicker from './LanguagePicker.vue'
  import ImagesGallery from './ImagesGallery.vue'
  import { Validator } from 'vee-validate'
  import magnificPopup from 'magnific-popup'


  import bModal from 'bootstrap-vue/es/components/modal/modal'
  import vueDropzone from 'vue2-dropzone'

  Vue.directive('number', {
    bind(el, binding, vnode) {
      el.addEventListener('keydown', binding.def.handler);
    },

    unbind(el, binding, vnode) {
      el.removeEventListener('input', binding.def.handler);
    },

    handler(e) {
      if (event.metaKey) return
      let charCode = (e.which) ? e.which : e.keyCode

      if (charCode === 32 || (charCode > 57 && charCode !== 188 && charCode !== 190)) {
        e.preventDefault()
      }
      else {
        let decimalSeparatorPresents = new RegExp(/[\.\,]/).test(e.target.value)

        if ( charCode === 188 && (e.key !== ',' || decimalSeparatorPresents) ) {
          e.preventDefault()
        }

        if ( charCode === 190 && (e.key !== '.' || decimalSeparatorPresents) ) {
          e.preventDefault()
        }
      }
    }
  });




  export default {
    name: 'product-edit',

    props: [
      'id',
      'type'
    ],

    data() {
      return {
        loading: true,
        languages: [],
        activeLanguageCode: null,
        categories: [],
        currencies: [],
        priceTypes: [],

        product: null,
        validationErrors: [],
        saveDisabled: false,
        hasChanges: false,

        dropzoneOptions: {
          url: this.prepareUrl(),
          thumbnailWidth: 150,
          maxFilesize: 8,
          addRemoveLinks: true,
          autoProcessQueue: true,
          ignoreHiddenFiles: true,
          dictRemoveFile: 'Удалить',
          acceptedFiles: 'image/jpeg, image/png',
          previewTemplate: '<div class=\"dz-preview dz-processing dz-complete dz-image-preview\"><div class=\"dz-image\"><a href=\"javascript:void(0)\" class=\"dz-link\"><img data-dz-thumbnail /><div class=\"dz-details\"><div class=\"dz-size\"><span data-dz-size></span></div><div class=\"dz-filename\"><i class=\"dz-icon fa fa-search\"></i></div></div></a></div><div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div><div class=\"dz-error-message\"><span data-dz-errormessage></span></div><div class=\"dz-success-mark\"><i class=\"dz-icon fa fa-check\"></i></div><div class=\"dz-error-mark\"><i class=\"dz-icon fa fa-warning\"></i><a class=\"dz-remove\" href=\"javascript:void(0);\" data-dz-remove>Удалить</a></div>',
        }
      }
    },

    watch: {
      '$route': ['reset', 'fetchData'],
    },

    components: {
      ShopQuickNav,
      Loading,
      TreeSelect,
      'ckeditor': CKEditor,
      LanguagePicker,
      bModal,
      vueDropzone,
      ImagesGallery
    },

    methods: {
      fetchData() {
        this.loading = true
        this.fetchMainData()

        if (this.type === 'create') {
          this.dataQueue.add(() => new Promise(resolve => {
            this.initProduct()
            resolve()
          }))
        }

        if (this.type === 'edit') {
          try {
            this.fetchProduct()
          }
          catch(e) {
            console.log(e)
          }
        }

        this.dataQueue.add(() => new Promise(resolve => {
          this.loading = false
          resolve()
        }))

        this.dataQueue.add(() => new Promise(resolve => {
          this.initDropzone()
          resolve()
        }))
      },

      fetchMainData() {
        this.dataQueue.add(() => new Promise (resolve => {
          Core.dataHandler.get(['categories-tree', 'languages', 'price-types', 'currencies'])
            .then(data => {
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
              this.priceTypes = data['price-types']
              this.currencies = data['currencies']
              resolve()
            })
        }))
      },

      fetchProduct() {
        this.dataQueue.add(new Core.requestHandler('get', this.prepareUrl()))
          .onDone()
            .success(this.pullProductFromResponse)
            .fail(response => {
              if (response.status === 404 && this.type === 'edit') {
                Core.notify('Товар не найден.', {type: 'error'})
                this.$router.push('/products')
              }
            })
      },


      getDropzone() {
        if (this.$refs.dropzone && this.$refs.dropzone.dropzone) {
          return this.$refs.dropzone.dropzone
        }

        return false
      },

      prepareUrl(segment) {
        let url = Core.trim(this.$route.path.replace('create', ''), '/')

        if (segment) {
          url += '/' + Core.trim(segment, '/')
        }

        return `/api/${url}`
      },

      initDropzone() {
        const dropzone = this.getDropzone()

        if (!dropzone) return

        dropzone.options.url = this.prepareUrl('image')

        this.product.images.map(item => {
          const file = {
            id: item.id,
            name: item.original,
            size: item.size,
            type: item.type,
          }

          dropzone.emit('addedfile', file)
          dropzone.emit("thumbnail", file, item.medium.src)
          dropzone.emit("processing", file)
          dropzone.emit("complete", file)

          this.dropzoneMakeGallery(file.previewElement, item.original)

          dropzone.files.push(file)
        })
      },

      dropzoneSuccess(file, response, action) {
        let dropzone = this.getDropzone()

        if (response.status == 'success') {
          file.id = response.id
          this.dropzoneMakeGallery(file.previewElement, response.url)
          dropzone.defaultOptions.success(file)
          this.hasChanges = true
        }

        if (response.status == 'error') {
          dropzone.defaultOptions.error(file, response.message)
        }
      },

      dropzoneMakeGallery(item, url) {
        let elLink = item.querySelector('.dz-link')
        elLink.href = url

        $('#dropzone').magnificPopup({
          delegate: '.dz-link',
          type: 'image',
          gallery: {
            enabled:true
          }
        });
      },


      collectImagesIds() {
        if (! (this.type === 'edit' && this.$refs.dropzone)) return null

        return this.$refs.dropzone.dropzone.files.reduce((acc, item) => {
          acc.push(item.id)
          return acc
        }, [])
      },


      /*
        Вытаскиваем данные товара из ответа сервера.
      */

      pullProductFromResponse(response) {
        this.initProduct(response.data.product)
      },

      /*
        Основные данные товара.
      */

      initProduct(data = {}) {
        let product = {}
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
            product[fieldName] = data[fieldName]
          }
          else {
            product[fieldName] = defaultFieldsValues[fieldName]
          }
        }

        product.categories = data.categories || []
        product.images = data.images || []
        product.i18 = this.initI18(data.i18)
        product.prices = this.initPrices(data.prices)

        this.product = product
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

        initPrices(data = []) {
          let result = {}
          let sorted = {}

          data.forEach(item => {
            if (! (item.price_type_id in sorted)) {
              sorted[item.price_type_id] = {}
            }

            sorted[item.price_type_id][item.currency_code] = item.value
          })

          this.priceTypes.forEach(priceType => {
            if (! (priceType.id in result)) {
              result[priceType.id] = {}
            }

            this.currencies.forEach(currency => {
              if (! (currency.code in result[priceType.id])) {
                result[priceType.id][currency.code] = ''

                if (priceType.id in sorted && currency.code in sorted[priceType.id]) {
                  result[priceType.id][currency.code] = sorted[priceType.id][currency.code]
                }
              }
            })
          })

          return result
        },

      /**
        Удаление товара
      */


        /*
          Нажатие на кнопку удаления записи.
        */

        onRemove() {
          var _ = this;

          if (this.type !== 'edit') return

          this.$refs.removeModal.show()
        },


        /*
          При подтвержении удаления записи.
        */

        onRemoveConfirm() {
          new Core.requestHandler('delete', this.prepareUrl())
            .success(() => {
              this.$router.push('/products')
            })
        },

        onSave() {
          this.saveDisabled = true
          this.$validator.validateAll()
            .then(result => {
              if (!result) {
                this.saveDisabled = false
                this.$refs.validationModal.show()
              }
              else {
                const data = {
                  ... this.product,
                  images: this.collectImagesIds()
                }

                let requestType;

                if (this.type === 'create') {
                  requestType = 'post'
                }

                if (this.type === 'edit') {
                  requestType = 'put'
                }

                const request = new Core.requestHandler(requestType, this.prepareUrl(), data)

                this.saveQueue.add(request)
                  .onDone()
                    .success(this.pullProductFromResponse)
                    .fail(response => {
                      if (response.data.errors) {
                        this.setValidationErrors(response.data.errors)
                        this.$refs.validationModal.show()
                      }
                    })
                    .any(() => {
                      this.saveDisabled = false
                    })
              }
            });
        },

      /*
        Установка ошибок валидации, пришедших с сервера
        todo: собрать миксин валидации?
      */

      setValidationErrors(errors = {}) {
        for (let fieldName in errors) {
          if (this.errors.has(fieldName)) {
            this.errors.remove(fieldName)
          }

          this.errors.add(fieldName, errors[fieldName])
        }
      },

      getModel() {
        return this.product
      },

      formatPrice(value, currencyCode) {
        let currency = this.currencies.find(item => item.code === currencyCode)

        let formatted = new Intl.NumberFormat('ru-RU', {
          style: 'currency',
          currency: currencyCode,
          maximumFractionDigits: currency.precision
        })

        value = (value || 0).toString().replace(',', '.')

        return formatted.format(value).replace(',' + ''.padStart(currency.precision, '0'), '')
      },

      /*
        Автозаполнение slug из заголовка категории.
      */

      onSlugAutocomplete() {
        this.product.slug = Core.makeUrl(this.product.i18[this.activeLanguageCode].title)
      },

      clearQueue() {
        this.dataQueue.clear()
        this.saveQueue.clear()
      },

      reset() {
        this.clearQueue()
        this.hasChanges = false
        let dropzone = this.getDropzone()

        if (dropzone) {
          dropzone.removeAllFiles(true)
        }
      },


      onLeaveConfirm() {
        this.leave()
      },

      onLeaveCancel() {
        this.leave = null
      },


      beforeRouteChanges(next) {
        if (this.type === 'edit' && this.hasChanges) {
          this.leave = next
          this.$refs.leaveModal.show()
        }
        else {
          next()
        }
      },

      translatesSwitcherHasError() {
        let errors = this.errors.items

        for (let j = 0; j < this.languages.length; j ++) {
          let code = this.languages[j].code
          for (let i = 0; i < errors.length; i++) {
            if (errors[i].field.indexOf(`i18.${code}`)) {
              return true
            }
          }
        }

        return false
      },
    },

    created() {
      this.dataQueue = Core.queueHandler.makeQueue('iteration', 'page-data')
      this.saveQueue = Core.queueHandler.makeQueue('block', 'page-save')

      Validator.extend('slug_exist', {
        getMessage: field => `Товар с таким slug уже существует.`,
        validate: slug => new Promise(resolve => {
          new Core.requestHandler('post', this.prepareUrl('slug'), {slug})
            .success(() => resolve( {valid: true} ))
            .fail(() => resolve( {valid: false} ))
            .start()
        })
      })
    },

    mounted() {
      this.fetchData()
    },

    beforeDestroy() {
      this.clearQueue()
    },

    beforeRouteUpdate(to, from, next) {
      this.beforeRouteChanges(next)
    },

    beforeRouteLeave(to, from, next) {
      this.beforeRouteChanges(next)
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
          <a href="javascript:void(0);" class="btn btn-sm btn-success active" @click="onSave" :disabled="saveDisabled"><i class="fa fa-plus-circle"></i> Создать</a>
        </div>
      </div>

      <div class="block-title" v-if="type === 'edit'">
        <h1><strong>Редактирование товара #{{ this.id }}</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-primary active" @click="onSave" :disabled="saveDisabled"><i class="fa fa-floppy-o"></i> Сохранить</a>

          <a href="javascript:void(0);" class="btn btn-sm btn-danger active" @click="onRemove" :disabled="saveDisabled"><i class="fa fa-floppy-o"></i> Удалить</a>
        </div>
      </div>

      <loading :loading="loading">
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

              <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter prices-table">
                  <thead>
                    <tr>
                      <th>Тип</th>
                      <th v-for="currency in currencies">{{ currency.name }}, {{ currency.code }}</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr v-for="priceType in priceTypes">
                      <td><span class="prices-table__type">{{ priceType.description }}</span></td>
                      <td v-for="currency in currencies">
                        <div class="input-group">
                          <input type="text" v-model="product.prices[priceType.id][currency.code]" v-number="product.prices[priceType.id][currency.code]" class="form-control">
                          <span class="input-group-addon prices-table__formatted">{{formatPrice(product.prices[priceType.id][currency.code], currency.code)}}</span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-12" v-if="type === 'edit'">
            <div class="block">
              <div class="block-title">
                <h2><i class="fa fa-pencil"></i> <strong>Изображения</strong></h2>
              </div>

              <vue-dropzone
                style="margin-bottom: 20px"
                ref="dropzone"
                id="dropzone"
                @vdropzone-success="dropzoneSuccess"
                :options="dropzoneOptions"
                :destroyDropzone="true" />
            </div>
          </div>
        </div>
      </loading>
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
      @ok="onRemoveConfirm">
      Вы действительно хотите удалить товар?
    </b-modal>

    <b-modal id="leaveModal"
      ref="leaveModal"
      title="Покинуть страницу"
      title-tag="h3"
      centered
      ok-title="Уйти"
      cancel-title="Отмена"
      hide-header-close
      @ok="onLeaveConfirm"
      @cancel="onLeaveCancel">
      Покинуть страницу без внесения изменений?
    </b-modal>
  </div>
</template>

