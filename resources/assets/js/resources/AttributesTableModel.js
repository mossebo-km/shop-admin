import Schema from './Schema'
import SchemaI18 from './SchemaI18'

const schema = {
  id: '',
  enabled: true,

  url(data) {
    return '/shop/attributes/' + data.id
  },
}

const i18Schema = {
  title: '',
}

export default class AttributesTableModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18: (new SchemaI18(i18Schema)).combine(entityData.i18, languages),
    }
  }
}