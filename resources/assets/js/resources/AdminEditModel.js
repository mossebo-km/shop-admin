import Model from './Base/Model'

export default class AdminEditModel extends Model {
  getSchemaFields() {
    return {
      id: '',
      name: '',
      email: '',
      roles: [],
      enabled: false,

      image: false,

      created_at: null,
      updated_at: null,
    }
  }
}