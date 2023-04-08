<template>
  <div class="side-menu-container">
    <div class="menu-group">
      <router-link to="/detaildosen" class="menu" style="display: block">Biografi</router-link>
      <!--                <a href="#" class="menu">Biografi</a>-->
    </div>
    <div class="menu-group">
      <router-link to="/credential" class="menu" style="display: block">Credential</router-link>
      <!--                <a href="#" class="menu">Credential</a>-->
    </div>
    <div class="menu-group">
      <router-link to="/publikasi" class="menu" style="display: block">Penelitian dan Publikasi</router-link>
      <!--                <a href="#" class="menu">Penelitian dan Publikasi</a>-->
    </div>
    <div class="menu-group">
      <router-link to="/buku" class="menu" style="display: block">Buku</router-link>
      <!--                <a href="#" class="menu">Buku</a>-->
    </div>
    <div class="menu-group">
      <router-link to="/roadmapdosen" class="menu" style="display: block">Roadmap</router-link>
      <!--                <a href="#" class="menu">Roadmap</a>-->
    </div>
  </div>
</template>

<script>
export default {
  name: "SidemenuDosen"
}
</script>

<style scoped>

</style>