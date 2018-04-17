<script>
  import 'select2-bootstrap-theme/dist/select2-bootstrap.css'

  export default {
    name: 'tree-select',

    props: [
      'options',
      'selected',
      'placeholder',
      'disabled',
      'multiple',
      'params',
    ],

    data() {
      return {
        rSelected: null,
        buildedOptions: []
      }
    },

    watch: {
      'options': 'reset',
      'selected': 'reset',
    },

    methods: {
      getSelected() {
        let findEnabledOption = (id) => {
          return (this.buildedOptions || []).find(item => {
            if (! id) return false

            return item.id === id.toString() && !item.disabled
          })
        }

        if (this.multiple) {
          if (this.selected instanceof Array) {
            return this.selected.filter(id => findEnabledOption(id))
          }

          return findEnabledOption(this.selected) ? [this.selected] : []
        }

        return findEnabledOption(this.selected) ? this.selected : undefined
      },

      buildOptions () {
        if (! this.options) {
          return
        }

        let disabled = this.disabled || []

        if (! (disabled instanceof Array)) {
          disabled = [disabled]
        }

        disabled = disabled.map(id => id.toString())

        const build = (list = [], level = 0, parentId = 0, acc) => {
          if (! list.length) return false

          return list.reduce((acc, item) => {
            let itemDisabled = false
            let itemId = item.id.toString()

            if (disabled.indexOf(itemId) !== -1) {
              itemDisabled = true
            }
            else if (disabled.indexOf(parentId.toString()) !== -1) {
              itemDisabled = true
              disabled.push(itemId)
            }

            let pad = ('').padStart(level, '—')

            if (pad) {
              pad += ' '
            }

            acc.push({
              id: itemId,
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
        if (typeof this.selected === 'undefined' || this.selected === null) return false

        if (this.selected instanceof Array) {
          return this.selected.indexOf(id) !== -1
        }

        return id.toString() === this.selected.toString()
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
        this.setSelected(this.getSelected(), false)

        this.$$el.select2('destroy')
        this.$$el.off()
        this.$$el.val('')
        this.$$el.trigger('change')

        this.initSelect2()
        this.$nextTick(() => this.select())
      },

      setSelected(selected, needToEmit = true) {
        this.rSelected = selected

        if (needToEmit) {
          this.$emit('update:selected', this.rSelected)
        }
      },

      initSelect2() {
        this.$$el = $(this.$el)

        let params = {
          ... this.params
        }

        this.$$el.select2({
          allowClear: true,
          placeholder: this.placeholder,
          theme: "bootstrap",
          templateSelection: this.formatOption,
          ... params
        })

        this.bindSelect2Events()
      },

      bindSelect2Events() {
        this.$$el.on('select2:select', e => {
          if (this.multiple) {
            this.setSelected([
              ... this.rSelected,
              e.params.data.id
            ])
          }
          else {
            this.setSelected(e.params.data.id)
          }
        })

        this.$$el.on('select2:unselect', e => {
          if (this.multiple) {
            this.setSelected(this.rSelected.filter(id => id.toString() !== e.params.data.id.toString()))
          }
          else {
            this.setSelected()
          }
        })

        if (this.params && this.params.events) {
          let events = this.params.events

          for (let name in events) {
            this.$$el.on(`select2:${name}`, events[name])
          }
        }
      }
    },

    created() {
      this.buildOptions()
      this.setSelected(this.getSelected(), false)
    },

    mounted() {
      this.initSelect2()
      this.$nextTick(() => this.select())
    },

    beforeDestroy() {
      this.$$el.select2('destroy')
    }
  }
</script>

<template>
  <select class="select2" :multiple="multiple" style="width:100%">
    <option v-for="option in buildedOptions" :value="option.id" :disabled="option.disabled" :selected="option.selected">{{ option.title }}</option>
  </select>
</template>