import Schema from './Schema'
import SchemaI18 from './SchemaI18'


let langs

const schema = {
  id: '',
  parent_id: '',
  slug: '',
  enabled: true,

  url(data) {
    return '/shop/categories/' + data.id
  },

  siteUrl(data) {
    return '/categories/' + data.slug
  },

  sub(data) {
    if (data.sub)   {
      return data.sub.map(item => new CategoriesTableModel(item, langs))
    }
  }
}

const i18Schema = {
  title: '',
}

export default class CategoriesTableModel {
  constructor(entityData, languages) {
    langs = languages

    return {
      ... (new Schema(schema)).combine(entityData),
      i18: (new SchemaI18(i18Schema)).combine(entityData.i18, languages),
    }
  }
}