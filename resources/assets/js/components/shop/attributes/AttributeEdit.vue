<script>
  import ShopQuickNav from '../ShopQuickNav'

  export default {
    name: "attribute-edit",

    // mixins: [EntityEdit, Translatable],

    props: [
      'id',
      'type'
    ],

    data() {
      return {
        entityName: 'attribute',
        attribute: null,
        options: [],
        languages: [],
        activeLanguageCode: null,
        validationErrors: [],
        saveDisabled: false,

        defaultEntityFieldsValues: {
          layout_class: 'string',
          selectable: false,
          enabled: true,
        }
      }
    },

    components: {
      ShopQuickNav,
      // 'tree-select': TreeSelect,
      // 'ckeditor': CKEditor,
      // 'language-picker': LanguagePicker,
      // 'b-modal': bModal
    },

    methods: {
      /*
        Инициализация модели данных.
      */


      initEntity(data = {}) {
        let entity = this.makeEntityBaseData(data)

        entity.i18 = this.initI18(data.i18)

        this.setEnitityData(entity)
      },

      /*
        Переводы названия аттрибута.
      */
    }
  }
</script>

<template>
    <div>
        <shop-quick-nav active="attributes"></shop-quick-nav>


    </div>
</template>


