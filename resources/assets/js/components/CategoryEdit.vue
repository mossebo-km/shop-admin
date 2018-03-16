<script>
  import $ from 'jquery'
  import 'select2'

  import ShopQuickNav from './ShopQuickNav.vue'
  import Core from '../core'
  import Loading from './Loading.vue'
  import TreeSelect from './TreeSelect.vue'
  import CKEditor from './CKEditor.vue'
  import LanguagePicker from './LanguagePicker.vue'
  import { Validator } from 'vee-validate'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  export default {
    name: 'category-edit',
    props: ['id', 'type'],
    data() {
      return {
        loading: true,
        languages: [],
        activeLanguageCode: null,
        categories: [],
        category: null,
        validationErrors: [],
        saveDisabled: false,
      }
    },

    watch: {
      '$route': ['clearQueue', 'fetchData']
    },

    methods: {
      /*
        Взаимодействие с сервером.
      */

        /*
          Загрузка данных.
        */

        fetchData() {
          this.loading = true
          this.fetchMainData()

          if (this.type === 'create') {
            this.dataQueue.add(() => new Promise(resolve => {
              this.initEmptyCategory()
              resolve()
            }))
          }

          if (this.type === 'edit') {
            this.fetchCategory()
          }

          this.dataQueue.add(() => new Promise(resolve => {
            this.loading = false
            resolve()
          }))
        },


          /*
            Загрузка данных, необходимых тратата и все такое.
          */

          fetchMainData() {
            this.dataQueue.add(() => new Promise (resolve => {
              Core.dataHandler.get(['categories-tree', 'languages'])
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
                  resolve()
                })
            }))
          },


          /*
            Загрузка данных категории с сервера.
          */

          fetchCategory() {
            this.dataQueue.add(new Core.requestHandler('get', `/api${this.$route.path}`))
              .onDone()
                .success(this.pullCategoryFromResponse)
                .fail(response => {
                  if (response.status === 404 && this.type === 'edit') {
                    Core.notify('Категория не найдена.', {type: 'error'})
                    this.$router.push('/categories')
                  }
                })
          },


          /*
            Сохранение категории
          */

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
                    ... this.category
                  }

                  let request;

                  if (this.type === 'create') {
                    request = new Core.requestHandler('post', "/api/categories", data)
                  }

                  if (this.type === 'edit') {
                    request = new Core.requestHandler('put', `/api${this.$route.path}`, data)
                  }

                  this.saveQueue.add(request)
                    .onDone()
                      .success(this.pullCategoryFromResponse)
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
        Вытаскиваем данные категории из ответа сервера.
      */

      pullCategoryFromResponse(response) {
        let category = response.data.category
        this.initEmptyTranslates(category)
        this.category = category
      },



      /*
        Инициализация пустой модели данных.
      */

        /*
          Основные данные категории.
        */

        initEmptyCategory() {
          let category = {
            parent_id: 0,
            slug: '',
            enabled: true,
            i18: {},
          }

          this.initEmptyTranslates(category)

          this.category = category
        },

        /*
          Переводы категории.
        */

        initEmptyTranslates(category, languageCode) {
          category = category || {i18: {}};

          this.languages.forEach(language => {
            if (! (language.code in category.i18)) {
              category.i18[language.code] = {
                title: '',
                description: '',
                meta_title: '',
                meta_description: ''
              }
            }
          })
        },



      /**
        Удаление категории
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
          new Core.requestHandler('delete', `/api/categories/${this.category.id}`)
            .success(() => {
              this.$router.push('/categories')
            })
        },


      /*
        Установка ошибок валидации, пришедших с сервера
      */

      setValidationErrors(errors = {}) {
        for (let fieldName in errors) {
          if (this.errors.has(fieldName)) {
            this.errors.remove(fieldName)
          }

          this.errors.add(fieldName, errors[fieldName])
        }
      },


      /*
        Автозаполнение slug из заголовка категории.
      */

      onSlugAutocomplete() {
        this.category.slug = Core.makeUrl(this.category.i18[this.activeLanguageCode].title)
      },


      /*
        Обработка очередей
      */


        /*
          Отчистка очереди
        */

        clearQueue() {
          this.dataQueue.clear()
        },
    },

    components: {
      'shop-quick-nav': ShopQuickNav,
      'loading': Loading,
      'tree-select': TreeSelect,
      'ckeditor': CKEditor,
      'language-picker': LanguagePicker,
      'b-modal': bModal
    },

    created() {
      this.dataQueue = Core.queueHandler.makeQueue('iteration', 'page-data')
      this.saveQueue = Core.queueHandler.makeQueue('block', 'page-save')

      Validator.extend('slug_exist', {
        getMessage: field => `Категория с таким slug уже существует.`,
        validate: slug => new Promise(resolve => {
          let params = {slug}

          if (this.type === 'edit') {
            params.id = this.category.id
          }

          new Core.requestHandler('get', `/api/categories/slug`, params)
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
    }
  }
</script>

<template>
  <div>
    <shop-quick-nav active="categories"></shop-quick-nav>

    <div class="block full">
      <div class="block-title" v-if="type === 'create'">
        <h1><strong>Создание категории</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-success active" @click="onSave" :disabled="saveDisabled"><i class="fa fa-plus-circle"></i> Создать</a>
        </div>
      </div>

      <div class="block-title" v-if="type === 'edit'">
        <h1><strong>Редактирование категории #{{ this.id }}</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-primary active" @click="onSave" :disabled="saveDisabled"><i class="fa fa-floppy-o"></i> Сохранить</a>

          <a href="javascript:void(0);" class="btn btn-sm btn-danger active" @click="onRemove" :disabled="saveDisabled"><i class="fa fa-floppy-o"></i> Удалить</a>
        </div>
      </div>

      <loading :loading="loading">
        <div class="row" v-if="category">

          <div class="col-lg-6">
            <div class="block">
              <div class="block-title clearfix">
                <h2><i class="fa fa-globe"></i> <strong>Языковая</strong> информация</h2>

                <div class="block-options pull-right">
                  <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode"></language-picker>
                </div>
              </div>

              <template v-for="language in languages">
                <div :class="`form-horizontal form-bordered${activeLanguageCode === language.code ? '' : ' in-space'}`" :key="language.code">

                  <div :class="`form-group${errors.has(`i18.${language.code}.title`) ? ' has-error' : ''}`">
                    <label class="col-md-3 control-label" :for="`title-${language.code}`">Название товара <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" :id="`title-${language.code}`" v-model="category.i18[language.code].title" :name="`i18.${language.code}.title`" v-validate="'required|max:255'">
                      <span v-show="errors.has(`i18.${language.code}.title`)" class="help-block">{{ errors.first(`i18.${language.code}.title`) }}</span>
                    </div>
                  </div>

                  <div :class="`form-group${errors.has(`i18.${language.code}.description`) ? ' has-error' : ''}`">
                    <label class="col-md-3 control-label" :for="`description-${language.code}`">Описание</label>
                    <div class="col-md-9">
                      <ckeditor :id="`description-${language.code}`" :content.sync="category.i18[language.code].description" :name="`i18.${language.code}.description`" />
                      <span v-show="errors.has(`i18.${language.code}.description`)" class="help-block">{{ errors.first(`i18.${language.code}.description`) }}</span>
                    </div>
                  </div>

                  <div :class="`form-group${errors.has(`i18.${language.code}.meta_title`) ? ' has-error' : ''}`">
                    <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-заголовок</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" :id="`title-${language.code}`" v-model="category.i18[language.code].meta_title" :name="`i18.${language.code}.meta_title`" v-validate="'max:255'">
                      <span v-show="errors.has(`i18.${language.code}.meta_title`)" class="help-block">{{ errors.first(`i18.${language.code}.meta_title`) }}</span>
                    </div>
                  </div>

                  <div :class="`form-group${errors.has(`i18.${language.code}.meta_description`) ? ' has-error' : ''}`">
                    <label class="col-md-3 control-label" :for="`title-${language.code}`">Мета-описание</label>
                    <div class="col-md-9">
                      <textarea class="form-control" :id="`meta-description-${language.code}`" v-model="category.i18[language.code].meta_description" :name="`i18.${language.code}.meta_description`" v-validate="'max:65000'"></textarea>
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
                      <input type="text" id="slug" class="form-control" v-model="category.slug" name="slug" v-validate="'required|min:3|max:255|slug_exist'" required>
                      <a class="btn input-group-addon" @click="onSlugAutocomplete"><i class="fa fa-refresh"></i> Автозаполнение</a>
                    </div>

                    <span v-show="errors.has('slug')" class="help-block">{{ errors.first('slug') }}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="parent_id">Родительская категория</label>
                  <div class="col-md-8">
                    <tree-select :options="categories" :activeOption.sync="category.parent_id" :disabled="category.id || false" placeholder="Выберите категорию"></tree-select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Статус публикации</label>
                  <div class="col-md-9">
                    <label class="switch switch-primary">
                      <input type="checkbox" v-model="category.enabled"><span></span>
                    </label>
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
      Вы действительно хотите удалить категорию?
    </b-modal>
  </div>
</template>


