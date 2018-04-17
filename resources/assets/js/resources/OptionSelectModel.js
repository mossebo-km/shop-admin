import Schema from './Schema'
import SchemaI18 from './SchemaI18'
import Core from '../core'

const schema = {
  id: function(data) {
    return data.id ? data.id : Core.uniqueId()
  },
}

const i18Schema = {
  title(data) {
    return data.value
  },
}

export default class OptionModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18: (new SchemaI18(i18Schema)).combine(entityData.i18, languages),
    }
  }
}