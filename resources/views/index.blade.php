<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab Riset Prodi Informatika</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="style/style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>
<body>

<div id="app">
<!-- ---------- NAVBAR ---------- -->
<header-component></header-component>
<!-- ---------- NAVBAR END ---------- -->

<main>
    <!-- ---------- JUMBOTRON ---------- -->
    <div id="landing-page" class="jumbotron">
        <article>
            <h1>Sistem Informasi Lab Riset</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque autem cumque quia repudiandae sit soluta voluptatum. Culpa earum ex facilis iure iusto libero odio repellendus soluta temporibus veritatis! Facere?</p>
        </article>
    </div>
    <!-- ---------- JUMBOTRON END ---------- -->

    <!-- ---------- ROADMAP ---------- -->
    <div id="profil" class="main-container">
        <div class="flex-h">
            <article class="lp-roadmap mr-50">
                <h1>Roadmap Lab Riset<br>KK JKF</h1>
                <p class="mt-30" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque consequuntur, culpa dicta ea eum explicabo fugiat in labore minus modi nesciunt optio perferendis perspiciatis porro quasi sed similique vel!</p>

                <div class="mt-50">
                    <a href="pages/profile-page/kepala-lab.html" class="btn btn-width-80 btn-yellow-border" style="color: #FFB057; font-weight: bold">Lihat</a>
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
    <div id="partner" class="main-container">
        <div class="flex-h center">
            <h2 class="border-b btn-width-100">Kerja Sama</h2>
        </div>
        <div class="flex-h evenly mt-30">
            <img src="assets/partner-logo/microsoft.png" class="h-30">
            <img src="assets/partner-logo/oracle.png" class="h-20" style="margin-top: 7px">
            <img src="assets/partner-logo/mikrotik.png" class="h-30">
            <img src="assets/partner-logo/pearson-vue.png" class="h-30">
            <img src="assets/partner-logo/redhat.png" class="h-30">
        </div>
    </div>
    <!-- ---------- PARTNER END ---------- -->
</main>

<!-- ---------- FOOTER ---------- -->
<footer-component></footer-component>
<!-- ---------- FOOTER END ---------- -->
</div>

<!--<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>-->
<script src="https://unpkg.com/vue@2/dist/vue.js"></script>
<script>
    Vue.component('header-component', {
        template: `
        <header>
            <nav>
                <div class="logo flex-h">
                    <img src="assets/logo-unsil.png" class="h-40">
                    <div class="ml-10">
                        <h1>LAB RISET</h1>
                    </div>
                </div>

                <ul>
                    <li class="nav-hover"><a href="#">Beranda</a></li>
                    <li class="nav-hover"><a href="pages/profile-page/kepala-lab.html">Profil</a></li>
                    <li class="nav-hover"><a href="#">Jadwal Lab</a></li>
        <!--            <li class="nav-hover"><a href="#">Hai, Muh Ghibran Al K</a></li>-->
                    <li><a href="login-page.html" class="btn btn-navy-border btn-width-80" style="font-weight: bold">Login</a></li>
                </ul>
            </nav>
        </header>
    `
    })

    Vue.component('footer-component', {
        template: `
        <footer>
            <div class="flex-h between">
                <article class="ft-about">
                    <h1>LAB RISET KK JKF</h1>
                    <div class="border-b btn-width-100 mb-30"></div>
                    <p>Universitas Siliwangi<br>Jl. Siliwangi No.24, Kahuripan, Kec. Tawang, Kab. Tasikmalaya, Jawa Barat 46115</p>
                </article>

                <article class="ft-partner">
                    <h3>Kerja Sama</h3>
                    <div class="border-b btn-width-50 mb-30"></div>
                    <ul>
                        <li><a href="#">Microsoft</a></li>
                        <li><a href="#">Oracle</a></li>
                        <li><a href="#">Mikrotik</a></li>
                        <li><a href="#">Pearson Vue</a></li>
                        <li><a href="#">Red Hat</a></li>
                    </ul>
                </article>

                <article class="ft-socmed">
                    <h3>Kontak Kami</h3>
                    <div class="border-b btn-width-50 mb-30"></div>
                    <ul>
                        <li>+62 821 2060 xxxx</li>
                        <li>labriset@unsil.ac.id</a></li>
        <!--                <li><a href="#">Cisco</a></li>-->
                    </ul>
                </article>
            </div>

            <div class="copyright">
                <p>Copyright 2022 - Lab JKF Prodi Informatika Universitas Siliwangi</p>
            </div>
        </footer>
        `
    })

    const vm = new Vue({
        el: '#app',
        data: {

        },
        methods: {

        },
        computed: {

        }
    })
</script>

</body>
</html>