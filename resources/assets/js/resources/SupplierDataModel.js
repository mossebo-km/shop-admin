import Model from './Base/Model'

export default class SupplierDataModel extends Model {
  getSchemaFields() {
    return {
      id: '',
      name: '',
    }
  }
}