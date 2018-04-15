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
     */
    initSort() {
      this.$nextTick(() => {
        this.sortEls = $( this.sortableParams.mainSelector || ".ui-sortable" ).sortable(this.sortableParams)
      })
    },

    /**
     * Обновить компонент сортировки. (Если добавлена новая опция - чтобы ее можно было двигать).
     */
    refreshSort() {
      let els = this.getInitializedSortEls()

      if (els.length > 0) {
        els.sortable("refresh")
      }
      else {
        this.initSort()
      }
    },

    /**
     * Возвращает список jQuery элементов с инициализированной сортировкой.
     *
     * @returns {*|jQuery|boolean}
     */
    getInitializedSortEls() {
      return this.sortEls || false
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

    /**
     * Сортировка набора данных на основе порядка id элементов.
     *
     * @param dataBundle
     * @param ids
     * @returns {*}
     */
    sortDataBundleByIdsPosition(dataBundle, ids) {
      return dataBundle.reduce((acc, item) => {
        let index = acc.indexOf(item.id.toString())

        acc[index] = item

        return acc
      }, ids)
    },


    setDataBundlePositionsByIds(dataBundle, ids) {
      return dataBundle.map(item => {
        return {
          ... item,
          position: ids.indexOf(item.id)
        }
      })
    },

    /**
     * todo: Добавить разрушение сортировки
     */
  },

  mounted() {
    this.initSort()
  }

  /**
   * При изменении порядка записей.
   */
  // onPositionChange() {
  //   this.sortQueue.add(new Core.requestHandler('post', this.prepareUrl('sort'), {
  //     ids: this.collectSortIds()
  //   }))
  // },
}