import Model from '../../base/Model'

export default class PromoCodeModel extends Model {
  constructor(entityData) {
    super(entityData)

    if (entityData && 'conditions' in entityData) {
      this.conditions = entityData.conditions.reduce((acc, condition) => {
        acc[condition.type] = condition.params

        return acc
      }, {})
    }
    else {
      this.conditions = {}
    }
  }

  getSchemaFields() {
    return {
      id: '',
      name: '',
      date_start: null,
      date_finish:null,

      quantity: 1000,
      quantity_per_user: 1,
      percent: '',
      amount: '',
      currency_code: null,
      uses_count: 0,
      enabled: true,

      conditions: {},

      created_at: null,
      updated_at: null,
    }
  }
}
