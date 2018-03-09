<script>
  import bFormInput from 'bootstrap-vue/es/components/form-input/form-input'

  export default {
    name: 'search-input',
    props:['phrase', 'keyUpTimeout'],
    data () {
      return {
        searchPhrase: this.phrase || '',
      }
    },
    methods: {
      onSearch(ctx) {
        this.$emit('change', this.searchPhrase)
      },

      onSearchKeyup() {
        clearTimeout(this.timeout)
        this.timeout = setTimeout(() => {
          this.onSearch()
        }, this.keyUpTimeout || 300)
      }
    },
    components : {
      'b-form-input': bFormInput,
    }
  }
</script>

<template>
  <b-form-input v-model="searchPhrase" v-on:change="onSearch" v-on:keyup.native="onSearchKeyup"/>
</template>
