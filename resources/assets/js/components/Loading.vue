<script>
  export default {
    name: 'loading',
    props: ['loading'],
  }
</script>

<template>
  <div class="loading-wrap" v-bind:class="{'loaded': !loading}">
    <transition name="fade">
      <div v-if="loading" class="loading-wrap__spinner">
        <i class="fa fa-spinner fa-4x fa-spin"></i>
      </div>
    </transition>

    <transition name="fade">
      <div v-if="!loading" class="loading-wrap__content">
        <slot></slot>
      </div>
    </transition>
  </div>
</template>

