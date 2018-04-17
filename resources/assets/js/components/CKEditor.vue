<script>
  import Vue from 'vue'

  export default {
    name: 'ckeditor',

    props: [
      'className',
      'content'
    ],

    // watch: {
    //   '$route': 'reset'
    // },

    // mounted() {
    //   this.instance = CKEDITOR.replace( this.$el, {
    //     extraPlugins: 'divarea',
    //     startupFocus : true
    //   } )
    //
    //   this.instance.on('change', () => {
    //     this.$emit('update:content', this.instance.getData())
    //   })
    //
    //   this.instance.on("instanceReady", () => {
    //     this.instance.editable().$.blur()
    //   });
    // },
    //
    // methods: {
    //   destroy() {
    //     if (!this.destroyed) {
    //       this.instance.focusManager.blur(true)
    //       this.instance.removeAllListeners()
    //       this.instance.destroy(true)
    //       this.destroyed = true
    //     }
    //   },
    //
    //   reset() {
    //     this.instance.setData(this.content)
    //   }
    // },
    //
    // beforeDestroy() {
    //   this.destroy()
    // }
  }
</script>

<template>
  <textarea :class="`form-control${className ? ' ' + className : ''}`">{{ content }}</textarea>
</template>