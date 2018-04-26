import ModelI18n from './Base/ModelI18n'

export default class AttributeModel extends ModelI18n {
  getSchemaFields() {
    return {
      layout_class: '',
      selectable: false,
      enabled: true,
      i18n: {
        title: '',
      }
    }
  }
}