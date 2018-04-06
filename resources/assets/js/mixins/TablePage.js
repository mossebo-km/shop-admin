import Core from '../core'

import Page from './Page'
import {asyncPackageDataCollector} from "../core/queueHandler";

export default {
  mixins: [
    Page
  ],

  data() {
    return {
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
      this.items = data.items || []
    },

    /**
     * Загрузка списка.
     */
    fetchItems() {
      return new Core.requestHandler('get', this.prepareUrl())
    },

    /**
     * Смена статуса записи.
     *
     * @param id
     */
    statusChange(id) {
      this.statusQueue.add(new Core.requestHandler('get', this.prepareUrl(`${id}/status`)))
    },

    /**
     * Показ окна для удаления записи.
     *
     * @param id
     */
    remove(id) {
      var _ = this;

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

    /**
     * Отчистка очереди.
     */
    clearQueue() {
      this.statusQueue.clear()
    },
  },

  created() {
    this.loadData()
    this.statusQueue = Core.queueHandler.makeQueue('iteration', 'table-status')
  }
}