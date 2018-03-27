export default {
  methods: {



    /*
      Установка ошибок валидации, пришедших с сервера
      todo: собрать миксин валидации?
    */

    setValidationErrors(errors = {}) {
      for (let fieldName in errors) {
        if (this.errors.has(fieldName)) {
          this.errors.remove(fieldName)
        }

        this.errors.add(fieldName, errors[fieldName])
      }
    },
  }
}