<script>
  import Mixin from './mixin'
  import FontResizer from '../../../FontResizer'

  export default {
    name: "standart-banner",

    mixins: [
      Mixin
    ],

    components: {
      FontResizer
    },

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
    <div class="banner__accent-box">
      <img
        v-if="image"
        :src="image"
        class="banner__image"
        :alt="title"
      >

      <div
        v-else
        :style="{color: titleColor}"
        class="banner__title"
      >
        <font-resizer
          style="width: 100%"
          :scale-factor="0.25"
          :min-size="30"
          :max-size="140"
        >
          <span v-html="title"></span>
        </font-resizer>
      </div>
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