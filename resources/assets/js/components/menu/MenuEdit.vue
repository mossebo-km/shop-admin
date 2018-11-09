<script>
  import Core from '../../core'
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import LanguagePicker from '../LanguagePicker'

  import EntityPage from '../../mixins/EntityPage'
  import Translatable from '../../mixins/Translatable'
  import TreeSelect from '../TreeSelect'
  import CKEditor from '../CKEditor'

  import MenuModel from '../../resources/menu/MenuModel'

  export default {
    name: 'menu-edit',

    mixins: [
      EntityPage,
      Translatable,
    ],

    components: {
      LanguagePicker,
      bModal,
      TreeSelect,
      ckeditor: CKEditor,
    },

    props: [
      'id',
    ],

    data() {
      return {
        entityName: 'menu',
        menu: null,

        usedMainData: [
          'languages',
        ],

        reloadDataOnSave: false
      }
    },

    methods: {
      /**
       * Инициализация модели данных.
       */
      initEntity(data) {
        this.setEntityData(new MenuModel(data, this.languages))
      },
    },
  }
</script>

<template>
  <div>
    <div class="block full">
      <div class="block-title clearfix" v-if="type === 'create'">
        <h1>
          <strong>
            Создание меню
          </strong>
        </h1>

        <div class="block-title-control">
          <a class="btn btn-sm btn-default btn-alt" @click="redirectToTable">
            <i class="fa fa-arrow-left"></i>
          </a>

          <span class="btn-separator-xs"></span>

          <language-picker
            :languages="languages"
            :activeLanguageCode.sync="activeLanguageCode"
            :class="{'has-error': formTranslatesHasError()}"
          ></language-picker>

          <span class="btn-separator-xs"></span>

          <a v-if="userCan('menus.create')" class="btn btn-sm btn-success active" @click="save">
            <i class="fa fa-plus-circle"></i> Создать
          </a>
        </div>
      </div>

      <div class="block-title" v-if="type === 'edit'">
        <h1>
          <strong>
            Редактирование меню #{{ id }}
          </strong>
        </h1>

        <div class="block-title-control">
          <a class="btn btn-sm btn-default btn-alt" @click="redirectToTable">
            <i class="fa fa-arrow-left"></i>
          </a>

          <span class="btn-separator-xs"></span>

          <language-picker
            :languages="languages"
            :activeLanguageCode.sync="activeLanguageCode"
            :class="{'has-error': formTranslatesHasError()}" />

          <span class="btn-separator-xs"></span>

          <a v-if="userCan('menus.edit')" class="btn btn-sm btn-primary active" @click="save">
            <i class="fa fa-floppy-o"></i> Сохранить
          </a>

          <a v-if="userCan('menus.delete')" class="btn btn-sm btn-danger active" @click="remove">
            Удалить
          </a>
        </div>
      </div>

      <div class="row" v-if="menu">

        <div class="col-lg-6">
          <div class="block">
            <div class="block-title clearfix">
              <h2>
                <i class="fa fa-pencil"></i>
                <strong>Основная</strong> информация
              </h2>
            </div>

            <div class="form-horizontal form-bordered">
              <div :class="`form-group${formErrors.has('name') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="name">
                  Название <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    v-model="menu.name"
                    name="name"
                    v-validate="'required|max:255'">

                  <span v-show="formErrors.has('name')" class="help-block">
                    {{ formErrors.first('name') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('title') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="title">
                  Заголовок
                </label>

                <div class="col-md-9">
                  <input
                    type="text"
                    class="form-control"
                    id="title"
                    v-model="menu.title"
                    name="title"
                    v-validate="'required|max:255'">

                  <span v-show="formErrors.has('title')" class="help-block">
                    {{ formErrors.first('title') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('description') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="description">
                  Описание
                </label>

                <div class="col-md-9">
                  <ckeditor
                    id="description"
                    :content.sync="menu.description"
                    name="description"
                  />

                  <span v-show="formErrors.has('description')" class="help-block">
                    {{ formErrors.first('description') }}
                  </span>
                </div>
              </div>

              <div :class="`form-group${formErrors.has('template') ? ' has-error' : ''}`">
                <label class="col-md-3 control-label" for="title">
                  Шаблон <span class="text-danger">*</span>
                </label>

                <div class="col-md-9">
                  <input
                    type="text"
                    class="form-control"
                    id="template"
                    v-model="menu.template"
                    name="template"
                    v-validate="'required|max:255'">

                  <span v-show="formErrors.has('template')" class="help-block">
                      {{ formErrors.first('template') }}
                    </span>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-6">

          <div :class="`block${langSwitchHovered ? ' block-illuminated' : ''}`">
            <div class="block-title">
              <h2>
                <i class="fa fa-globe"></i> <strong>Языковая</strong> информация
              </h2>
            </div>

            <div class="form-horizontal form-bordered">
              <div class="form-group" v-if="menu.created_at">
                <label class="col-md-3 control-label">
                  Дата создания
                </label>

                <div class="col-md-9">
                  <p class="form-control-static">
                    {{ menu.created_at }}
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <b-modal
      id="validationModal"
      ref="validationModal"
      title="Ошибка валидации"
      title-tag="h3"
      centered
      ok-title="Ок"
      ok-only
      hide-header-close>

      Проверьте правильность заполнения формы!
    </b-modal>

    <b-modal
      id="removeModal"
      ref="removeModal"
      title="Удаление меню"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить меню?
    </b-modal>
  </div>
</template>

