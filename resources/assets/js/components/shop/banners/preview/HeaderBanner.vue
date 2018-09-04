<template>

  <component
    :is="buttonText ? 'div' : 'a'"
    :href="buttonText ? null : link"
    :style="{backgroundImage: background}"
    class="header-banner"
    target="_blank"
  >
    <div v-html="title" :style="{color: titleColor}" class="header-banner__title"></div>

    <div v-if="buttonText" class="header-banner__button">
      <a :style="buttonStyle" :href="link" class="button button-long button-small button-shadow" target="_blank">
        {{ buttonText }}
      </a>
    </div>
  </component>

</template>

<script>
  import Mixin from './mixin'

  export default {
    name: 'header-banner',

    mixins: [
      Mixin
    ],

    computed: {
      background() {
        if (this.image) {
          return 'url(' + this.image + ')'
        }

        return this.gradient
      },
    }
  }
</script>
