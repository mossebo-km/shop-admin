<script>
  import $ from 'jquery'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import Core from '../core'
  import VueDropzone from 'vue2-dropzone'
  import Toggle from './Toggle'
  import 'jquery-ui-sortable-npm'
  import Sortable from '../mixins/Sortable'
  import ImageEditor from './ImageEditor'

  export default {
    props: {
      url: {
        type: String,
        require: true,
      },
      images: {
        type: Array
      },
      errors: {
        type: Array
      }
    },

    mixins: [
      Sortable
    ],

    components: {
      VueDropzone,
      Toggle,
      bModal,
      ImageEditor
    },

    watch: {
      'images': 'refresh',
      'errors': 'refresh'
    },

    data() {
      return {
        options: {
          url: Core.addApiTokenToUrl(this.url),
          thumbnailWidth: 150,
          maxFilesize: 8,
          addRemoveLinks: true,
          autoProcessQueue: true,
          ignoreHiddenFiles: true,
          dictDefaultMessage: "Перетащите файлы сюда или нажмите чтобы загрузить",
          dictFallbackMessage: "Ваш браузер не поддерживает загрузку файлов при помощи drag'n'drop.",
          dictFallbackText: "Используйте форму ниже, чтобы загрузить файлы.",
          dictFileTooBig: "Размер файла слишком велик ({{filesize}}MiB). Максимальный размер файла: {{maxFilesize}}MiB.",
          dictInvalidFileType: "Вы не можете загружать файлы этого типа.",
          dictResponseError: "Сервер вернул ошибку с кодом: {{statusCode}}.",
          dictCancelUpload: "Отменить загрузку",
          dictUploadCanceled: "Загрузка отменена.",
          dictCancelUploadConfirmation: "Вы уверены, что хотите отменить загрузку?",
          dictRemoveFile: "Удалить файл",
          dictMaxFilesExceeded: "Достигнут лимит количества файлов.",
          acceptedFiles: 'image/jpeg, image/png',
          previewTemplate: '<div class=\"dz-preview dz-processing dz-complete dz-image-preview\"><div class=\"dz-remove\" data-dz-remove></div><div class=\"dz-image\"><a href=\"javascript:void(0)\" class=\"dz-link\"><img data-dz-thumbnail /><div class=\"dz-details\"><div class=\"dz-size\"><span data-dz-size></span></div><div class=\"dz-filename\"><i class=\"dz-icon fa fa-search\"></i></div></div></a></div><div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div><div class=\"dz-error-message\"><span data-dz-errormessage></span></div><div class=\"dz-success-mark\"><i class=\"dz-icon fa fa-check\"></i></div><div class=\"dz-error-mark\"><i class=\"dz-icon fa fa-warning\"></i></div>',
        },

        sortableParams: {
          update: this.sort
        },

        editorImage: null,
      }
    },

    methods: {
      getInstance() {
        return this.$refs.dropzone.dropzone
      },

      success(file, response) {
        let dropzone = this.getInstance()

        dropzone.removeFile(file)

        this.$emit('update:images', [
          ... this.images,
          response.image
        ])
      },

      makeGallery() {
        $(this.$refs.gallery).magnificPopup({
          delegate: '.js-magnific-link',
          type: 'image',
          gallery: {
            enabled: true
          }
        });
      },

      remove(image) {
        image.deleted = true
        this.update(image)
      },

      recover(image) {
        image.deleted = false
        this.update(image)
      },

      isDeleted(image) {
        return image.deleted
      },

      sort() {
        this.$emit('update:images', this.sortDataBundleByIdsPosition(this.images, this.collectSortIds()))
      },

      update(image) {
        this.$emit('update:images', this.images.map(item => item.id === image.id ? image : item))
      },

      edit(image) {
        this.editorImage = image
        this.$refs.pictureEditModal.show()
      },

      editorImageSave() {
        let image = this.editorImage
        let modifications = this.$refs.imageEditor.getClearedModifications()

        if (Object.keys(modifications) === 0) {
          if (image.modifications) {
            delete image.modifications
          }

          if (image.cropped) {
            delete image.cropped
          }
        }
        else {
          image.modifications = modifications
          image.cropped = this.$refs.imageEditor.getCroppedImage()
        }

        this.update(image)
        this.editorImage = null
      },

      getImageOriginal(image) {
        return image.cropped ? image.cropped : image.original
      },

      getImagePreview(image) {
        if (image.cropped) {
          return image.cropped
        }

        if (image.small) {
          return image.small.srcset ? image.small.srcset : image.small.src
        }

        return image.original || ''
      },

      getEditorImageModifications() {
        return (this.editorImage && this.editorImage.modifications) ? this.editorImage.modifications : {}
      },

      clear() {
        this.editorImage = false
      },

      refresh() {
        this.makeGallery()
      },

      hasError(image) {
        return !!this.errors.find(item => item.toString() === image.id.toString())
      }
    },

    mounted() {
      this.makeGallery()
      this.initSort()
    },
  }
</script>

<template>

  <div class="block">
    <div class="block-title">
      <h2><i class="fa fa-image"></i> <strong>Изображения</strong></h2>
    </div>

    <div class="block-section">
      <div class="gallery gallery-widget" ref="gallery">
        <div class="row ui-sortable">
          <div v-for="image in images" :data-id="image.id" :key="image.id" class="col-xs-6 col-sm-3" style="min-width:155px;">
            <input type="hidden" name="ids" :value="image.id">
            <div :class="{'edit-photo-card': true, 'edit-photo-card--deleted': image.deleted, 'edit-photo-card--has-error': hasError(image)}">
              <a :href="getImageOriginal(image)" class="edit-photo-card__preview js-magnific-link">
                <div class="edit-photo-card__image" :style="`background-image:url(${getImagePreview(image)})`"></div>
              </a>

              <div class="edit-photo-card__deleted-icon"><i class="fa fa-trash"></i></div>

              <div class="edit-photo-card__controls">
                <div class="pull-left">
                  <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="edit(image)" v-if="!isDeleted(image)">
                    <i class="fa fa-crop"></i>
                  </a>
                </div>

                <div class="pull-right">
                  <a href="javascript:void(0)" class="btn btn-sm btn-danger" @click="remove(image)" v-if="!isDeleted(image)">
                    <i class="fa fa-trash-o"></i>
                  </a>

                  <a href="javascript:void(0)" class="btn btn-sm btn-success" @click="recover(image)" v-if="isDeleted(image)">
                    <i class="fa fa-repeat"></i> Восстановить
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block-section">
      <vue-dropzone
        ref="dropzone"
        id="dropzone"
        @vdropzone-success="success"
        :options="options"
        :destroyDropzone="true" />
    </div>

    <b-modal
      ref="pictureEditModal"
      :no-close-on-backdrop="true"
      size="lg"
      title="Редактирование изображения"
      title-tag="h3"
      centered
      ok-title="Применить"
      cancel-title="Отмена"
      hide-header-close
      @hidden="clear"
      @ok="editorImageSave">

      <image-editor
        ref="imageEditor"
        v-if="!!editorImage"
        :image="editorImage.original"
        :modifications="getEditorImageModifications()"/>
    </b-modal>
  </div>
</template>