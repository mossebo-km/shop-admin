import Schema from './Schema'
import Schemai18n from './Schemai18n'

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

  children(data) {
    if (data.children && data.children instanceof Array && data.children.length > 0)   {
      return data.children.map(item => new CategoriesTableModel(item, langs))
    }
  }
}

const i18nSchema = {
  title: '',
}

export default class CategoriesTableModel {
  constructor(entityData, languages) {
    langs = languages

    return {
      ... (new Schema(schema)).combine(entityData),
      i18n: (new Schemai18n(i18nSchema)).combine(entityData.i18n, languages),

      id: '',
      parent_id: '',
      slug: '',
      enabled: true,
      products_count: 0,
      position: 0,

      url(data) {
        return '/shop/categories/' + data.id
      },

      siteUrl(data) {
        return '/categories/' + data.slug
      },

      i18n: {
        title: '<span class="label label-danger">Не заполнено</span>'
      }
>>>>>>> Stashed changes
    }
  }
}