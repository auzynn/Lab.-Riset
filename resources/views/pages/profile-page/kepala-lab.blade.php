<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab Riset: Profil</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>
<body>
<div  id="app">
<!-- ---------- NAVBAR ---------- -->
<header>
    <nav>
        <div class="logo flex-h">
            <img src="../../assets/logo-unsil.png" class="h-40">
            <div class="ml-10">
                <h1>LAB RISET</h1>
            </div>
        </div>

        <ul>
            <li class="nav-hover"><a href="{{ Route('home-page') }}">Beranda</a></li>
            <li class="nav-hover"><a href="{{ Route('profil') }}">Profil</a></li>
            <li class="nav-hover"><a href="{{ Route('jadwallab') }}">Jadwal Lab</a></li>
<!--            <li class="nav-hover"><a href="#">Hai, Username</a></li>-->
            <li><a href="{{ Route('login') }}" class="btn btn-navy-border btn-width-80" style="font-weight: bold">Logout</a></li>
        </ul>
    </nav>
</header>
<!-- ---------- NAVBAR END ---------- -->

<main>
    <!-- ---------- JUMBOTRON SMALL ---------- -->
    <div class="jumbotron-small">
        <div>
            <h1>Profil</h1>
            <a href="#">Home</a><span> /</span>
            <a>Profil</a>
        </div>
    </div>
    <!-- ---------- JUMBOTRON SMALL END ---------- -->

    <div class="main-container flex-h between">
        <!-- ---------- SIDE MENU ---------- -->
        <div class="side-menu-container">
            <div class="menu-group">
                <router-link to="/" class="menu" style="display: block">Kepala Lab</router-link>
<!--                <router-link to="/" class="menu" style="display: block">Kepala Lab</router-link>-->
<!--                <a href="#" class="menu">Kepala Lab</a>-->
            </div>
            <div class="menu-group">
                <router-link to="/visimisi" class="menu" style="display: block">Visi dan Misi</router-link>
<!--                <router-link to="/visimisi" class="menu" style="display: block">Visi dan Misi</router-link>-->
<!--                <a href="visi-misi.html" class="menu">Visi dan Misi</a>-->
            </div>
            <div class="menu-group">
                <a href="list-dosen.html" class="menu">Profil Dosen</a>
            </div>
            <div class="menu-group">
                <a href="#" class="menu">Roadmap</a>
            </div>
        </div>
        <!-- ---------- SIDE MENU END ---------- -->

        <router-view></router-view>

    </div>
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
</div>

<script src="https://unpkg.com/vue@2/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router@3/dist/vue-router.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>-->

