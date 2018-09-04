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
  }
</script>

<template>
  <div
    class="banner"
    :style="{backgroundImage: background}"
  >
    <div v-if="image" class="banner__image-box">
      <img :src="image" class="banner__image" :alt="title">
    </div>

    <div v-else v-html="title" :style="{color: titleColor}" class="banner__title"></div>

    <div class="banner__bottom">
      <div v-html="caption" :style="{color: captionColor}" class="banner__caption"></div>

      <div v-if="buttonText" class="banner__button">
        <a :style="buttonStyle" :href="link" class="button button-long button-shadow" target="_blank">
          {{ buttonText }}
        </a>
      </div>
    </div>
  </div>
</template>