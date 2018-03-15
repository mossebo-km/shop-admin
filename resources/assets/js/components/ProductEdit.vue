<script>
  import $ from 'jquery'
  import 'select2'

  import ShopQuickNav from './ShopQuickNav.vue'
  import Core from '../core'
  import Loading from './Loading.vue'

  export default {
    name: 'product-edit',
    props: ['id'],
    data() {
      return {
        loading: false,
        data: null,
        languages: [
          {
            code: 'en',
            name: 'Английский',
            default: 0
          },
          {
            code: 'ru',
            name: 'Русский',
            default: 1
          }
        ],
        activeLanguage: 1,
        categories: [
          {
            id: 1,
            title: 'Мебель',
            sub: [
              {
                id: 2,
                title: 'Стулья'
              }
            ]
          },
          {
            id: 3,
            title: 'Свет'
          },
        ],
        prices: [

        ],
        product: {
          code: '',
          sku: 'stul',
          showed: 107,
          bought: 3,
          is_new: 1,
          is_popular: 1,
          is_payable: 1,
          enabled: 1,
          i18: {
            ru: {
              title: 'Стул обыкновенный',
              description: '<p>Стул обыкновенный, больше сказать нечего.</p>',
              meta_title: 'Стул обыкновенный',
              meta_description: 'Стул обыкновенный, больше сказать нечего.',
            }
          },
          images: [

          ],
          categories: [2, 3],

          prices: [
            {

            }
          ]
        }
      }
    },

    components: {
      'shop-quick-nav': ShopQuickNav
    },

    methods: {
      activeLanguageCode() {
        return this.languages[this.activeLanguage].code;
      },

      buildCategorySelect() {
        const build = function (list, level = 0) {
          if (! list) return '';

          return list.reduce(function(accumulator, item) {
            return accumulator + `<option value="${item.id}">${('').padStart(level, '-') + item.title}</option>` + build(item.sub, level + 1);
          }, '');
        }

        return build(this.categories);
      },

      fetchData () {
        if (typeof this.fetchRequestCancel === 'function') {
          this.fetchRequestCancel()
        }

        this.error = this.post = null
        this.loading = true

        let promise = axios.get('/api' + this.$route.path, {
          responseType: 'json',
          cancelToken: new axios.CancelToken(c => this.fetchRequestCancel = c),
        })

        return promise.then(response => {
          // console.log(response);
          this.loading = false
          this.fetchRequestCancel = false

          // const items = response.data.items || []

          // this.totalRows = parseInt(response.data.totalRows)
          // this.currentPage = parseInt(response.data.currentPage) || 1
          // this.perPage = parseInt(response.data.perPage)

          // return (items.map(item => {
          //   return {
          //     ...item,
          //     url: '/products/' + item.id,
          //     onChage: (status) => {
          //       this.onStatusChange(item.id, status)
          //     }
          //   }
          // }))
        })
        .catch(error => {
          if (error.constructor.name === 'Cancel') return
          Core.requestErrorHandler(error)
        })
      },
    },

    mounted() {
      Core.contentEditor.init('ckeditor')
      $('.select2').select2()
      this.fetchData()
    },

    beforeDestroy() {
      Core.contentEditor.destroy()
    }
  }
</script>
<!--
$table->increments('id')->index();
$table->string('code')->unique()->index(); // внутренний артикул/код товара
$table->string('sku')->nullable(); // артикул производителя
$table->integer('quantity')->nullable()->unsigned();
$table->integer('showed')->unsigned()->default(0);
$table->integer('bought')->unsigned()->default(0);
$table->boolean('is_new')->index()->default(0);
$table->boolean('is_popular')->index()->default(0);
$table->boolean('is_payable')->index()->default(0);
$table->time('sale_time')->nullable()->unsigned();
$table->boolean('enabled')->index()->default(1);
$table->timestamps();



$table->integer('product_id')->unsigned();
$table->foreign('product_id')->references('id')->on(Config::get('migrations.Products'))->onDelete('cascade');

