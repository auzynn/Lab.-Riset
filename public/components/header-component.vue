<template>
  <header>
    <nav>
      <div class="logo flex-h">
        <img src="../assets/logo-unsil.png" class="h-40">
        <div class="ml-10">
          <h1>LAB RISET</h1>
        </div>
      </div>

      <ul>
        <li class="nav-hover" :class="{activenav: menu === 'home'}" v-on:click="menu = 'home'">
          <router-link to="/">Beranda</router-link>
<!--          <a href="#">Beranda</a>-->
        </li>

        <li class="nav-hover" :class="{activenav: menu === 'profil'}" v-on:click="menu = 'profil'">
          <router-link to="/kepalalab">Profil</router-link>
<!--          <a href="pages/profile-page/kepala-lab.html">Profil</a>-->
        </li>

        <li class="nav-hover" :class="{activenav: menu === 'jadwal'}" v-on:click="menu = 'jadwal'">
          <router-link to="/jadwallab">Jadwal Lab</router-link>
<!--          <a href="#">Jadwal Lab</a>-->
        </li>
        <!--            <li class="nav-hover"><a href="#">Hai, Muh Ghibran Al K</a></li>-->
        <li>
          <router-link to="/login" class="btn btn-navy-border btn-width-80" style="font-weight: bold">Login</router-link>
<!--          <a href="../login-page.html" class="btn btn-navy-border btn-width-80" style="font-weight: bold">Login</a>-->
        </li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  name: "HeaderComponent",
  data() {
    return {
      menu: "home"
    }
  }
}
</script>

<style>
@import'../assets/style/style.css';
</style>