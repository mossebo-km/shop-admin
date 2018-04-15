import Schema from './Schema'
import SchemaI18 from './SchemaI18'
import PricesTableModel from './PricesTableModel'

const schema = {
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
  images: []
}

const i18Schema = {
  title: '',
  description: '',
  meta_title: '',
  meta_description: ''
}

export default class ProductModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18: (new SchemaI18(i18Schema)).combine(entityData.i18, languages),
      prices: new PricesTableModel(entityData.prices)
    }
  }
}