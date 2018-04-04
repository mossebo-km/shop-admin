<script>
  import $ from 'jquery'
  import Core from '../core'
  import VueDropzone from 'vue2-dropzone'
  import magnificPopup from 'magnific-popup'

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
      '$route': 'reset'
    },

    data() {
      return {
        innerImages: this.images,
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
          previewTemplate: '<div class=\"dz-preview dz-processing dz-complete dz-image-preview\"><div class=\"dz-image\"><a href=\"javascript:void(0)\" class=\"dz-link\"><img data-dz-thumbnail /><div class=\"dz-details\"><div class=\"dz-size\"><span data-dz-size></span></div><div class=\"dz-filename\"><i class=\"dz-icon fa fa-search\"></i></div></div></a></div><div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div><div class=\"dz-error-message\"><span data-dz-errormessage></span></div><div class=\"dz-success-mark\"><i class=\"dz-icon fa fa-check\"></i></div><div class=\"dz-error-mark\"><i class=\"dz-icon fa fa-warning\"></i></div>',
        }
      }
    },

    components: {
      VueDropzone
    },

    methods: {
      getInstance() {
        return this.$refs.dropzone.dropzone
      },

      initDropzone() {
        this.images.map(this.addFile)
      },

      addFiles(files) {
        files.forEach(file => this.addFile(file, false))
        this.makeGallery()
      },

      addFile(file, addToGallery = true) {
        const dropzone = this.getInstance()

        dropzone.emit('addedfile', file)
        dropzone.emit("thumbnail", file, file.thumbnail)
        dropzone.emit("processing", file)
        dropzone.emit("complete", file)

        file.previewElement.querySelector('.dz-link').href = file.name
        dropzone.files.push(file)

        if (addToGallery) {
          this.makeGallery()
        }
      },

      success(file, response) {
        let dropzone = this.getInstance()

        if (response.status == 'success') {
          file.id = response.id
          file.previewElement.querySelector('.dz-link').href = response.url

          this.makeGallery()
          dropzone.defaultOptions.success(file)
          this.sync()
        }

        if (response.status == 'error') {
          dropzone.defaultOptions.error(file, response.message)
        }
      },

      makeGallery() {
        $('#dropzone').magnificPopup({
          delegate: '.dz-link',
          type: 'image',
          gallery: {
            enabled: true
          }
        });
      },

      sync() {
        this.$emit('update:images', this.getInstance().files)
      },

      reset() {
        this.$refs.dropzone.removeAllFiles()
        this.initDropzone()
      }
    },

    mounted() {
      this.initDropzone()
    }
  }
</script>

<template>
  <vue-dropzone
    ref="dropzone"
    id="dropzone"
    @vdropzone-success="success"
    @vdropzone-removed-file="sync"
    :options="options"
    :destroyDropzone="true" />
</template>