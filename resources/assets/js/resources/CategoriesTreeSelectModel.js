import Schema from './Schema'
import Schemai18n from './Schemai18n'

let langs

const schema = {
  id: '',
  parent_id: '',
  enabled: true,

  children(data) {
    if (data.children && data.children instanceof Array && data.children.length > 0)   {
      return data.children.map(item => new CategoriesTreeSelectModel(item, langs))
    }
  }
}

const i18nSchema = {
  title: '',
}

export default class CategoriesTreeSelectModel {
  constructor(entityData, languages) {
    langs = languages

    return {
      ... (new Schema(schema)).combine(entityData),
      i18n: (new Schemai18n(i18nSchema)).combine(entityData.i18n, languages),
    }
  }
}