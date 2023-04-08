<template>
  <div class="side-menu-container">
    <div class="menu-group">
      <router-link to="/kepalalab" class="menu" style="display: block" :class="{activemenu: menu === 'kalab'}" v-on:click="sidemenu = 'kalab'">Kepala Lab</router-link>
      <!--                <router-link to="/" class="menu" style="display: block">Kepala Lab</router-link>-->
      <!--                <a href="#" class="menu">Kepala Lab</a>-->
    </div>
    <div class="menu-group">
      <router-link to="/visimisi" class="menu" style="display: block" :class="{activemenu: menu === 'visi'}" v-on:click="sidemenu = 'visi'">Visi dan Misi</router-link>
      <!--                <router-link to="/visimisi" class="menu" style="display: block">Visi dan Misi</router-link>-->
      <!--                <a href="visi-misi.html" class="menu">Visi dan Misi</a>-->
    </div>
    <div class="menu-group">
      <router-link to="/listdosen" class="menu" style="display: block" :class="{activemenu: menu === 'list'}" v-on:click="sidemenu = 'list'">Profil Dosen</router-link>
      <!--                <a href="list-dosen.html" class="menu">Profil Dosen</a>-->
    </div>
    <div class="menu-group">
      <router-link to="/roadmaplab" class="menu" style="display: block" :class="{activemenu: menu === 'rmlab'}" v-on:click="sidemenu = 'rmlab'">Roadmap</router-link>
      <!--                <a href="#" class="menu">Roadmap</a>-->
    </div>
  </div>
</template>

<script>
export default {
  name: "SidemenuProfile",
  data() {
    return {
      menu: "kalab"
    }
  }
}
</script>

<style>
@import'../assets/style/style.css';
</style>