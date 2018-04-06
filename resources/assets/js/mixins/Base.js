import Core from '../core'

export default {
  methods: {
    /**
     * todo: Доделать проверку на супер админа
     *
     * @returns {*}
     */
    isSuperAdmin() {
      return Core.auth.isSuperAdmin()
    },

    /*
      Подготавливает url.
    */
    prepareUrl(segment, segmentIsUrl = false) {
      let url

      if (segmentIsUrl) {
        url = segment
      }
      else {
        url = this.$route.path.replace('create', '')
      }

      url = Core.trim(url, '/')

      if (segment && !segmentIsUrl) {
        url += '/' + Core.trim(segment, '/')
      }

      return `/api/${url}`
    },
  }
}