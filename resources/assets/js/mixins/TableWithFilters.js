import HistoryStateTable from './HistoryStateTable'

export default {
  mixins: [
    HistoryStateTable
  ],

  methods: {
    sortingChanged(ctx) {
      ctx.page = 1
    },

    search(phrase) {
      if (this.searchPhrase != phrase) {
        this.page = 1
        this.searchPhrase = phrase
        this.refreshTable()
      }
    },

    setPerPage(value) {
      this.perPage = value
      this.page = 1
    },

    refreshTable() {
      this.$nextTick(() => {
        if (this.$refs.table) {
          this.$refs.table.refresh()
        }
      })
    },

    nanToNum(value, num = 0) {
      return isNaN(value) ? num : value
    }
  }
}