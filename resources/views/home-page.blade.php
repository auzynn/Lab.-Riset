<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab Riset Prodi Informatika</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>
<body>

<!-- ---------- NAVBAR ---------- -->
<header>
    <nav>
        <div class="logo flex-h">
            <img src="assets/logo-unsil.png" class="h-40">
            <div class="ml-10">
                <h1>LAB RISET</h1>
            </div>
        </div>

        <ul>
            <li class="nav-hover"><a href="{{ Route('home-page') }}">Beranda</a></li>
            <li class="nav-hover"><a href="{{ Route('profil') }}">Profil</a></li>
            <li class="nav-hover"><a href="{{ Route('jadwallab') }}">Jadwal Lab</a></li>
            <!--            <li class="nav-hover"><a href="#">Hai, Muh Ghibran Al K</a></li>-->
            <li><a href="{{ Route('login') }}" class="btn btn-navy-border btn-width-80" style="font-weight: bold">Logout</a></li>
        </ul>
    </nav>
</header>
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

    <div class="main-container">

    </div>

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

</body>
</html>