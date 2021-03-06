<script>
  import EntityPage from '../../../mixins/EntityPage'
  import Translatable from '../../../mixins/Translatable'
  import Sortable from '../../../mixins/Sortable'

  import bModal from 'bootstrap-vue/es/components/modal/modal'
  import LanguagePicker from '../../LanguagePicker'
  import LanguageIdentif from '../../LanguageIdentif'
  import Toggle from '../../Toggle'

  import AttributeModel from '../../../resources/shop/AttributeModel'
  import OptionModel from '../../../resources/shop/OptionModel'


  export default {
    name: "attribute-edit",

    mixins: [
      EntityPage,
      Sortable,
      Translatable,
    ],

    components: {
      LanguagePicker,
      LanguageIdentif,
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
        validationErrors: [],

        usedMainData: [
          'languages',
        ],

        sortableParams: {
          items: '.js-sort-item',
          handle: '.js-sort-handler',
          opacity: 0.9,
          start: function(e, helper) {
            let height = helper.item.height()
            helper.placeholder.css({
              height,
              visibility: 'visible'
            })
          },
          stop: this.htmlOptionPositionChanged,
        }
      }
    },

    methods: {
      /**
       * Инициализация модели данных.
       */
      initEntity(data) {
        this.setEntityData(new AttributeModel(data, this.languages))

        if (this.type === 'edit') {
          this.initOptions(data.options)
        }
      },

      initOptions(data = []) {
        this.options = this.sortOptions(data.map(item => this.makeOption(item)))
      },

      getToSaveData() {
        return {
          ... this.getEntityModel(),
          options: this.getToSaveOptions()
        }
      },

      getToSaveOptions() {
        return this.options.reduce((acc, option) => {
          if (option.deleted) {
            return acc
          }

          let item = {
            position: option.position,
            enabled: option.enabled,
            i18n: option.i18n
          }

          if (option.isNew) {
            item.isNew = 1
          }

          acc[option.id] = item

          return acc
        }, {})
      },

      addOption() {
        this.options = this.sortOptions([
          ... this.options,
          this.makeOption()
        ])
      },

      makeOption(data = {}) {
        let option = new OptionModel(data, this.languages)

        if (data.id) {
          option.isNew = false
        }
        else {
          option.isNew = true
          option.position = this.findLastOptionPosition() + 1
        }

        return option
      },

      findLastOptionPosition() {
        return this.options.reduce((acc, {position}) =>{
          return position > acc ? position : acc
        }, 0)
      },

      removeOption(option) {
        if (option.isNew) {
          this.options = this.options.filter(item => item.id !== option.id)
          return
        }

        this.updateOption(option, {
          deleted: true
        })

        this.getInitializedSortEls().disableSelection();
      },

      restoreOption(option) {
        this.updateOption(option, {
          deleted: false
        })
      },

      changeOptionStatus(option) {
        this.updateOption(option, {
          enabled: !option.enabled
        })
      },

      updateOption(option, data) {
        option = {
          ... option,
          ... data
        }

        let options = this.options.map(item => {
          return option.id === item.id ? option : item
        })

        this.options = this.sortOptions(options)
      },

      htmlOptionPositionChanged() {
        this.options = this.sortOptions(this.setDataBundlePositionsByIds(this.options, this.collectSortIds()))
      },

      sortOptions(options) {
        return this.sortByPositionAndDeletedToEnd(options)
      },

      sortByPositionAndDeletedToEnd(data) {
        return data.sort((a, b) => {
          if (!a.deleted === !b.deleted) {
            return a.position - b.position
          }

          return a.deleted ? 1 : -1
        })
      }
    },
  }
</script>

