<script>
  import 'select2'

  import Core from '../../../core'


  import EntityEdit from '../../../mixins/EntityEdit'
  import Translatable from '../../../mixins/Translatable'
  import Sortable from '../../../mixins/Sortable'


  import bModal from 'bootstrap-vue/es/components/modal/modal'
  import ShopQuickNav from '../ShopQuickNav'
  import LanguagePicker from '../../LanguagePicker'
  import Toggle from '../../Toggle'

  /**
   * todo: добавить всплывающее окно, при удалении не новой опции.
   */

  export default {
    name: "attribute-edit",

    mixins: [
      EntityEdit,
      Translatable,
      Sortable
    ],

    components: {
      ShopQuickNav,
      LanguagePicker,
      bModal,
      Toggle
    },

    props: [
      'id',
      'type'
    ],

    watch: {
      options: 'refreshSort'
    },

    data() {
      return {
        entityName: 'attribute',
        attribute: null,
        options: [],
        languages: [],
        activeLanguageCode: null,
        validationErrors: [],
        saveDisabled: false,

        defaultEntityFieldsValues: {
          layout_class: 'string',
          selectable: false,
          enabled: true,
        },

        defaultTranslatableFieldsValues: {
          title: '',
        },

        usedMainData: [
          'languages',
        ],

        sortableParams: {
          handle: '.table-sort-handler',
          stop: this.onPositionChange,
        }
      }
    },

    methods: {
      /**
       * Инициализация данных.
       */
      initData(data) {
        this.initLanguages(data['languages'] || [])
        this.initEntity(data[this.getEntityName()])
        this.initOptions(data['options'])
      },

      /**
       * Инициализация модели данных.
       */
      initEntity(data = {}) {
        let entity = this.makeEntityBaseData(data)

        entity.i18 = this.initI18(data.i18)

        this.setEntityData(entity)
      },

      initOptions() {

      },

      addOption() {
        this.options = [
          ... this.options,
          this.makeEmptyOption()
        ]
      },

      removeOption(option) {
        this.options = this.options.filter(item => item.id !== option.id)
      },

      makeEmptyOption() {
        let lastOption = this.options[this.options.length - 1]
        let position = lastOption ? lastOption.position + 1 : 0

        return {
          id: Core.uniqueId(),
          isNew: true,
          position,
          enabled: 1,
          i18: this.combineI18DataWithDefault(this.languages, [], {
            value: ''
          })
        }
      },

      changeOptionStatus(option) {
        this.options = this.options.map(item => {
          if (option.id === item.id) {
            return {
              ... option,
              enabled: !option.enabled
            }
          }

          return item
        })
      },
    },

    mounted() {
      this.initSort()
    }
  }
</script>

<template>
  <div>
    <shop-quick-nav active="attributes"></shop-quick-nav>

    <div class="block full">
      <div class="block-title clearfix" v-if="type === 'create'">
        <h1><strong>Создание аттрибута</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-success active" @click="save" :disabled="saveDisabled"><i class="fa fa-plus-circle"></i> Создать</a>
        </div>
      </div>

      <div class="block-title clearfix" v-if="type === 'edit'">
        <h1><strong>Редактирование аттрибута #{{ this.id }}</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-primary active" @click="save" :disabled="saveDisabled"><i class="fa fa-floppy-o"></i> Сохранить</a>

          <a href="javascript:void(0);" class="btn btn-sm btn-danger active" @click="remove" :disabled="saveDisabled">Удалить</a>
        </div>
      </div>

      <div class="row" v-if="attribute">

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
                    <input type="text" class="form-control" :id="`title-${language.code}`" v-model="attribute.i18[language.code].title" :name="`i18.${language.code}.title`" v-validate="'required|max:255'">
                    <span v-show="formErrors.has(`i18.${language.code}.title`)" class="help-block">{{ formErrors.first(`i18.${language.code}.title`) }}</span>
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

              <div :class="`form-group${formErrors.has('enabled') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">Опубликовано</label>
                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" v-model="attribute.enabled"><span></span>
                  </label>

                  <span v-show="formErrors.has('enabled')" class="help-block">{{ formErrors.first('enabled') }}</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('selectable') ? ' has-error' : ''}`" v-if="isSuperAdmin()">
                <label class="col-md-3 control-label">Выбираемый</label>
                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" v-model="attribute.selectable"><span></span>
                  </label>

                  <span v-show="formErrors.has('selectable')" class="help-block">{{ formErrors.first('selectable') }}</span>
                  <span class="help-block">* Дает возможность выбирать аттрибут покупателю в карточке товара.</span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('slug') ? ' has-error' : ''}`" v-if="isSuperAdmin()">
                <label class="col-md-3 control-label" for="slug">Класс в верстке</label>
                <div class="col-md-9">
                  <input type="text" id="slug" class="form-control" v-model="attribute.layout_class" name="slug" v-validate="'max:255'">

                  <span v-show="formErrors.has('layout_class')" class="help-block">{{ formErrors.first('layout_class') }}</span>
                </div>
              </div>

              <div class="form-group" v-if="attribute.created_at">
                <label class="col-md-3 control-label">Дата создания</label>
                <div class="col-md-9">
                  <p class="form-control-static">{{ attribute.created_at }}</p>
                </div>
              </div>

              <div class="form-group" v-if="attribute.updated_at">
                <label class="col-md-3 control-label">Последнее изменение</label>
                <div class="col-md-9">
                  <p class="form-control-static">{{ attribute.updated_at }}</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="block">
            <div class="block-title clearfix">
              <h2><i class="fa fa-list"></i> <strong>Значения</strong></h2>

              <div class="block-title-control">
                <a href="javascript:void(0);" class="btn btn-sm btn-primary active" @click="addOption"><i class="fa fa-plus-circle"></i> Добавить</a>
              </div>
            </div>

            <div class="block-section table-responsive">
              <table class="table table-middle table-center table-condensed table-bordered table-hover dataTable">
                <tbody class="ui-sortable">
                  <tr v-for="option in options" :key="option.id">
                    <td class="table-sort-handler"></td>
                    <td>
                      <input type="text" class="form-control" :id="`option-${option.id}-${activeLanguageCode}`" v-model="option.i18[activeLanguageCode].value" :name="`options.${option.id}.i18.${activeLanguageCode}.title`" v-validate="'required|max:255'">
                      <span v-show="formErrors.has(`options.${option.id}.i18.${activeLanguageCode}.title`)" class="help-block">{{ formErrors.first(`options.${option.id}.i18.${activeLanguageCode}.title`) }}</span>
                    </td>
                    <td class="text-center" style="width:75px">
                      <toggle @change="changeOptionStatus(option)" :checked="option.enabled"></toggle>
                    </td>
                    <td class="text-center" style="width:75px">
                      <a href="javascript:void(0)" data-toggle="tooltip" title="Удалить" class="btn btn-danger" @click="removeOption(option)"><i class="fa fa-times"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
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
      title="Удаление аттрибута"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить аттрибут?
    </b-modal>
  </div>
</template>


