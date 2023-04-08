<template>
  <div>
    <!-- ---------- JUMBOTRON SMALL ---------- -->
    <JumbotronSmall></JumbotronSmall>
    <!-- ---------- JUMBOTRON SMALL END ---------- -->

    <div class="main-container flex-h between">
      <!-- ---------- SIDE MENU ---------- -->
      <SidemenuProfile></SidemenuProfile>
      <!-- ---------- SIDE MENU END ---------- -->

      <div class="profil-container">
        <div>
          <h1>Roadmap</h1>
          <div class="profil-title"></div>
        </div>

        <div class="roadmap-container mt-30">

        </div>
      </div>

    </div>

    <!-- ---------- FOOTER ---------- -->
    <FooterComponent></FooterComponent>
    <!-- ---------- FOOTER END ---------- -->
  </div>
</template>

<script>
import JumbotronSmall from "@/components/jumbotron-small";
import SidemenuProfile from "@/components/sidemenu-profile";
import FooterComponent from "@/components/footer-component.vue";

export default {
  name: "RoadmapLab",
  components: {
    SidemenuProfile,
    JumbotronSmall,
    FooterComponent
  }
}
</script>