<script>
    const KepalaLab = {
        template: `
        <div class="flex-v profil-container">
            <div class="flex-h around">
                <div class="dosen-photo-250">
                    <img src="../../assets/foto-dosen/nur-widiyasono.jpg">
                </div>
            </div>
            <div class="flex-h around mt-30">
                <h2> Ir. Nur Widiyasono, S.Kom., M.Kom., CEH., CHFI., CITAP., MCE.</h2>
            </div>

            <table style="width: 100%; margin-top: 20px">
                <tbody>
                <tr style="height: 23px;">
                    <td style="width: 21.8243%; height: 23px;">&nbsp;Jenis Kelamin</td>
                    <td style="width: 68.1757%; height: 23px;">&nbsp;: Laki-laki</td>
                </tr>
                <tr style="height: 23px;">
                    <td style="width: 21.8243%; height: 23px;">&nbsp;Jabatan Fungsional</td>
                    <td style="width: 68.1757%; height: 23px;">&nbsp;: Lektor</td>
                </tr>
                <tr style="height: 23px;">
                    <td style="width: 21.8243%; height: 23px;">&nbsp;NIDN</td>
                    <td style="width: 68.1757%; height: 23px;">&nbsp;: 310127203</td>
                </tr>
                <tr style="height: 23px;">
                    <td style="width: 21.8243%; height: 23px;">&nbsp;Tempat dan Tanggal Lahir</td>
                    <td style="width: 68.1757%; height: 23px;">&nbsp;: Jakarta, 10 Desmber 1972</td>
                </tr>
                <tr style="height: 23px;">
                    <td style="width: 21.8243%; height: 23px;">&nbsp;Email</td>
                    <td style="width: 68.1757%; height: 23px;">&nbsp;: nur.widiyasono@unsil.ac.id, nur.w095@gmail.com</td>
                </tr>
                <tr style="height: 23.5px;">
                    <td style="width: 21.8243%; height: 23.5px;">&nbsp;Nomor Telepon</td>
                    <td style="width: 68.1757%; height: 23.5px;">&nbsp;: 0819-0968-0432 / 0896-7641-6325</td>
                </tr>
                <tr style="height: 23px;">
                    <td style="width: 21.8243%; height: 23px;">&nbsp;Bidang Minat</td>
                    <td style="width: 68.1757%; height: 23px;">&nbsp;: Digital Forensik, Network Engineering, System Engineering, Internet of Things, AI4IoT, Cloud Computing, Security Engineering</td>
                </tr>
                </tbody>
            </table>
        </div>
        `
    }

    const VisiMisi = {
        template: `
        <div class="profil-container">
            <div>
                <h1>Visi dan Misi</h1>
                <div class="profil-title"></div>
            </div>

            <article class="mt-30" style="text-align: justify">
                <h3>Visi</h3>
                <p>Menjadi Laboratorium Fakultas Teknik yang memiliki
                    karakter wirausaha, menghasilkan sumber daya manusia
                    yang unggul dan berwawasan kebangsaan menuju kampus
                    bahagia di tahun 2026</p>
            </article>

            <article class="mt-30" style="text-align: justify">
                <h3>Misi</h3>
                <ol class="list-misi">
                    <li>Membangun ekosistem akademik di lingkungan Laboratorium Fakultas Teknik
                        dengan menjunjung tinggi kaidah-kaidah norma agama dan norma sosial, kebhinekaan
                        dan toleransi antar agama dan pemeluknya.</li>
                    <li>Mengembangkan Laboratorium untuk bidang ilmu Jaringan Komputer, Keamanan, Forensika
                        Digital dan Internet of Things (IoT) di lingkungan Fakultas Teknik dengan memanfaatkan
                        teknologi yang berkembang sehingga menghasilkan sumber daya manusia yang tangguh,
                        mandiri dan bertanggung jawab.</li>
                    <li>Mengembangkan Ilmu Pengetahuan dan Teknologi melalui kerjasama/kolaborasi penelitian dan
                        dan pengabdian masyarakat.</li>
                    <li>Melaksanakan pengabdian masyarakat sebagai wahana implementasi dari hasil penelitian
                        untuk menumbuhkan kewirausahaan bidang ilmu Jaringan Komputer, Forensika Digital dan
                        Internet of Things (IoT) dalam mendukung prioritas pembangunan nasional.</li>
                    <li>Melaksanakan layanan akademik mata kuliah praktikum dan layanan non-akademik berbasis
                        MBKM di lingkungan Fakultas Teknik ataupun Program Studi Informatika secara transparan,
                        akuntabel, kredibel, untuk menghasilkan sumber daya manusia yang memiliki daya saing global.</li>
                    <li>Meningkatkan dan mengembangkan harmonisasi kerjasama berbasis MBKM di lingkungan Program
                        Studi Informatika ataupun Fakultas Teknik pada skala nasional dan internasional yang
                        berkualitas untuk meningkatkan daya saing institusi menusu worl class-university (WCU).</li>
                    <li>Meningkatkan layanan yang dapat mendukung kegiatan kemahasiswaan menuju mahasiswa yang
                        kompetitif pada bidang keilmuan Jaringan Komputer, Forensika Digital dan Internet of Things
                        (IoT).</li>
                    <li>Mewujudkan Laboratorium yang dapat mendukung program Green Campus.</li>
                </ol>
            </article>
        </div>
        `
    }

    const routes = [
        { path: '/', component: KepalaLab},
        { path: '/visimisi', component: VisiMisi}
    ]

    const router = new VueRouter({
        routes // short for 'routes: routes'
    })

    const vm = new Vue({
        el: '#app',
        router,
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