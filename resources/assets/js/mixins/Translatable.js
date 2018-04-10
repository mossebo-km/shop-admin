import Core from '../core'

export default {
  data() {
    return {
      languages: [],
      activeLanguageCode: null,
      defaultTranslatableFieldsValues: {}
    }
  },

  methods: {
    /**
     * Инициализация языков.
     *
     * @param languages
     */
    initLanguages(languages) {
      this.languages = languages.filter(language => {
        if (language.default) {
          this.activeLanguageCode = language.code
        }

        return language.enabled
      }).sort((a, b) => a.position - b.position)
    },

    /**
     * Поля переводов имеют ошибку.
     *
     * @returns {boolean}
     */
    formTranslatesHasError() {
      let errors = this.formErrors.items

      for (let j = 0; j < this.languages.length; j ++) {
        let code = this.languages[j].code
        for (let i = 0; i < errors.length; i++) {
          if (errors[i].field.indexOf(`i18.${code}`) !== -1) {
            return true
          }
        }
      }

      return false
    },

    /**
     * Инициализация переводов.
     *
     * @param data
     */
    initI18(data = []) {
      return this.combineI18DataWithDefault(this.languages, data, this.defaultTranslatableFieldsValues)
    },

    /**
     * Формирует набор перевод, заполняя переданными данными, либо, если их нет, данными по-умолчанию
     *
     * @param languages
     * @param dataBundle
     * @param defaultData
     * @returns {*}
     */
    combineI18DataWithDefault(languages, dataBundle = [], defaultData = {}) {
      return languages.reduce((acc, language) => {
        let existing = dataBundle.find(item => language.code === item.language_code) || {}

        acc[language.code] = Core.combineDataWithDefault(existing, defaultData)

        return acc
      }, {})
    }
  }
}