import Core from '../core'

import ModelI18n from './Base/ModelI18n'

export default class OptionSelectModel extends ModelI18n {
  getSchemaFields() {
    return {
      id: function(data) {
        return data.id ? data.id : Core.uniqueId()
      },

      i18n: {
        title(data) {
          return data.value
        },
      }
    }
  }
}