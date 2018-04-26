import ModelI18n from './Base/ModelI18n'
import PricesTableModel from './PricesTableModel'

export default class ProductModel extends ModelI18n {
  getSchemaFields() {
    return {
      supplier_id: 0,
      quantity: 1,
      is_new: false,
      is_popular: false,
      is_payable: true,
      enabled: true,

      created_at: null,
      updated_at: null,

      width: 0,
      height: 0,
      length: 0,
      weight: 0,

      categories: [],
      images: [],
      attributes: [],
      options: [],

      prices(data) {
        return new PricesTableModel(data.prices)
      },

      i18n: {
        title: '',
        description: '',
        meta_title: '',
        meta_description: ''
      }
    }
  }
}