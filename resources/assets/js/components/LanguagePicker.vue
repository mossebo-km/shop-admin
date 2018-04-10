<script>
  import Core from '../core'
  import Dropdown from './Dropdown'

  export default {
    name: 'language-picker',

    props: [
      'languages',
      'activeLanguageCode'
    ],

    components: {
      Dropdown
    },

    methods: {
      changeLanguage(code) {
        this.$emit('update:activeLanguageCode', code)
      },

      prettyCode(code) {
        return Core.capitalizeFirstLetter(code)
      },

      activeLanguage() {
        return this.languages.find(item => item.code === this.activeLanguageCode)
      },
    },
  }
</script>

<template>
  <dropdown className="btn-group btn-group-sm language-picker" position="right" :options="languages" v-if="languages.length > 1">
    <template slot="button">
      <span class="btn btn-xs btn-default btn-alt dropdown-toggle language-picker__btn">
        <span class="language-picker__flag" :style="`background-image:url(${activeLanguage()['image']})`"></span>
        <span class="language-picker__code">{{prettyCode(this.activeLanguageCode)}}</span>
        <i class="fa fa-chevron-down"></i>
      </span>
    </template>

    <template slot="option" slot-scope="{ code, name }">
      <li :class="{active: code === activeLanguageCode}" :key="code">
        <a @click="changeLanguage(code)" href="javascript:void(0)">
          {{ name }} <strong class="pull-right">{{ prettyCode(code) }}</strong>
        </a>
      </li>
    </template>
  </dropdown>
</template>