import Schema from './Schema'
import Schemai18n from './Schemai18n'
import Core from '../core'

const schema = {
  id: function(data) {
    return data.id ? data.id : Core.uniqueId()
  },
}

const i18nSchema = {
  title(data) {
    return data.value
  },
}

export default class OptionModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18n: (new Schemai18n(i18nSchema)).combine(entityData.i18n, languages),
    }
  }
}