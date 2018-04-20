<script>
  // import Vue from 'vue'

  export default {
    name: 'ckeditor',

    props: [
      'className',
      'content'
    ],

    watch: {
      // '$route': 'reset'
    },

    mounted() {
      // this.instance = CKEDITOR.replace( this.$el, {
      //   extraPlugins: 'divarea',
      //   startupFocus : true,
      //   filebrowserBrowseUrl: '/elfinder/ckeditor'
      // })
      //
      // this.instance.on('change', () => {
      //   this.$emit('update:content', this.instance.getData())
      // })
      //
      // this.instance.on("instanceReady", () => {
      //   this.instance.editable().$.blur()
      // });
      //
      // let iframe = document.createElement('iframe')
      //
      // iframe.src = '/elfinder/popup/aszasd'
      //
      // iframe.style.width = '1000px'
      // iframe.style.height = '500px'
      //
      // window.processSelectedFile = function() {
      //   console.log(arguments)
      // }
      //
      // $.magnificPopup.open({
      //   items: {
      //     src: iframe
      //   },
      //   type: 'inline'
      // })


      // $.magnificPopup.open({
      //   items: {
      //     src: '/elfinder/ckeditor'
      //   },
      //   type: 'iframe'
      // });
    },

    methods: {
      input(e) {
        this.$emit('update:content', this.content + e.data)
      },

      // destroy() {
        // if (!this.destroyed) {
        //   this.instance.focusManager.blur(true)
        //   this.instance.removeAllListeners()
        //   this.instance.destroy(true)
        //   this.destroyed = true
        // }
      // },

      // reset() {
        // this.instance.setData(this.content)
      // }
    },

    // beforeDestroy() {
      // this.destroy()
    // }
  }
</script>

<template>
  <!--<textarea :class="`ckeditor${className ? ' ' + className : ''}`">{{ content }}</textarea>-->
  <textarea :class="`form-control${className ? ' ' + className : ''}`" v-on:input="input">{{ content }}</textarea>
</template>

