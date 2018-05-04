import Model from './Base/Model'

export default class RoleEditModel extends Model {
  getSchemaFields() {
    return {
      id: '',
      name: '',
      importance: 999,

      created_at: null,
      updated_at: null,
    }
  }
}