import Sortable from 'jquery-ui-sortable-npm'
import Base from './Base'

export default {
  mixins: [
    Base
  ],

  data() {
    return {
      sortEls: [],
      sortableParams: {}
    }
  },

  methods: {
    /**
     * Инициализация сортировки.
     *
     * todo: добавить поддержку опций
     */
    initSort() {
      this.sortEls = $( this.sortableParams.mainSelector || ".ui-sortable" ).sortable(this.sortableParams);
    },

    refreshSort() {
      let els = this.getInitializedSortEls()

      console.log(els, els.length)

      if (els.length > 0) {
        els.sortable("refresh")
      }
      else {
        this.initSort()
      }
    },

    /**
     * Сбор id элементов в правильном порядке
     *
     * @returns {any[]}
     */
    collectSortIds() {
      return [].map.call(document.querySelectorAll(this.sortableParams.idsInputSelector || '[name="ids"]'), el => {
        return el.value
      });
    },


    getInitializedSortEls() {
      return this.sortEls || false
    },

    sortDataBundleByIds(dataBundle, ids) {
      return dataBundle.reduce((acc, item) => {
        let index = acc.indexOf(item.id.toString())

        acc[index] = item

        return acc
      }, ids)
    },

    /**
     * todo: Добавить разрушение сортировки
     */
  },

  /**
   * При изменении порядка записей.
   */
  // onPositionChange() {
  //   this.sortQueue.add(new Core.requestHandler('post', this.prepareUrl('sort'), {
  //     ids: this.collectSortIds()
  //   }))
  // },
}