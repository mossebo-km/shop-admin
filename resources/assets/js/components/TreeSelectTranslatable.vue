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

    data() {
      return {
        translatedOptions: []
      }
    },

    watch: {
      activeLanguageCode: 'hardReset'
    },

    components: {
      TreeSelect
    },

    methods: {
      getSelected() {
        return this.$refs.treeSelect.rSelected
      },

      hardReset() {
        this.$refs.treeSelect.destroy()
        this.translateOptions()

        this.$nextTick(() => {
          this.$refs.treeSelect.initOptions()
          this.$refs.treeSelect.initSelect2()
        })
      },

      translateOptions() {
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

        this.translatedOptions = build(this.options || [])
      }
    },

    created() {
      this.translateOptions()
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