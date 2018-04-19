import Schema from './Schema'
import Schemai18n from './Schemai18n'

const schema = {
  parent_id: '',
  slug: '',
  enabled: true,

  created_at: null,
  updated_at: null,
}

const i18nSchema = {
  title: '',
  description: '',
  meta_title: '',
  meta_description: ''
}

export default class CategoryModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18n: (new Schemai18n(i18nSchema)).combine(entityData.i18n, languages),
    }
  }
}