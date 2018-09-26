import Model from '../../base/Model'
import PricesTableModel from '../PricesTableModel'

export default class SaleProductEditModel extends Model {
  getSchemaFields() {
    return {
      id: '',
      date_start: '',
      date_finish: '',
      enabled: true,

      prices(data) {
        return data.prices ? new PricesTableModel(data.prices) : []
      },

      product(data = {}) {
        return data.product ? [data.product] : []
      },

      product_id(data) {
        return data.product ? data.product.id : ''
      },
    }
  }
}