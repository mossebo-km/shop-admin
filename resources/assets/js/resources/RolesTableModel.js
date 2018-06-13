import Model from './base/Model'

export default class RolesTableModel extends Model {
  getSchemaFields() {
    return {
      id: '',
      name: '',

      url: function (data) {
        return '/system/rbac/roles/' + data.id
      },
    }
  }
}