<script>
import 'select2-bootstrap-theme/dist/select2-bootstrap.css'
  export default {
    name: 'tree-select',

    props: [
      'options',
      'selected',
      'placeholder',
      'disabled',
      'multiple'
    ],

    data() {
      return {
        rSelected: this.multiple ? this.selected.map(item => item.toString()) : this.selected
      }
    },

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

        return build(options);
      },

      formatOption(state) {
        if (!state.id) return state.text
        return state.text.replace('—', '').trim();
      }
    },

    mounted() {
      const $el = $(this.$el)

      $el.select2({
        placeholder: this.placeholder,
        theme: "bootstrap",
        templateSelection: this.formatOption
      })

      $el.on('select2:select', e => {
        if (this.multiple) {
          this.rSelected.push(e.params.data.id)
        }
        else {
          this.rSelected = e.params.data.id
        }

        this.$emit('update:selected', this.rSelected)
      })

      $el.on('select2:unselect', e => {
        if (this.multiple) {
          let index = this.rSelected.indexOf(e.params.data.id)

          if (index !== -1) {
            this.rSelected.splice(index, 1)
          }
        }
        else {
          this.rSelected = null
        }

        console.log(this.rSelected)

        this.$emit('update:selected', this.rSelected)
      })

      $el.val(this.selected)
      $el.trigger('change')
    },

    beforeDestroy() {
      $(this.$el).select2('destroy')
    }
  }
</script>

<template>
  <select class="select2" :multiple="multiple" v-html="buildCategorySelect()" style="width:100%"></select>
</template>