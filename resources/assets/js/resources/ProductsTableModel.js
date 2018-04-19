import Schema from "./Schema";
import Schemai18n from "./Schemai18n";

const schema = {
  id: '',
  image: function (data = {}) {
    if (!data.image) {
      return {
        src: '/img/no-photo.jpg',
        srcset: '/img/no-photo.jpg',
      }
    }

    return {
      src: data.image.thumb.src,
      srcset: data.image.thumb.srcset,
    }
  },
  is_new: false,
  is_payable: false,
  prices: [],
  created_at: '',
  enabled: false,
  url: function (data) {
    return '/shop/products/' + data.id
  }
}

const i18nSchema = {
  title: '<span class="label label-danger">Не заполнено</span>'
}

export default class ProductsTableModelModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18n: (new Schemai18n(i18nSchema)).combine(entityData.i18n, languages),
    }
  }
}