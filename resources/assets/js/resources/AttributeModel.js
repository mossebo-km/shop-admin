import Schema from './Schema'
import SchemaI18 from './SchemaI18'

const schema = {
  layout_class: '',
  selectable: false,
  enabled: true,
}

const i18Schema = {
  title: '',
}

export default class ProductModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18: (new SchemaI18(i18Schema)).combine(entityData.i18, languages),
    }
  }
}