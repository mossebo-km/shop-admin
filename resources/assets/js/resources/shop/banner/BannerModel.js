import ModelI18n from '../../base/ModelI18n'

export default class BannerModel extends ModelI18n {
  getSchemaFields() {
    return {
      id: '',

      gradient: {
        color_from: '#fcc600',
        color_to: '#fdda55',
        type: 'linear',
        angle: 0,
      },

      title_color: '#fff',
      caption_color: '#fff',
      button_color: '#323f4c',
      button_background_color: '#fff',

      mobile_image: '',
      desktop_image: '',
      small_image: '',
      background_image: '',
      background_long_image: '',

      type: '',
      position: '',

      places: [],

      enabled: true,

      created_at: null,
      updated_at: null,

      i18n: {
        title: '',
        caption: '',
        button: '',
        link: '',
      }
    }
  }
}
