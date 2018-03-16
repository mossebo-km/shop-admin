<script>
  export default {
    name: 'tree-select',
    props: ['options', 'activeOption', 'placeholder', 'disabled'],
    methods: {
      buildCategorySelect() {
        if (! this.options) {
          return ''
        }

        let disabledItemsIds = [];

        if (this.disabled) {
          if (this.disabled instanceof Array) {
            disabledItemsIds = [
              ... this.disabled
            ]
          }
          else {
            disabledItemsIds.push(this.disabled)
          }
        }

        const build = (list, level = 0, parentId = 0) => {
          if (! list) return ''

          return list.reduce((accumulator, item) => {
            let itemDisabled = false

            if (disabledItemsIds.indexOf(item.id) !== -1) {
              itemDisabled = true
            }
            else if (disabledItemsIds.indexOf(parentId) !== -1) {
              itemDisabled = true
              disabledItemsIds.push(item.id)
            }

            let pad = ('').padStart(level, '—')

            if (pad) {
              pad += ' '
            }

            return accumulator + `<option value="${item.id}"${itemDisabled ? ' disabled' : ''}>${pad + item.title}</option>` + build(item.sub, level + 1, item.id)
          }, '')
        }

        let options = [... this.options]

        if (this.placeholder) {
          options.unshift({
            id: 0,
            title: this.placeholder
          })
        }

        return build(options);
      },
    },

    mounted() {
      const $el = $(this.$el)
      $el.select2()
      $el.on('select2:select', e => {
        this.$emit('update:activeOption', e.params.data.id)
      })

      $el.val(this.activeOption)
      $el.trigger('change')
    },

    beforeDestroy() {
      $(this.$el).select2('destroy')
    }
  }
</script>

<template>
  <select class="select2" v-html="buildCategorySelect()" style="width:100%"></select>
</template>