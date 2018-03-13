<script>
  import $ from 'jquery'
  import 'select2'

  import ShopQuickNav from './ShopQuickNav.vue'
  import Core from '../core'
  import Loading from './Loading.vue'
  import TreeSelect from './TreeSelect.vue'

  export default {
    name: 'category-edit',
    props: ['id'],
    data() {
      return {
        type: 'create',
        loading: true,
        languages: null,
        categories: null,
        category: null
      }
    },

    methods: {
      fetchData() {
        this.abortRequest()
        this.loading = true
        this.fetchInProcess = true

        Core.dataHandler.get(['categories-tree', 'languages'])
          .then(data => {
            if (!this.fetchInProcess) return

            this.languages = data['languages'].filter(language => !!language.enabled)
            this.categories = data['categories-tree']

            if (this.type === 'create') {
              this.initEmptyCategory()
              this.abortRequest()
              return
            }

            this.fetchRequest = new Core.requestHandler('get', `/api${this.$route.path}`)
              .success(response => {
                this.category = response.data.category
              })
              .any(() => {
                this.abortRequest()
              })
          })
      },

      abortRequest() {
        this.loading = false

        if (this.fetchInProcess) {
          this.fetchInProcess = false
        }

        if (this.fetchRequest) {
          this.fetchRequest.abort()
          this.fetchRequest = false;
        }
      },

      activeLanguageCode() {
        return 'ru'
      },

      getValue(sections) {
        if (this.type === 'create') {
          return ''
        }

        let result = this.category || {}

        sections = sections.split('.')

        for (let i = 0; i < sections.length; i++) {
          if (typeof result[sections[i]] === 'undefined') {
            return ''
          }

          result = result[sections[i]]
        }

        return result
      },

      initEmptyCategory() {
        this.category = {
          parent_id: 0,
          slug: '',
          enabled: true,
          i18: {},
        }

        this.languages.forEach(language => {
          this.category.i18[language.code] = {
            title: '',
            description: '',
            meta_title: '',
            meta_description: ''
          }
        })
      },

      buildCategorySelect() {
        return ''
      },
    },

    components: {
      'shop-quick-nav': ShopQuickNav,
      'loading': Loading,
      'tree-select': TreeSelect
    },

    mounted() {
      this.fetchData()
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="categories"></shop-quick-nav>

    <div class="block full">
      <div class="block-title">
        <h1><strong>Редактирование категории #{{ this.id }}</strong></h1>
      </div>

      <loading :loading="loading">
        <div class="row" v-if="category">

          <div class="col-lg-6">
            <div class="block">
              <div class="block-title">
                <h2><i class="fa fa-globe"></i> <strong>Языковая</strong> информация</h2>
              </div>

              <div class="form-horizontal form-bordered">
                <div class="form-group">
                  <label class="col-md-3 control-label" :for="`title-${activeLanguageCode()}`">Название товара</label>
                  <div class="col-md-9">
                    <input type="text" :id="`title-${activeLanguageCode()}`" :name="`title[${activeLanguageCode()}]`" :value="getValue(`product.i18.${activeLanguageCode()}.title`)" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" :for="`description-${activeLanguageCode()}`">Описание</label>
                  <div class="col-md-9">
                    <textarea :title="`description-${activeLanguageCode()}`" :name="`description[${activeLanguageCode()}]`" class="ckeditor">{{ getValue(`product.i18.${activeLanguageCode()}.description`) }}</textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" :for="`meta-title-${activeLanguageCode()}`">Мета-заголовок</label>
                  <div class="col-md-9">
                    <input type="text" :id="`meta-title-${activeLanguageCode()}`" :name="`meta_title[${activeLanguageCode()}]`" :value="getValue(`product.i18.${activeLanguageCode()}.meta_title`)" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" :for="`meta-description-${activeLanguageCode()}`">Мета-описание</label>
                  <div class="col-md-9">
                    <textarea :id="`meta-description-${activeLanguageCode()}`" :name="`meta-description[${activeLanguageCode()}]`" class="form-control">{{ getValue(`product.i18.${activeLanguageCode()}.meta_description`) }}</textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="block">
              <div class="block-title">
                <h2><i class="fa fa-pencil"></i> <strong>Основная</strong> информация</h2>
              </div>

              <div class="form-horizontal form-bordered">

                <div class="form-group">
                  <label class="col-md-3 control-label" for="slug">Slug</label>
                  <div class="col-md-9">
                    <input type="text" id="slug" class="form-control" v-model="category.slug">
                  </div>
                </div>


                <div class="form-group">
                    <label class="col-md-3 control-label" for="parent_id">Категория</label>
                    <div class="col-md-8">
                      <tree-select :options="categories" :activeOption.sync="category.parent_id"></tree-select>
                      <!-- <select id="parent_id" class="select2" data-placeholder="Choose Category.." v-html="buildCategorySelect()" style="width:100%"></select> -->
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

              </div>
            </div>
          </div>
        </div>
      </loading>
    </div>
  </div>
</template>


