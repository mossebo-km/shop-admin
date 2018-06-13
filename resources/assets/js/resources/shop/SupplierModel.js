import Model from '../base/Model'

export default class ProductAttributesModel extends Model {
  getSchemaFields() {
    return {
      name: '',
      description: '',
      enabled: true,

      created_at: null,
      updated_at: null,
    }
  }
}