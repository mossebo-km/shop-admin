<script>
  import {ErrorBag} from 'vee-validate'

  import Core from '../../core'

  import TreeSelectTranslatable from '../TreeSelectTranslatable'
  import Loading from '../Loading'

  import DataHandler from '../../mixins/DataHandler'

  import OptionSelectModel from '../../resources/OptionSelectModel'

  export default {
    name: "attributes-select",

    components: {
      TreeSelectTranslatable,
      Loading
    },

    props: {
      attributes: {
        type: Array,
        default: () => []
      },
      selectedAttributes: {
        type: Array,
        default: () => []
      },
      selectedOptions: {
        type: Array,
        default: () => []
      },
      languages: {
        type: Array,
        default: () => []
      },
      activeLanguageCode: {
        type: String
      },
      errors: {
        type: ErrorBag,
        default: () => new ErrorBag()
      },
    },

    mixins: [
      DataHandler
    ],

    watch: {
      attributes: 'initAttributes'
    },

    data() {
      return {
        selectedAttributesIds: [],
        innerAttributes: [],
      }
    },

    methods: {
      getAttributes() {
        return this.innerAttributes
      },

      initAttributes() {
        this.innerAttributes = [
          ... this.attributes
        ]

        this.selectedAttributes.forEach(id => {
          this.toSelected(id)
        })
      },

      add() {
        this.toSelected(this.$refs.attributesSelect.getSelected())
      },

      toSelected(attributeId) {
        if (! attributeId) return

        let attribute = this.getAvailableAttributeById(attributeId)

        if (! attribute) return

        this.fetchOptions(attribute)

        this.selectedAttributesIds = [
          ... this.selectedAttributesIds,
          attribute.id
        ]
      },

      getAvailableAttributeById(id) {
        return this.available.find(item => {
          return item.id.toString() === id.toString()
        })
      },

      get(id) {
        return this.innerAttributes.find(item => item.id === id)
      },

      remove(id) {
        this.selectedAttributesIds = this.selectedAttributesIds.filter(selectedId => selectedId !== id)
      },

      fetchOptions(attribute) {
        if (attribute.options || attribute.request) return

        attribute.request = new Core.requestHandler('get', `/api/shop/attributes/${attribute.id}/options`)
          .any(() => {
            delete attribute.request
          })
          .success(response => {
            let selectedOptions = []
            let options = this.getSortedData(response.data.options)
              .map(item => {
                if (this.selectedOptions.indexOf(item.id) !== -1) {
                  selectedOptions.push(item.id)
                }

                return new OptionSelectModel(item, this.languages)
              })

            this.updateAttribute(attribute, {
              options,
              selected: selectedOptions
            })
          })
          .start()
      },

      getOptionsSelectParams(attribute) {
        return {
          tags: true,
          closeOnSelect: false,
          events: {
            selecting: (e) => {
              let {id, text} = e.params.args.data

              if (id !== text) return

              if (! attribute.options.find(item => item.id === id)) {
                e.preventDefault()

                let option = {
                  id: Core.uniqueId(),
                  isNew: true,
                  i18: {}
                }

                this.languages.forEach(language => {
                  option.i18[language.code] = {
                    title: text
                  }
                })

                this.updateAttribute(attribute, {
                  options: [
                    ... attribute.options,
                    option
                  ],
                  selected: [
                    ... attribute.selected,
                    option.id
                  ]
                })
              }
            }
          }
        }
      },

      updateAttribute(attribute, data) {
        this.innerAttributes = this.innerAttributes.map(item => {
          if (item.id === attribute.id) {
            return {
              ... attribute,
              ... data
            }
          }

          return item
        })
      }
    },

    computed: {
      available() {
        return this.innerAttributes.filter(item => ! this.selectedAttributesIds.find(id => id === item.id))
      },

      selected() {
        return this.innerAttributes.filter(item => this.selectedAttributesIds.find(id => id === item.id))
      }
    },

    created() {
      this.initAttributes()
    }
  }
</script>

<template>
  <div class="form-horizontal form-bordered">

    <div class="form-group">
      <label class="col-md-3 control-label">Добавить</label>
      <div class="col-md-9">
        <div class="input-group">
          <tree-select-translatable ref="attributesSelect" :options="available" placeholder="Выберите аттрибут" :activeLanguageCode="activeLanguageCode"></tree-select-translatable>
          <a class="input-group-addon btn btn-primary" @click="add">
            <i class="fa fa-plus-circle"></i>
          </a>
        </div>
      </div>
    </div>

    <div :class="`form-group${errors.has(`attributes.${attribute.id}`) ? ' has-error' : ''}`" v-for="attribute in selected">
        <loading :loading="!! attribute.request" style="min-height: 36px;">
        <label class="col-md-3 control-label" :for="`attribute-${attribute.id}`">{{attribute.i18[activeLanguageCode].title}}</label>
        <div class="col-md-9">
          <div class="clearfix">
            <div class="pull-left" style="width:calc(100% - 47px)">
              <template v-if="!attribute.request">
                <tree-select-translatable
                  :id="`attribute-${attribute.id}`"
                  :options="attribute.options"
                  :selected.sync="attribute.selected"
                  :multiple="true"
                  placeholder="Выберите значения"
                  :activeLanguageCode="activeLanguageCode"
                  :params="getOptionsSelectParams(attribute)"
                />
              </template>

              <template v-else>
                <input type="text" class="form-control">
              </template>
            </div>

            <a class="btn btn-danger pull-right" @click="remove(attribute.id)" style="margin:0;"><i class="fa fa-times"></i></a>
          </div>

          <span v-show="errors.has(`attributes.${attribute.id}`)" class="help-block">{{ errors.first(`attributes.${attribute.id}`) }}</span>
        </div>
      </loading>
    </div>

  </div>
</template>