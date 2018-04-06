export default {
  data() {
    return {
      languages: [],
      activeLanguageCode: null,
      defaultTranslatableFieldsValues: {}
    }
  },

  methods: {
    initLanguages(languages) {
      this.languages = languages.filter(language => {
        if (language.default) {
          this.activeLanguageCode = language.code
        }

        return language.enabled
      }).sort((a, b) => a.position - b.position)
    },

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

    initI18(data = []) {
      let result = {}

      this.languages.forEach(language => {
        let existing = data.find(item => language.code === item.language_code) || {}

        result[language.code] = {
          title: existing.title || ''
        }
      })

      return result
    }
  }
}