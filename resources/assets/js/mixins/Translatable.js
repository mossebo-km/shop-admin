export default {
  // data() {
  //   return [
  //     languages: []
  //   ]
  // },

  methods: {
    translatesSwitcherHasError() {
      let errors = this.errors.items

      for (let j = 0; j < this.languages.length; j ++) {
        let code = this.languages[j].code
        for (let i = 0; i < errors.length; i++) {
          if (errors[i].field.indexOf(`i18.${code}`)) {
            return true
          }
        }
      }

      return false
    },
  }
}