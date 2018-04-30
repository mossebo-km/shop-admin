import ModelI18n from './Base/ModelI18n'

export default class PermissionsTableModel extends ModelI18n {
  getSchemaFields() {
    return {
      id: '',
      parent_id: 0,
      title: '',
      name: '',
      enabled: true,
      position: 0,

      url(data) {
        return '/system/rbac/permissions/' + data.id
      },
    }
  }
}