<template>
  <div>
    <div class="block full">
      <div class="block-title clearfix" v-if="type === 'create'">
        <h1>
          <strong>
            Создание аттрибута
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

          <a v-if="userCan('attributes.create')" class="btn btn-sm btn-success active" @click="save">
            <i class="fa fa-plus-circle"></i> Создать
          </a>
        </div>
      </div>

      <div class="block-title clearfix" v-if="type === 'edit'">
        <h1>
          <strong>
            Редактирование аттрибута #{{ this.id }}
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

          <a v-if="userCan('attributes.save')" class="btn btn-sm btn-primary active" @click="save">
            <i class="fa fa-floppy-o"></i> Сохранить
          </a>

          <a v-if="userCan('attributes.delete')" class="btn btn-sm btn-danger active" @click="remove">
            Удалить
          </a>
        </div>
      </div>

      <div class="row" v-if="attribute">

        <div class="col-xl-6">

          <div :class="`block${langSwitchHovered ? ' block-illuminated' : ''}`">
            <div class="block-title clearfix">
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
                      v-model="attribute.i18n[language.code].title"
                      :name="`i18n.${language.code}.title`"
                      v-validate="'required|max:255'">

                    <span v-show="formErrors.has(`i18n.${language.code}.title`)" class="help-block">
                      {{ formErrors.first(`i18n.${language.code}.title`) }}
                    </span>
                  </div>
                </div>

              </div>
            </template>

          </div>


          <div class="block">
            <div class="block-title">
              <h2>
                <i class="fa fa-pencil"></i> <strong>Основная</strong> информация
              </h2>
            </div>

            <div class="form-horizontal form-bordered">

              <div :class="`form-group${formErrors.has('enabled') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label">
                  Опубликовано
                </label>

                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" v-model="attribute.enabled">
                    <span></span>
                  </label>

                  <span v-show="formErrors.has('enabled')" class="help-block">
                    {{ formErrors.first('enabled') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('selectable') ? ' has-error' : ''}`" v-if="userCan('attributes.edit-hidden-params')">
                <label class="col-md-3 control-label">
                  Выбираемый
                </label>

                <div class="col-md-9">
                  <label class="switch switch-primary">
                    <input type="checkbox" v-model="attribute.selectable">
                    <span></span>
                  </label>

                  <span v-show="formErrors.has('selectable')" class="help-block">
                    {{ formErrors.first('selectable') }}
                  </span>

                  <span class="help-block">
                    * Дает возможность выбирать аттрибут покупателю в карточке товара.
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('slug') ? ' has-error' : ''}`" v-if="userCan('attributes.edit-hidden-params')">
                <label class="col-md-3 control-label" for="slug">
                  Класс в верстке
                </label>

                <div class="col-md-9">
                  <input
                    type="text"
                    id="slug"
                    class="form-control"
                    v-model="attribute.layout_class"
                    name="slug"
                    v-validate="'max:255'">

                  <span v-show="formErrors.has('layout_class')" class="help-block">
                    {{ formErrors.first('layout_class') }}
                  </span>
                </div>
              </div>

              <div class="form-group" v-if="attribute.created_at">
                <label class="col-md-3 control-label">
                  Дата создания
                </label>

                <div class="col-md-9">
                  <p class="form-control-static">
                    {{ attribute.created_at }}
                  </p>
                </div>
              </div>

              <div class="form-group" v-if="attribute.updated_at">
                <label class="col-md-3 control-label">
                  Последнее изменение
                </label>

                <div class="col-md-9">
                  <p class="form-control-static">
                    {{ attribute.updated_at }}
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-xl-6">
          <div :class="`block${langSwitchHovered ? ' block-illuminated' : ''}`">
            <div class="block-title clearfix">
              <h2>
                <i class="fa fa-list"></i> <strong>Значения</strong>
              </h2>

              <div class="block-title-control">
                <a class="btn btn-sm btn-primary active" @click="addOption">
                  <i class="fa fa-plus-circle"></i> Добавить
                </a>
              </div>
            </div>

            <div class="block-section table-responsive">
              <table class="table table-middle table-center table-condensed table-bordered table-hover dataTable table-sortable table-remove-restore">
                <tbody class="ui-sortable">
                  <tr v-for="option in options" :key="option.id" :class="{'js-sort-item': !option.deleted, 'table-remove-restore__deleted': option.deleted}">
                    <td :class="{'table-sort-handler': true, 'js-sort-handler': !option.deleted}">
                      <span>
                        <input type="hidden" name="ids" :value="option.id">
                      </span>
                    </td>

                    <td style="width: 100%">
                      <template v-for="language in languages">
                        <div :class="{'has-error': formErrors.has(`options.${option.id}.i18n.${language.code}.value`), 'in-space': activeLanguageCode !== language.code}" :key="language.code">
                          <input
                            type="text"
                            class="form-control"
                            :id="`option-${option.id}-${language.code}`"
                            v-model="option.i18n[language.code].value"
                            :name="`options.${option.id}.i18n.${language.code}.value`"
                            v-validate="'required|max:255'" />

                          <span v-show="formErrors.has(`options.${option.id}.i18n.${language.code}.value`)" class="help-block" style="margin-bottom: 0;">
                            {{ formErrors.first(`options.${option.id}.i18n.${language.code}.value`) }}
                          </span>
                        </div>
                      </template>
                    </td>

                    <td>
                      <div class="table-control table-remove-restore__restore">
                        <toggle @change="changeOptionStatus(option)" :checked="option.enabled"></toggle>
                      </div>
                    </td>

                    <td>
                      <div>
                        <div v-if="option.isNew || userCan('attributes.remove-option')">
                          <a v-if="!option.deleted" class="btn btn-danger" @click="removeOption(option)">
                            <i class="fa fa-times"></i>
                          </a>

                          <a v-else class="btn btn-success table-remove-restore__restore" @click="restoreOption(option)">
                            <i class="fa fa-repeat"></i>
                          </a>
                        </div>
                      </div>
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

      Вы действительно хотите удалить этот аттрибут?
    </b-modal>
  </div>
</template>


