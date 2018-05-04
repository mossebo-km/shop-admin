import ModelI18n from './Base/ModelI18n'

export default class CategoriesTableModel extends ModelI18n {
  constructor(entityData, languages) {
    super(entityData, languages)

    let children = entityData.children

    if (children && children instanceof Array && children.length > 0)   {
      this.children = children.map(item => new CategoriesTableModel(item, languages))
    }
  }

  getSchemaFields() {
    return {
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
    }
  }
}