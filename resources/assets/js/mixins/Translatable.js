import Core from '../core'

export default {
  data() {
    return {
      languages: [],
      activeLanguageCode: null,
    }
  },

  methods: {
    /**
     * Инициализация языков.
     *
     * @param languages
     */
    initLanguages(languages) {
      let defaultLanguageCode = false
      let stageLanguageCode = Core.stageHandler.get('dataLanguageCode')

      this.languages = languages.filter(language => {
        if (language.default) {
          defaultLanguageCode = language.code
        }

        if (language.code === stageLanguageCode) {
          this.activeLanguageCode = language.code
        }

        return language.enabled
      }).sort((a, b) => a.position - b.position)

      if (! this.activeLanguageCode) {
        this.activeLanguageCode = defaultLanguageCode
      }
    },

    /**
     * Поля переводов имеют ошибку.
     *
     * @returns {boolean}
     */
    formTranslatesHasError() {
      let errors = this.formErrors.items

      for (let i = 0; i < errors.length; i++) {
        if (errors[i].field.indexOf(`i18.`) !== -1) {
          return true
        }
      }

      return false
    },
  },

  computed: {
    langSwitchHovered() {
      if (this.$refs.langSwitch && this.$refs.langSwitch.hovered) {
        return true
      }

      return false
    },
  }
}