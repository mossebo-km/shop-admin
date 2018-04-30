<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import EntityPage from '../../../mixins/EntityPage'

  import RoleEditModel from '../../../resources/RoleEditModel'


  export default {
    name: 'role-edit',

    mixins: [
      EntityPage
    ],

    components: {
      bModal,
    },

    props: [
      'id',
    ],

    data() {
      return {
        entityName: 'role',
        role: null,
      }
    },

    methods: {
      initEntity(data) {
        this.setEntityData(new RoleEditModel(data))
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
            Создание роли
          </strong>
        </h1>

        <div class="block-title-control">
          <a class="btn btn-sm btn-default btn-alt" @click="redirectToTable">
            <i class="fa fa-arrow-left"></i>
          </a>

          <span class="btn-separator-xs"></span>

          <a v-if="userCan('roles.create')" class="btn btn-sm btn-success active" @click="save">
            <i class="fa fa-plus-circle"></i> Создать
          </a>
        </div>
      </div>

      <div class="block-title clearfix" v-if="type === 'edit'">
        <h1>
          <strong>
            Редактирование роли #{{ this.id }}
          </strong>
        </h1>

        <div class="block-title-control">
          <a class="btn btn-sm btn-default btn-alt" @click="redirectToTable">
            <i class="fa fa-arrow-left"></i>
          </a>

          <span class="btn-separator-xs"></span>

          <a v-if="userCan('roles.edit')" class="btn btn-sm btn-primary active" @click="save">
            <i class="fa fa-floppy-o"></i> Сохранить
          </a>

          <a v-if="userCan('roles.delete')" class="btn btn-sm btn-danger active" @click="remove">
            Удалить
          </a>
        </div>
      </div>

      <div class="form-horizontal form-bordered" v-if="role">
        <div :class="`form-group${formErrors.has('name') ? ' has-error' : ''}`">
          <label class="col-md-3 control-label" for="name">
            Название <span class="text-danger">*</span>
          </label>

          <div class="col-md-9">
            <input type="text" class="form-control" id="name" v-model="role.name" name="name" v-validate="'required|max:255'">

            <span v-show="formErrors.has('name')" class="help-block">
              {{ formErrors.first('name') }}
            </span>
          </div>
        </div>

        <div class="form-group" v-if="role.created_at">
          <label class="col-md-3 control-label">
            Дата создания
          </label>

          <div class="col-md-9">
            <p class="form-control-static">
              {{ role.created_at }}
            </p>
          </div>
        </div>

        <div class="form-group" v-if="role.updated_at">
          <label class="col-md-3 control-label">
            Последнее изменение
          </label>

          <div class="col-md-9">
            <p class="form-control-static">
              {{ role.updated_at }}
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
      title="Удаление роли"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить эту роль?
    </b-modal>
  </div>
</template>


