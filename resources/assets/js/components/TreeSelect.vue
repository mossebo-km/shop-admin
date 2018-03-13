<script>
  export default {
    name: 'tree-select',
    props: ['options', 'activeOption'],
    methods: {
      buildCategorySelect() {
        const build = (list, level = 0) => {
          if (! list) return ''

          return list.reduce((accumulator, item) => {
            let pad = ('').padStart(level, '—')

            if (pad) {
              pad += ' '
            }

            return accumulator + `<option value="${item.id}"${this.activeOption === item.id ? ' checked' : ''}>${pad + item.title}</option>` + build(item.sub, level + 1)
          }, '')
        }

        return build(this.options);
      },
    },
    mounted() {
      const $el = $(this.$el)
      $el.select2()
      $el.on('select2:select', e => {
        this.$emit('update:activeOption', e.params.data.id)
      })
    }
  }
</script>

<template>
  <select class="select2" v-html="buildCategorySelect()" style="width:100%">
  </select>
</template>

