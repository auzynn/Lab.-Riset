<template>
  <main>
    <!-- ---------- JUMBOTRON ---------- -->
    <JumbotronDefault></JumbotronDefault>
    <!-- ---------- JUMBOTRON END ---------- -->

    <!-- ---------- ROADMAP ---------- -->
    <div id="profil" class="main-container">
      <div class="flex-h">
        <article class="lp-roadmap mr-50">
          <h1>Roadmap Lab Riset<br>KK JKF</h1>
          <p class="mt-30" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque consequuntur, culpa dicta ea eum explicabo fugiat in labore minus modi nesciunt optio perferendis perspiciatis porro quasi sed similique vel!</p>

          <div class="mt-50">
            <router-link to="/roadmaplab" class="btn btn-width-80 btn-yellow-border" style="color: #FFB057; font-weight: bold">Lihat</router-link>
<!--            <a href="../views/roadmap-lab.vue" class="btn btn-width-80 btn-yellow-border" style="color: #FFB057; font-weight: bold">Lihat</a>-->
          </div>
        </article>

        <div class="lp-roadmap ml-50">
          <div class="roadmap-img">
            <img src="">
          </div>
        </div>
      </div>
    </div>
    <!-- ---------- ROADMAP END ---------- -->

    <!-- ---------- DENAH ---------- -->
    <div id="lokasi" class="main-container bg-grey">
      <div class="flex-h center">
        <h2 class="border-b btn-width-80">Lokasi</h2>
      </div>
      <div class="map-container mt-30">

      </div>
    </div>
    <!-- ---------- DENAH END ---------- -->

    <!-- ---------- PARTNER ---------- -->
    <PartnerComponent></PartnerComponent>
    <!-- ---------- PARTNER END ---------- -->
    <FooterComponent></FooterComponent>
  </main>
</template>

<script>
// @ is an alias to /src
import JumbotronDefault from '@/components/jumbotron-default.vue'
import PartnerComponent from '@/components/partner.vue'
import FooterComponent from '@/components/footer-component.vue'


export default {
  name: 'HomePage',
  components: {
    JumbotronDefault,
    PartnerComponent,
    FooterComponent
  }
}
</script>
