import Schema from './Schema'
import Schemai18n from './Schemai18n'
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
  images: [],
  attributes: [],
  options: [],
}

const i18nSchema = {
  title: '',
  description: '',
  meta_title: '',
  meta_description: ''
}

export default class ProductModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18n: (new Schemai18n(i18nSchema)).combine(entityData.i18n, languages),
      prices: new PricesTableModel(entityData.prices)
    }
  }
}