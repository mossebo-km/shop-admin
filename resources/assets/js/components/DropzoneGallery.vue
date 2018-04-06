<script>
  import $ from 'jquery'

  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import Core from '../core'
  import VueDropzone from 'vue2-dropzone'
  import magnificPopup from 'magnific-popup'
  import VueCropperjs from 'vue-cropperjs'
  import Toggle from './Toggle'
  import 'jquery-ui-sortable-npm'

  export default {
    props: {
      url: {
        type: String,
        require: true,
      },
      images: {
        type: Array
      }
    },

    watch: {
      'images': 'refresh'
    },

    data() {
      return {
        options: {
          url: Core.addApiTokenToUrl(this.url),
          thumbnailWidth: 150,
          maxFilesize: 8,
          addRemoveLinks: false,
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
          previewTemplate: '<div class=\"dz-preview dz-processing dz-complete dz-image-preview\"><div class=\"dz-image\"><a href=\"javascript:void(0)\" class=\"dz-link\"><img data-dz-thumbnail /><div class=\"dz-details\"><div class=\"dz-size\"><span data-dz-size></span></div><div class=\"dz-filename\"><i class=\"dz-icon fa fa-search\"></i></div></div></a></div><div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div><div class=\"dz-error-message\"><span data-dz-errormessage></span></div><div class=\"dz-success-mark\"><i class=\"dz-icon fa fa-check\"></i></div><div class=\"dz-error-mark\"><i class=\"dz-icon fa fa-warning\"></i></div>',
        },

        toCropImage: null,
      }
    },

    components: {
      VueDropzone,
      VueCropperjs,
      Toggle,
      bModal
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
        let ids = [];

        [].forEach.call(document.querySelectorAll('[name="ids"]'), el => {
          ids.push(el.value);
        });

        this.images.forEach(item => {
          let index = ids.indexOf(item.id.toString())

          ids[index] = item
        })

        this.$emit('update:images', ids)
      },

      update(image) {
        this.$emit('update:images', this.images.map(item => item.id === image.id ? image : item))
      },

      getCropperData() {
        if (this.cropperData) {
          let data = this.cropperData
          this.cropperData = false
          return data
        }

        return {}
      },

      edit(image) {
        if (image.initialImage) {
          this.cropperData = image.modifications
          this.toCropImage = image.initialImage
          this.$refs.pictureEditModal.show()
        }
        else {
          this.toCropImage = image
          this.$refs.pictureEditModal.show()
        }
      },

      getCropper() {
        return this.$refs.cropper
      },

      rotateLeft() {
        this.rotate(-1)
      },

      rotateRight() {
        this.rotate(1)
      },

      rotate(step) {
        let cropper = this.getCropper()
        cropper.rotate(step * 90)
        cropper.setCropBoxData(cropper.getCropBoxData())
      },

      invertX() {
        this.invert('scaleX')
      },

      invertY() {
        this.invert('scaleY')
      },

      invert(direction) {
        let cropper = this.getCropper()
        cropper[direction](cropper.getData()[direction] === -1 ? 1 : -1)
      },

      reset() {
        if (this.toCropImage.initialImage) {
          let image = this.toCropImage.initialImage
          this.toCropImage = false
          this.$nextTick(() => {
            this.toCropImage = image
          })
        }
        else {
          this.getCropper().reset()
        }
      },

      pictureEditSave() {
        let elImg = document.createElement('img')
        elImg.src = this.toCropImage.original

        if (! (elImg.width && elImg.height)) {
          Core.notify('Ошибка обработки изображения.', {type: 'error'})
          return
        }

        let defaultParams = {
          width: elImg.width,
          height: elImg.height,
          rotate: 0,
          scaleX: 1,
          scaleY: 1,
          x:0,
          y:0
        }

        let cropper = this.getCropper()
        let src = cropper.getCroppedCanvas().toDataURL()

        let cropperData = cropper.getData()
        let params = {}

        for (let i in cropperData) {
          if (cropperData[i] !== defaultParams[i]) {
            params[i] = cropperData[i]
          }
        }

        if (Object.keys(params).length > 0) {
          if (!this.toCropImage.initialImage) {
            this.toCropImage.initialImage = {
              ...this.toCropImage
            }

            this.toCropImage.original = src
            this.toCropImage.small.srcset = src
          }

          this.toCropImage.modifications = params
          this.update(this.toCropImage)
        }
      },

      clear() {
        this.toCropImage = false
      },

      refresh() {
        this.makeGallery()
      },
    },

    mounted() {
      this.makeGallery()

      $('.ui-sortable').sortable({
        update: this.sort
      })
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
          <div class="col-xs-6 col-sm-3" v-for="image in images" :data-id="image.id" :key="image.id">
            <input type="hidden" name="ids" :value="image.id">
            <div :class="{'edit-photo-card': true, 'edit-photo-card--deleted': image.deleted}">
              <a :href="image.original" class="edit-photo-card__preview js-magnific-link">
                <div class="edit-photo-card__image" :style="`background-image:url(${image.small ? image.small.srcset : ''})`"></div>
              </a>

              <div class="edit-photo-card__deleted-icon"><i class="fa fa-trash"></i></div>

              <div class="edit-photo-card__controls">
                <div class="pull-left">
                  <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="edit(image)" v-if="!isDeleted(image)">
                    <i class="fa fa-crop"></i> Редактировать
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
      id="pictureEditModal"
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
      @ok="pictureEditSave">

      <vue-cropper
        style="max-height:500px;"
        v-if="!!toCropImage"
        ref="cropper"
        :guides="true"
        :view-mode="2"
        drag-mode="crop"
        :auto-crop-area="1"
        :background="true"
        :rotatable="true"
        :zoomable="false"
        :data="getCropperData()"
        :src="toCropImage.original"
        :img-style="{ 'width': '100%' }" />

      <div class="edit-image-panel text-center" style="margin-top: 20px">
        <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="rotateLeft()">
          <i class="fa fa-rotate-left"></i>
        </a>

        <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="rotateRight()">
          <i class="fa fa-rotate-right"></i>
        </a>

        <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="invertX()">
          <i class="fa fa-arrows-h"></i>
        </a>

        <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="invertY()">
          <i class="fa fa-arrows-v"></i>
        </a>

        <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="reset()">
          <i class="fa fa-refresh"></i> Сбросить
        </a>
      </div>
    </b-modal>
  </div>
</template>