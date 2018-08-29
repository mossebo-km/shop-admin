import ModelI18n from '../base/ModelI18n'
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
      rooms: [],
      styles: [],

      badges: [],

      images: [],
      attributes: [],
      options: [],

      related(data) {
        return (data.related || []).map(item => item.id)
      },

      relatedOptions(data) {
        return data.related || []
      },

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