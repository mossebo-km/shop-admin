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
              title: item.i18[this.activeLanguageCode].title
            }

            if (item.sub) {
              res.sub = build(item.sub)
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