import ModelI18n from './Base/ModelI18n'

export default class PriceTypeDataModel extends ModelI18n {
  getSchemaFields() {
    return {
      id: '',

      i18n: {
        title: '',
        description: ''
      }
    }
  }
}