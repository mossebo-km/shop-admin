<script>
  import Core from '../core'
  import AxajMultiselectModel from '../resources/AxajMultiselectModel'
  import TreeSelectTranslatable from './TreeSelectTranslatable'

  export default {
    name: 'AjaxMultiselect',

    props: [
      'url',
      'languages',
      'activeLanguageCode',
      'selected',
      'options',
      'linkUrlMaker'
    ],

    components: {
      TreeSelectTranslatable
    },

    watch: {
      options: 'updateOptions'
    },

    data() {
      return {
        request: null,
        options$: this.mapOptions(this.options || []),
        params: {
          ajax: {
            delay: 500,
            data: function (params) {
              return {
                q: params.term,
              };
            },

            transport: (params, success) => {
              if (this.request) {
                this.request.abort()
              }

              this.request = new Core.requestHandler('get', this.url, params.data)
                .success(success)
                .any(() => {
                  this.request = null
                })
                .start()
            },

            processResults: (response) => {
              return {
                results: this.mapOptions(response.data.result).map(option => ({
                  id: option.id,
                  text: option.i18n[this.activeLanguageCode].title,
                  option
                })),
                pagination: {
                  more: false
                }
              }
            },
          },

          templateSelection: option => {
            if (typeof this.linkUrlMaker === 'function') {
              return this.linkUrlMaker(option)
            }

            return option.text
          },

          events: {
            selecting: e => {
              e.preventDefault()
              let option = e.params.args.data.option

              if (option) {
                if (! this.options$.find(o => o.id === option.id)) {
                  this.options$.push(option)
                  this.$emit('update:selected', [
                    ... this.selected,
                    option.id
                  ])
                }
              }
            }
          }
        }
      }
    },

    methods: {
      updateOptions() {
        this.options$ = this.mapOptions(this.options)
      },

      mapOptions(data) {
        return data.map(item => new AxajMultiselectModel(item, this.languages))
      },
    },

    mounted() {
      ;(['update:selected']).forEach(eventName => {
        this.$refs.treeSelect.$on(eventName, data => {
          this.$emit(eventName, data)
        })
      })
    }
  }
</script>

<template>
  <tree-select-translatable
    ref="treeSelect"
    :languages="languages"
    :activeLanguageCode="activeLanguageCode"
    :options="options$"
    :selected="selected"
    :params="params"
    :multiple="true"
    placeholder="Поиск"
  ></tree-select-translatable>
</template>