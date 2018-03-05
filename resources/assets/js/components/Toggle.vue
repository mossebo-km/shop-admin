<template>
    <label class="switch switch-info"><input type="checkbox" v-on:click="onChange" v-model="rChecked"><span></span></label>
</template>

<script>
  export default {
    name: 'toggle',
    props:['checked'],
    data() {
      return {
        rChecked: this.checked
      }
    },
    methods: {
      onChange: function() {
        this.rChecked = !this.rChecked
        this.$emit('change', this.rChecked)
      }
    }
  }
</script>