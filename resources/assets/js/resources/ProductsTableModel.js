import ModelI18n from './Base/ModelI18n'

export default class ProductAttributesModel extends ModelI18n {
  getSchemaFields() {
    let self = this

    return {
      id: '',

      image(data) {
        try {
          return {
            src: data.image.thumb.src,
            srcset: data.image.thumb.srcset,
          }
        }
        catch(e) {
          return self.getDefaultImage()
        }
      },

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
      }
    }
  }

  getDefaultImage() {
    return {
      src: '/img/no-photo.jpg',
      srcset: '/img/no-photo.jpg',
    }
  }
}