<script>
  import Core from '../../../core'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import TreeSelect from '../../TreeSelect'
  import DropzoneGallery from '../../DropzoneGallery'

  import EntityPage from '../../../mixins/EntityPage'

  import AdminEditModel from '../../../resources/AdminEditModel'


  export default {
    name: 'admin-edit',

    mixins: [
      EntityPage
    ],

    components: {
      bModal,
      TreeSelect,
      DropzoneGallery
    },

    props: [
      'id',
    ],

    data() {
      return {
        entityName: 'admin',
        admin: null,
        usedMainData: [
          'roles'
        ]
      }
    },

    methods: {
      initEntity(data) {
        this.setEntityData(new AdminEditModel(data))

        let entity = this.getEntityModel()

        Core.events.trigger('system.avatar-changed', entity.id, entity.image ? entity.image.small.srcset : false)
      },

      updateImage(images = []) {
        if (images.length) {
          this[this.getEntityName()].image = images[0]
        }
        else {
          this[this.getEntityName()].image = false
        }
      },

      getToSaveData() {
        return {
          ... this.getEntityModel(),
          images: this.getToSaveImage(),
        }
      },

      getToSaveImage() {
        let image = this.getEntityModel().image

        if (image) {
          return [{
            id: image.id,
            modifications: image.modifications
          }]
        }
        else {
          return []
        }
      },


    },

    computed: {
      dropzoneImage() {
        let entity = this.getEntityModel()
        return entity.image ? [entity.image] : []
      }
    }
  }
</script>

<template>
  <div>
    <div class="block full">
      <div class="block-title clearfix" v-if="type === 'create'">
        <h1>
          <strong>
            Создание администратора
          </strong>
        </h1>

        <div class="block-title-control">
          <a class="btn btn-sm btn-default btn-alt" @click="redirectToTable">
            <i class="fa fa-arrow-left"></i>
          </a>

          <span class="btn-separator-xs"></span>

          <a v-if="userCan('admins.create')" class="btn btn-sm btn-success active" @click="save">
            <i class="fa fa-plus-circle"></i> Создать
          </a>
        </div>
      </div>

      <div class="block-title clearfix" v-if="type === 'edit'">
        <h1>
          <strong>
            Редактирование администратора #{{ this.id }}
          </strong>
        </h1>

        <div class="block-title-control">
          <a class="btn btn-sm btn-default btn-alt" @click="redirectToTable">
            <i class="fa fa-arrow-left"></i>
          </a>

          <span class="btn-separator-xs"></span>

          <a v-if="userCan('admins.edit')" class="btn btn-sm btn-primary active" @click="save">
            <i class="fa fa-floppy-o"></i> Сохранить
          </a>

          <a v-if="userCan('admins.delete')" class="btn btn-sm btn-danger active" @click="remove">
            Удалить
          </a>
        </div>
      </div>

      <div class="form-horizontal form-bordered" v-if="admin">
        <div :class="`form-group${formErrors.has('name') ? ' has-error' : ''}`">
          <label class="col-md-3 control-label" for="name">
            Имя <span class="text-danger">*</span>
          </label>

          <div class="col-md-9">
            <input type="text" class="form-control" id="name" v-model="admin.name" name="name" v-validate="'required|max:255'">

            <span v-show="formErrors.has('name')" class="help-block">
              {{ formErrors.first('name') }}
            </span>
          </div>
        </div>

        <div :class="`form-group${formErrors.has('name') ? ' has-error' : ''}`">
          <label class="col-md-3 control-label" for="email">
            Email <span class="text-danger">*</span>
          </label>

          <div class="col-md-9">
            <input type="email" class="form-control" id="email" v-model="admin.email" name="email" v-validate="'required|email|max:255'">

            <span v-show="formErrors.has('email')" class="help-block">
              {{ formErrors.first('email') }}
            </span>
          </div>
        </div>

        <div :class="`form-group${formErrors.has('roles') ? ' has-error' : ''}`">
          <label class="col-md-3 control-label">
            Роли
          </label>

          <div class="col-md-8">
            <tree-select
              :options="roles"
              :selected.sync="admin.roles"
              :multiple="true"
              :params="{closeOnSelect: false}"
              placeholder="Выберите роль" />

            <span v-show="formErrors.has('roles')" class="help-block">
              {{ formErrors.first('roles') }}
            </span>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label" for="email">
            Аватар
          </label>

          <div class="col-md-9">
            <dropzone-gallery
              ref="gallery"
              v-if="type === 'edit'"
              :params="{maxFiles: 1}"
              :url="prepareUrl('image')"
              :images="dropzoneImage"
              @update:images="updateImage"
              :safeDelete="false"
              :errors="formErrors.collect('image') || []" />
          </div>
        </div>

        <div :class="`form-group${formErrors.has('enabled') ? ' has-error' : ''}`">
          <label class="col-md-3 control-label">
            Включен
          </label>

          <div class="col-md-9">
            <label class="switch switch-primary">
              <input type="checkbox" v-model="admin.enabled">
              <span></span>
            </label>

            <span v-show="formErrors.has('enabled')" class="help-block">
              {{ formErrors.first('enabled') }}
            </span>
          </div>
        </div>

        <div class="form-group" v-if="admin.created_at">
          <label class="col-md-3 control-label">
            Дата создания
          </label>

          <div class="col-md-9">
            <p class="form-control-static">
              {{ admin.created_at }}
            </p>
          </div>
        </div>

        <div class="form-group" v-if="admin.updated_at">
          <label class="col-md-3 control-label">
            Последнее изменение
          </label>

          <div class="col-md-9">
            <p class="form-control-static">
              {{ admin.updated_at }}
            </p>
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
      title="Удаление поставщика"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить этого администратора?
    </b-modal>
  </div>
</template>


