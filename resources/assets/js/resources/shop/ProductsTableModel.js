import ModelI18n from '../base/ModelI18n'
import HasImage from '../base/HasImage'

export default class ProductAttributesModel extends ModelI18n {
  getSchemaFields() {
    let self = this

    return {
      id: '',

      image: HasImage('thumb'),

      is_new: false,
      is_payable: false,
      prices: [],
      created_at: '',
      enabled: false,

      url: function (data) {
        return '/shop/products/' + data.id
      },

      i18n: {
        title: '<span class="label label-danger">Не заполнено</span>'
      },


    }
  }
}
