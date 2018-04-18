<script>
  import TreeSelect from './TreeSelect'

  export default {
    name: "tree-select-translatable",

    props: [
      'options',
      'selected',
      'placeholder',
      'disabled',
      'multiple',
      'activeLanguageCode',
      'params'
    ],

    components: {
      TreeSelect
    },

    methods: {
      getSelected() {
        return this.$refs.treeSelect.rSelected
      }
    },

    computed: {
      translatedOptions() {
        let build = tree => {
          return tree.map(item => {
            let res = {
              ... item,
              title: item.i18n[this.activeLanguageCode].title
            }

            if (item.children) {
              res.children = build(item.children)
            }

            return res
          })
        }

        return build(this.options || [])
      }
    },

    mounted() {
      this.$refs.treeSelect.$on('update:selected', (selected) => {
        this.$emit('update:selected', selected)
      })
    }
  }
</script>

<template>
  <tree-select
    ref="treeSelect"
    :options="translatedOptions"
    :selected="selected"
    :placeholder="placeholder"
    :disabled="disabled"
    :multiple="multiple"
    :params="params" />
</template>