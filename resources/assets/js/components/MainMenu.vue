<script>
  export default {
    name: "main-menu",

    render(createElement) {
      let keyCounter = 0
      let slots = this.$slots.default.map(item => {
        let isActive = (item.data && item.data.attrs && item.data.attrs.href ? window.location.pathname.indexOf(item.data.attrs.href) !== -1  : false)

        return createElement(
            'li',
            {
              class: isActive ? 'active' : '',
              key: item.id || item.code || keyCounter++
            },
            [item]
          )
      })

      return createElement(
        'ul',
        slots
      )
    }
  }
</script>