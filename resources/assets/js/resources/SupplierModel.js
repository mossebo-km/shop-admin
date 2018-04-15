import Schema from './Schema'

const schema = {
  name: '',
  description: '',
  enabled: true,

  created_at: null,
  updated_at: null,
}

export default class SupplierModel {
  constructor(entityData) {
    return (new Schema(schema)).combine(entityData)
  }
}