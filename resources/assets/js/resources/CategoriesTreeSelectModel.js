import ModelI18n from './Base/ModelI18n'

export default class CategoriesTreeSelectModel extends ModelI18n {
  constructor(entityData, languages) {
    super(entityData, languages)

    let children = entityData.children

    if (children && children instanceof Array && children.length > 0)   {
      this.children = children.reduce((acc, item) => {
        acc.push(new CategoriesTreeSelectModel(item, languages))

        return acc
      }, [])
    }
  }

  getSchemaFields() {
    return {
      id: '',
      parent_id: '',
      enabled: true,

      url(data) {
        return '/shop/categories/' + data.id
      },

      siteUrl(data) {
        return '/categories/' + data.slug
      },

      i18n: {
        title: '',
      }
    }
  }
}