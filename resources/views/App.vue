<template>
  <div id="app">
    <!-- ---------- NAVBAR ---------- -->
    <HeaderComponent></HeaderComponent>
    <!-- ---------- NAVBAR END ---------- -->
    <router-view></router-view>
  </div>
</template>

<script>
import HeaderComponent from '@/components/header-component.vue'

export default {
  name: 'RootComponent',
  components: {
    HeaderComponent
  }
}
</script>

<style>
@import'assets/style/style.css';
</style>
