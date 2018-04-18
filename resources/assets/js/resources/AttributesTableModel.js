import Schema from './Schema'
import Schemai18n from './Schemai18n'

const schema = {
  id: '',
  enabled: true,

  url(data) {
    return '/shop/attributes/' + data.id
  },
}

const i18nSchema = {
  title: '',
}

export default class AttributesTableModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18n: (new Schemai18n(i18nSchema)).combine(entityData.i18n, languages),
    }
  }
}