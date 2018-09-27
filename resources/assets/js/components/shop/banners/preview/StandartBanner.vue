<script>
  import Mixin from './mixin'

  export default {
    name: "standart-banner",

    mixins: [
      Mixin
    ],

    props: {
      backgroundImage: null,
      caption: String,
      captionColor: String,
    },

    computed: {
      titleLength() {
        return this.title.length
      },

      captionLength() {
        return Math.ceil(this.caption.length / 5)
      },
    }
  }
</script>

<template>
  <div
    class="banner"
    :style="{backgroundImage: background}"
  >
    <div class="banner__accent-box">
      <img
        v-if="image"
        :src="image"
        class="banner__image"
        :alt="title"
      >

      <div
        v-else
        v-html="title"
        :style="{color: titleColor}"
        :class="'banner__title banner__title--' + titleLength"
      ></div>
    </div>

    <div class="banner__bottom">
      <div v-html="caption" :style="{color: captionColor}" :class="'banner__caption banner__caption--' + captionLength"></div>

      <div v-if="buttonText" class="banner__button">
        <a :style="buttonStyle" :href="link" class="button button-long button-shadow" target="_blank">
          {{ buttonText }}
        </a>
      </div>
    </div>
  </div>
</template>