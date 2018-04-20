<script>
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import ShopQuickNav from '../ShopQuickNav'
  import TreeSelect from '../../TreeSelect'
  import CKEditor from '../../CKEditor'
  import LanguagePicker from '../../LanguagePicker'

  import EntityEdit from '../../../mixins/EntityEdit'

  import SupplierModel from '../../../resources/SupplierModel'


  export default {
    name: 'supplier-edit',

    mixins: [
      EntityEdit
    ],

    props: [
      'id',
    ],

    data() {
      return {
        entityName: 'supplier',
        supplier: null,
        saveDisabled: false,
      }
    },

    methods: {
      initEntity(data) {
        this.setEntityData(new SupplierModel(data))
      }
    },

    components: {
      ShopQuickNav,
      TreeSelect,
      'ckeditor': CKEditor,
      LanguagePicker,
      bModal
    },
  }
</script>

<template>
  <div>
    <shop-quick-nav active="suppliers"></shop-quick-nav>

    <div class="block full">
      <div class="block-title clearfix" v-if="type === 'create'">
        <h1><strong>Создание поставщика</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-success active" @click="save" :disabled="saveDisabled"><i class="fa fa-plus-circle"></i> Создать</a>
        </div>
      </div>

      <div class="block-title clearfix" v-if="type === 'edit'">
        <h1><strong>Редактирование поставщика #{{ this.id }}</strong></h1>

        <div class="block-title-control">
          <a href="javascript:void(0);" class="btn btn-sm btn-primary active" @click="save" :disabled="saveDisabled"><i class="fa fa-floppy-o"></i> Сохранить</a>

          <a href="javascript:void(0);" class="btn btn-sm btn-danger active" @click="remove" :disabled="saveDisabled">Удалить</a>
        </div>
      </div>

      <div class="form-horizontal form-bordered" v-if="supplier">
        <div :class="`form-group${formErrors.has('name') ? ' has-error' : ''}`">
          <label class="col-md-3 control-label" for="name">Название <span class="text-danger">*</span></label>
          <div class="col-md-9">
            <input type="text" class="form-control" id="name" v-model="supplier.name" name="name" v-validate="'required|max:255'">
            <span v-show="formErrors.has('name')" class="help-block">{{ formErrors.first('name') }}</span>
          </div>
        </div>

        <div :class="`form-group${formErrors.has('description') ? ' has-error' : ''}`">
          <label class="col-md-3 control-label" for="description">Описание</label>
          <div class="col-md-9">
            <ckeditor id="description" :content.sync="supplier.description" name="description" />
            <span v-show="formErrors.has('description')" class="help-block">{{ formErrors.first('description') }}</span>
          </div>
        </div>

        <div :class="`form-group${formErrors.has('enabled') ? ' has-error' : ''}`">
          <label class="col-md-3 control-label">Опубликовано</label>
          <div class="col-md-9">
            <label class="switch switch-primary">
              <input type="checkbox" v-model="supplier.enabled"><span></span>
            </label>

            <span v-show="formErrors.has('enabled')" class="help-block">{{ formErrors.first('enabled') }}</span>
          </div>
        </div>

        <div class="form-group" v-if="supplier.created_at">
          <label class="col-md-3 control-label">Дата создания</label>
          <div class="col-md-9">
            <p class="form-control-static">{{ supplier.created_at }}</p>
          </div>
        </div>

        <div class="form-group" v-if="supplier.updated_at">
          <label class="col-md-3 control-label">Последнее изменение</label>
          <div class="col-md-9">
            <p class="form-control-static">{{ supplier.updated_at }}</p>
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
      Вы действительно хотите удалить поставщика?
    </b-modal>
  </div>
</template>


