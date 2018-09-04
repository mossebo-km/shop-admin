<script>
  import ColorPicker from 'v-color'
  import bDropdown from 'bootstrap-vue/es/components/dropdown/dropdown'
  import bDropdownItem from 'bootstrap-vue/es/components/dropdown/dropdown-item'

  export default {
    name: 'color-select',

    components: {
      ColorPicker,
      bDropdown,
      bDropdownItem
    },

    props: [
      'color'
    ],

    data() {
      return {
        active: false
      }
    },

    mounted() {
      window.addEventListener('click', this.handleClick, {passive: true})
      window.addEventListener('touchend', this.handleClick, {passive: true})
      window.addEventListener('keydown', this.handleKeydown, {passive: true})
    },

    beforeDestroy() {
      window.removeEventListener('click', this.handleClick)
      window.removeEventListener('touchend', this.handleClick)
      window.removeEventListener('keydown', this.handleKeydown)
    },

    methods: {
      setColor(color) {
        this.$emit('change', color)
      },

      handleKeydown(e) {
          let code = e.keyCode || e.which

          if (this.active && code === 27) {
            this.deactivate()
          }
      },

      handleClick(e) {
        if (this.$el.contains(e.target)) {
          if (! this.active) {
            this.activate()
          }
        }
        else {
          if (this.active) {
            this.deactivate()
          }
        }
      },

      activate() {
        this.active = true
      },

      deactivate() {
        this.active = false
      }
    }
  }
</script>

<style>
  .input-group-addon {
    padding: 0;
    overflow: hidden;
  }

  .color-preview {
    width: 100%;
    height: 32px;
  }

  .color-select {
    position: relative;
  }

  .color-select__picker {
    position: absolute;
    z-index: 10;
  }
</style>

<template>
  <div class="color-select">
    <div class="input-group">
      <input type="text" :value="color" @input.prevent class="form-control">

      <span class="input-group-addon">
        <div class="color-preview" :style="{backgroundColor: color}"></div>
      </span>
    </div>

    <div v-show="active" class="color-select__picker">
      <color-picker
        :color="color || undefined"
        @change="setColor"
      ></color-picker>
    </div>
  </div>
</template>