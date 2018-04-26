import Core from '../core'

import Page from './Page'
import {asyncPackageDataCollector} from "../core/queueHandler";

export default {
  mixins: [
    Page
  ],

  data() {
    return {
      tableItemsDataName: 'items',
      items: []
    }
  },

  methods: {
    loadData() {
      const a = new asyncPackageDataCollector()
      a.add(() => this.fetchMainData())
      a.add(this.fetchItems())

      a.onDone(data => {
        this.initData(data)
      })

      a.start()
    },

    initData(data) {
      this.initMainData(data)
      this.initItems(data)
    },

    /**
     * Инициализация списка.
     */
    initItems (data) {
      this.items = data[this.tableItemsDataName] || []
    },

    /**
     * Загрузка списка.
     */
    fetchItems() {
      return new Core.requestHandler('get', this.prepareUrl())
    },
    /**
     * Показ окна для удаления записи.
     *
     * @param id
     */
    remove(id) {
      let _ = this;

      this.toRemoveId = id
      this.$refs.removeModal.show()
    },

    /**
     * Удаление записи.
     */
    removeConfirm() {
      new Core.requestHandler('delete', this.prepareUrl(`${this.toRemoveId}`))
        .success(() => this.refreshTable())
        .start()
    },

    /**
     * Обновление списка записей.
     */
    refreshTable() {
      this.fetchItems()
        .success(response => this.initItems(response.data))
        .start()
    },
  },

  created() {
    this.loadData()
  }
}