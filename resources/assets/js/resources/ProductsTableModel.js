import Schema from "./Schema";
import SchemaI18 from "./SchemaI18";

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

const i18Schema = {
  title: '<span class="label label-danger">Не заполнено</span>'
}

export default class ProductsTableModelModel {
  constructor(entityData, languages) {
    return {
      ... (new Schema(schema)).combine(entityData),
      i18: (new SchemaI18(i18Schema)).combine(entityData.i18, languages),
    }
  }
}