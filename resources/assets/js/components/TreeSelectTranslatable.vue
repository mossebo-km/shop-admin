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
    ],

    components: {
      TreeSelect
    },

    data() {
      return {
        tselected: this.selected
      }
    },

    watch: {
      tselected: 'updateSelected'
    },

    methods: {
      updateSelected() {
        this.$emit('update:selected', this.tselected)
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
    }
  }
</script>

<template>
  <tree-select
    :options="translatedOptions"
    :selected.sync="tselected"
    :placeholder="placeholder"
    :disabled="disabled"
    :multiple="multiple" />
</template>