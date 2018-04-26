import Core from '../core'

import Base from './Base'
import DataHandler from './DataHandler'

export default {
  mixins: [
    Base,
    DataHandler
  ],

  data() {
    return {
      componentInitializedWithUrl: null
    }
  },

  methods: {
    /*
      Подготавливает url.
    */
    prepareUrl(segment, segmentIsUrl = false) {
      let url

      url = segmentIsUrl ? segment : this.componentInitializedWithUrl.replace('create', '')

      url = Core.trim(url, '/')

      if (segment && !segmentIsUrl) {
        url += '/' + Core.trim(segment, '/')
      }

      return `/api/${url}`
    },
  },

  created() {
    this.componentInitializedWithUrl = this.$route.path
  }
}