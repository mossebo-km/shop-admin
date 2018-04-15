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
        rSelected: this.initSelected(),
        buildedOptions: []
      }
    },

    watch: {
      'options': 'reset'
    },

    methods: {
      initSelected() {
        if (this.multiple && this.selected instanceof Array) {
          return this.selected.map(item => item.toString())
        }

        return this.selected
      },

      buildOptions () {
        if (! this.options) {
          return ''
        }

        let disabled = this.disabled || []

        if (! (disabled instanceof Array)) {
          disabled = [disabled]
        }

        disabled = disabled.map(item => item.toString())

        const build = (list = [], level = 0, parentId = 0, acc) => {
          if (! list.length) return false

          return list.reduce((acc, item) => {
            let itemDisabled = false

            if (disabled.indexOf(item.id.toString()) !== -1) {
              itemDisabled = true
            }
            else if (disabled.indexOf(parentId.toString()) !== -1) {
              itemDisabled = true
              disabled.push(item.id.toString())
            }

            let pad = ('').padStart(level, '—')

            if (pad) {
              pad += ' '
            }

            acc.push({
              id: item.id,
              disabled: itemDisabled,
              title: pad + item.title,
              selected: this.isSelected(item.id)
            })

            build(item.sub, level + 1, item.id, acc)

            return acc
          }, acc || [])
        }

        this.buildedOptions = build(this.options) || []
      },

      isSelected(id) {
        if (this.selected instanceof Array) {
          return this.selected.indexOf(id) !== -1
        }

        return id === this.selected
      },

      formatOption(state) {
        if (!state.id) return state.text
        return state.text.replace('—', '').trim()
      },

      select() {
        this.$$el.val(this.selected)
        this.$$el.trigger('change')
      },

      reset() {
        this.buildOptions()

        this.$$el.val('')
        this.$$el.trigger('change')
        this.$$el.select2('destroy')

        this.initSelect2()
        this.$nextTick(() => this.select())
      },

      initSelect2() {
        this.$$el = $(this.$el)

        this.$$el.select2({
          allowClear: true,
          placeholder: this.placeholder,
          theme: "bootstrap",
          templateSelection: this.formatOption
        })
      }
    },

    created() {
      this.buildOptions()
    },

    mounted() {
      this.initSelect2()

      this.$$el.select2({
        allowClear: true,
        placeholder: this.placeholder,
        theme: "bootstrap",
        templateSelection: this.formatOption
      })

      this.$$el.on('select2:select', e => {
        if (this.multiple) {
          this.rSelected.push(e.params.data.id)
        }
        else {
          this.rSelected = e.params.data.id
        }

        this.$emit('update:selected', this.rSelected)
      })

      this.$$el.on('select2:unselect', e => {
        if (this.multiple) {
          let index = this.rSelected.indexOf(e.params.data.id)

          if (index !== -1) {
            this.rSelected.splice(index, 1)
          }
        }
        else {
          this.rSelected = null
        }

        this.$emit('update:selected', this.rSelected)
      })

      this.select()
    },

    beforeDestroy() {
      $(this.$$el).select2('destroy')
    }
  }
</script>

<template>
  <select class="select2" :multiple="multiple" style="width:100%">
    <option v-for="option in buildedOptions" :value="option.id" :disabled="option.disabled" :selected="option.selected">{{ option.title }}</option>
  </select>
</template>