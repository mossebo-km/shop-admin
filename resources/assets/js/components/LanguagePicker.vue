<script>
  import Core from '../core'

  export default {
    name: 'language-picker',
    props: ['languages', 'activeLanguageCode'],
    methods: {
      changeLanguage(code) {
        this.$emit('update:activeLanguageCode', code)
      },

      prettyCode(code) {
        return Core.capitalizeFirstLetter(code)
      },
    }
  }
</script>

<template>
  <div class="btn-group btn-group-sm language-picker" v-if="languages instanceof Array && languages.length > 1">
    <span class="btn btn-alt btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Выбрать язык" data-original-title="Выбрать язык" aria-expanded="false"><span>{{ prettyCode(activeLanguageCode) }}</span></span>
    <ul class="dropdown-menu dropdown-custom">
      <template v-for="(language, index) in languages">
        <li v-if="index !== 0" class="divider"></li>

        <li :class="{ active: language.code == activeLanguageCode }" :key="language.code">
          <a @click="changeLanguage(language.code)" href="javascript:void(0)">
            {{ language.name }} <strong class="pull-right">{{ prettyCode(language.code) }}</strong>
          </a>
        </li>
      </template>
    </ul>
  </div>
</template>