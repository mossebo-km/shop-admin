import Schema from './Schema'
import SchemaI18 from './SchemaI18'

const schema = {
  id: '',
  parent_id: '',
  enabled: true,
}

const i18Schema = {
  title: '',
}

export default class CategoriesTreeSelectModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18: (new SchemaI18(i18Schema)).combine(entityData.i18, languages),
    }
  }
}