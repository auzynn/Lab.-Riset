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
          <h1>Profil Dosen</h1>
          <div class="profil-title"></div>
        </div>

        <div class="flex-v mt-30">
          <div class="profil-dosen">
            <div class="dosen-photo-120">
              <img src="../assets/foto-dosen/nur-widiyasono.jpg">
            </div>

            <div class="profil-desc flex-v between ml-30">
              <div>
                <h2>Ir. Nur Widiyasono, S.Kom., M.Kom., CEH., CHFI., CITAP., MCE.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="flex-h between">
                <div class="publish-icon flex-h">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                </div>
                <div class="detail">
                  <router-link to="/detaildosen">Detail</router-link>
<!--                  <a href="detail-dosen.html">Detail</a>-->
                </div>
              </div>
            </div>
          </div>

          <div class="profil-dosen">
            <div class="dosen-photo-120">
              <img src="../assets/foto-dosen/nur-widiyasono.jpg">
            </div>

            <div class="profil-desc flex-v between ml-30">
              <div>
                <h2>Ir. Nur Widiyasono, S.Kom., M.Kom., CEH., CHFI., CITAP., MCE.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="flex-h between">
                <div class="publish-icon flex-h">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                </div>
                <div class="detail">
                  <router-link to="/detaildosen">Detail</router-link>
<!--                  <a href="detail-dosen.html">Detail</a>-->
                </div>
              </div>
            </div>
          </div>

          <div class="profil-dosen">
            <div class="dosen-photo-120">
              <img src="../assets/foto-dosen/nur-widiyasono.jpg">
            </div>

            <div class="profil-desc flex-v between ml-30">
              <div>
                <h2>Ir. Nur Widiyasono, S.Kom., M.Kom., CEH., CHFI., CITAP., MCE.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="flex-h between">
                <div class="publish-icon flex-h">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                </div>
                <div class="detail">
                  <router-link to="/detaildosen">Detail</router-link>
<!--                  <a href="detail-dosen.html">Detail</a>-->
                </div>
              </div>
            </div>
          </div>

          <div class="profil-dosen">
            <div class="dosen-photo-120">
              <img src="../assets/foto-dosen/nur-widiyasono.jpg">
            </div>

            <div class="profil-desc flex-v between ml-30">
              <div>
                <h2>Ir. Nur Widiyasono, S.Kom., M.Kom., CEH., CHFI., CITAP., MCE.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="flex-h between">
                <div class="publish-icon flex-h">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                </div>
                <div class="detail">
                  <router-link to="/detaildosen">Detail</router-link>
<!--                  <a href="detail-dosen.html">Detail</a>-->
                </div>
              </div>
            </div>
          </div>

          <div class="profil-dosen">
            <div class="dosen-photo-120">
              <img src="../assets/foto-dosen/nur-widiyasono.jpg">
            </div>

            <div class="profil-desc flex-v between ml-30">
              <div>
                <h2>Ir. Nur Widiyasono, S.Kom., M.Kom., CEH., CHFI., CITAP., MCE.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="flex-h between">
                <div class="publish-icon flex-h">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                  <img src="../assets/logo-publikasi/google-scholar.png" class="logo-publikasi">
                </div>
                <div class="detail">
                  <router-link to="/detaildosen">Detail</router-link>
<!--                  <a href="detail-dosen.html">Detail</a>-->
                </div>
              </div>
            </div>
          </div>
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
import FooterComponent from "@/components/footer-component";

export default {
  name: "ListDosen",
  components: {
    FooterComponent,
    SidemenuProfile,
    JumbotronSmall
  }
}
</script>

<style>

</style>