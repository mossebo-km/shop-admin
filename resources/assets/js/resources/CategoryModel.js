import Schema from './Schema'
import SchemaI18 from './SchemaI18'

const schema = {
  parent_id: '',
  slug: '',
  enabled: true,

  created_at: null,
  updated_at: null,
}

const i18Schema = {
  title: '',
  description: '',
  meta_title: '',
  meta_description: ''
}

export default class CategoryModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18: (new SchemaI18(i18Schema)).combine(entityData.i18, languages),
    }
  }
}