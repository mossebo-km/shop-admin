import Core from '../../core/index'

import ModelI18n from '../base/ModelI18n'

export default class OptionModel extends ModelI18n {
  getSchemaFields() {
    return {
      id: function(data) {
        return data.id ? data.id : Core.uniqueId()
      },

      enabled: true,
      position: 0,

      i18n: {
        value: '',
      }
    }
  }
}