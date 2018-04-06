import Sortable from 'jquery-ui-sortable-npm'
import Base from './Base'

export default {
  mixins: [
    Base
  ],

  methods: {
    /**
     * Инициализация сортировки.
     */
    initSort() {
      $( ".ui-sortable" ).sortable({
        nested: true,
        stop: this.onPositionChange,
      });
    },
  },

  /**
   * При изменении порядка записей.
   */
  onPositionChange() {
    let ids = [];

    [].forEach.call(document.querySelectorAll('[name="ids"]'), el => {
      ids.push(el.value);
    });

    this.sortQueue.add(new Core.requestHandler('post', this.prepareUrl('sort'), {ids}))
  },
}