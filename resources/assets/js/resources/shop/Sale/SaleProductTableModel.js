import Model from '../../base/Model'
import PricesTableModel from '../PricesTableModel'
import ProductsTableModel from '../ProductsTableModel'

export default class SaleProductTableModel extends Model {
  constructor(entityData, languages) {
    super(entityData)

    let productData = entityData && entityData.product ? entityData.product : undefined

    this.product = new ProductsTableModel(productData, languages)
  }

  getSchemaFields() {
    return {
      id: '',
      date_start: '',
      date_finish: '',
      enabled: true,
      prices: [],

      product_id(data) {
        return data.product ? data.product.id : ''
      },

      url(data) {
        return '/shop/sale/' + data.id
      },
    }
  }
}