import Model from './Base/Model'
import Core from "../core";

export default class PermissionEditModel extends Model {
  getSchemaFields() {
    return {
      name: '',

      id: function(data) {
        return data.id ? data.id : Core.uniqueId()
      },
    }
  }
}