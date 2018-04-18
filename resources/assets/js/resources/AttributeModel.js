import Schema from './Schema'
import Schemai18n from './Schemai18n'

const schema = {
  layout_class: '',
  selectable: false,
  enabled: true,
}

const i18nSchema = {
  title: '',
}

export default class AttributeModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18n: (new Schemai18n(i18nSchema)).combine(entityData.i18n, languages),
    }
  }
}