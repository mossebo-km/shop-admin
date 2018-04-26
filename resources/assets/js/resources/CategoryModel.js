import ModelI18n from './Base/ModelI18n'

export default class CategoryModel extends ModelI18n {
  getSchemaFields() {
    return {
      parent_id: '',
      slug: '',
      enabled: true,

      created_at: null,
      updated_at: null,

      i18n: {
        title: '',
        description: '',
        meta_title: '',
        meta_description: ''
      }
    }
  }
}