$table->char('language_code', 2);
$table->foreign('language_code')->references('code')->on(Config::get('migrations.Languages'));

$table->string('title');
$table->text('description')->nullable();

$table->string('meta_title')->nullable();
$table->text('meta_description')->nullable();

$table->primary(['product_id', 'language_code'])->index();
 -->
<template>
  <div>
    <shop-quick-nav active="products"></shop-quick-nav>

    <div class="block-title">
      <h1><strong>Редактирование товара #{{ this.id }}</strong></h1>

      <div class="block-title-control">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Сохранить</button>
      </div>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="block">
          <div class="block-title">
            <h2><i class="fa fa-globe"></i> <strong>Языковая</strong> информация</h2>
          </div>

          <div class="form-horizontal form-bordered">
            <div class="form-group">
              <label class="col-md-3 control-label" :for="`title-${activeLanguageCode()}`">Название товара</label>
              <div class="col-md-9">
                <input type="text" :id="`title-${activeLanguageCode()}`" :name="`title[${activeLanguageCode()}]`" :value="product.i18[activeLanguageCode()].title" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" :for="`description-${activeLanguageCode()}`">Описание</label>
              <div class="col-md-9">
                <textarea :title="`description-${activeLanguageCode()}`" :name="`description[${activeLanguageCode()}]`" class="ckeditor">{{ product.i18[activeLanguageCode()].description }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" :for="`meta-title-${activeLanguageCode()}`">Мета-заголовок</label>
              <div class="col-md-9">
                <input type="text" :id="`meta-title-${activeLanguageCode()}`" :name="`meta_title[${activeLanguageCode()}]`" :value="product.i18[activeLanguageCode()].meta_title" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" :for="`meta-description-${activeLanguageCode()}`">Мета-описание</label>
              <div class="col-md-9">
                <textarea :id="`meta-description-${activeLanguageCode()}`" :name="`meta-description[${activeLanguageCode()}]`" class="form-control">{{ product.i18[activeLanguageCode()].meta_description }}</textarea>
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
              <label class="col-md-3 control-label" for="sku">Sku</label>
              <div class="col-md-9">
                <input type="text" id="sku" name="sku" class="form-control" v-model="product.sku">
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="product-category">Категория</label>
                <div class="col-md-8">
                  <select id="category" name="category" class="select2" data-placeholder="Choose Category.." v-html="buildCategorySelect()" style="width:100%"></select>
                </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Статус публикации</label>
              <div class="col-md-9">
                <label class="switch switch-primary">
                  <input type="checkbox" id="enabled" name="enabled" v-model="product.enabled"><span></span>
                </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Доступность оплаты</label>
              <div class="col-md-9">
                <label class="switch switch-primary">
                  <input type="checkbox" id="is-payable" name="is_payable" v-model="product.is_payable"><span></span>
                </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Новинка</label>
              <div class="col-md-9">
                <label class="switch switch-success">
                  <input type="checkbox" id="is-new" name="is_new" v-model="product.is_new"><span></span>
                </label>
              </div>

              <label class="col-md-3 control-label" style="margin-top:15px">Популярный товар</label>
              <div class="col-md-9" style="margin-top:15px">
                <label class="switch switch-warning">
                  <input type="checkbox" id="is-popular" name="is_popular" v-model="product.is_popular"><span></span>
                </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Показано раз:</label>
              <div class="col-md-9">
                <p class="form-control-static">{{ product.showed }}</p>
              </div>

              <label class="col-md-3 control-label">Куплено раз:</label>
              <div class="col-md-9">
                <p class="form-control-static">{{ product.bought }}</p>
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

          <div class="block-title">
            <h2><i class="fa fa-pencil"></i> <strong>Атрибуты</strong></h2>
          </div>

          <div class="block-title">
            <h2><i class="fa fa-pencil"></i> <strong>Изображения</strong></h2>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="block">
          <div class="form-group form-actions">

          </div>
        </div>
      </div>
    </div>

  </div>
</template>


