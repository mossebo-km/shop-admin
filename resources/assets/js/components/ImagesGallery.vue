<script>
  /**
   * todo: Не используется: удалить
   */

  import $ from 'jquery'

  export default {
    name: 'images-gallery',

    props: [
      'group',
      'images'
    ],

    mounted() {
      $(this.$el).magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
          enabled: true
        }
      })
    }
  }
</script>

<template>
  <div class="gallery gallery-widget" data-toggle="lightbox-gallery" v-if="images instanceof Array && images.length > 0">
    <div class="row">
      <div class="col-xs-6 col-sm-3" v-for="image in images">
        <a :href="image.original" class="gallery-link">
          <img :src="image.medium.src" :srcset="`${image.medium.srcset} 2x`">
        </a>
      </div>
    </div>
  </div>
</template>