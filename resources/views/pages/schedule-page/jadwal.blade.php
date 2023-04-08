<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab Riset: Jadwal Lab</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <script>
        n =  new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
    </script>
</head>
<body>

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
            <h1>Jadwal Lab</h1>
            <a href="{{ Route('home-page') }}">Home</a><span> /</span>
            <a>Jadwal</a>
        </div>
    </div>
    <!-- ---------- JUMBOTRON SMALL END ---------- -->

    <div class="main-container flex-h between">
        <div class="form-container">
            <h3>Formulir Peminjaman Lab</h3>
            
            <div class="mt-30">
                <div class="mb-20">
                    <label>Nama</label>
                    <input value="{{ Auth::user()->name }}" type="text" class="form-ctrl input-border form-pinjam" name="" required disabled>
                </div>
                <div class="mb-20">
                    <label>NPM</label>
                    <input type="text" class="form-ctrl input-border form-pinjam" name="" required>
                </div>
                <div class="mb-20">
                    <label>Angkatan</label>
                    <input type="text" class="form-ctrl input-border form-pinjam" name="" required>
                </div>
                <div class="mb-20">
                    <label>Email</label>
                    <input value="{{ Auth::user()->email }}" type="email" class="form-ctrl input-border form-pinjam" name="" required disabled>
                </div>
                <div class="mb-20">
                    <label>Tanggal</label>
                    <input id="date"type="date" class="form-ctrl input-border form-pinjam" name="" required>
                </div>
                <div class="mb-20">
                    <label>Waktu</label>
                    <input type="time" class="form-ctrl input-border form-pinjam" name="" required>
                </div>
                <div class="mb-20">
                    <label>Keperluan</label>
                    <input type="text" class="form-ctrl input-border form-pinjam" name="" required>
                </div>
            </div>
            <div>
                <a href="" class="btn btn-navy-solid mt-30">Kirim</a>
            </div>
        </div>

        <div class="schedule-container">
<!--            <h2>Jadwal Lab</h2>-->
            <table class="schedule-table-head">
                <thead>
                    <tr align="center" >
                        <th class="date-time">Tanggal dan Waktu</th>
                        <th class="nama-npm">Nama</th>
                        <th class="desc">Keperluan</th>
                    </tr>
                </thead>
            </table>

            <div class="table-container bg-grey">
                <table class="schedule-table">
                    <tbody>
                        @foreach ($ruangan as $rl)
                        <tr>
                            <td class="date-time">
                                <h3>{{ date('d/m/Y', strtotime($rl->tgl_peminjaman)); }}</h3>
                                <p>09:00 - 10:00</p>
                            </td>
                            <td class="nama-npm">
                                <p style="font-weight: bold">{{ $rl->name }}</p>
                                <p>197006028</p>
                            </td>
                            <td class="desc">
                                <p>{{ $rl->keterangan_keperluan }}</p>
                            </td>
                        </tr>
                        @endforeach
                        {{-- <tr>
                            <td class="date-time">
                                <h3>28 Okt 2022</h3>
                                <p>09:00 - 10:00</p>
                            </td>
                            <td class="nama-npm">
                                <p style="font-weight: bold">Muhammad Ghibran Al Khamaeni</p>
                                <p>197006056</p>
                            </td>
                            <td class="desc">
                                <p>Pengerjaan Tugas Akhir</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="date-time">
                                <h3>28 Okt 2022</h3>
                                <p>09:00 - 10:00</p>
                            </td>
                            <td class="nama-npm">
                                <p style="font-weight: bold">Muhammad Ghibran Al Khamaeni</p>
                                <p>197006056</p>
                            </td>
                            <td class="desc">
                                <p>Pengerjaan Tugas Akhir</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="date-time">
                                <h3>28 Okt 2022</h3>
                                <p>09:00 - 10:00</p>
                            </td>
                            <td class="nama-npm">
                                <p style="font-weight: bold">Muhammad Ghibran Al Khamaeni</p>
                                <p>197006056</p>
                            </td>
                            <td class="desc">
                                <p>Pengerjaan Tugas Akhir</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="date-time">
                                <h3>28 Okt 2022</h3>
                                <p>09:00 - 10:00</p>
                            </td>
                            <td class="nama-npm">
                                <p style="font-weight: bold">Muhammad Ghibran Al Khamaeni</p>
                                <p>197006056</p>
                            </td>
                            <td class="desc">
                                <p>Pengerjaan Tugas Akhir</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="date-time">
                                <h3>28 Okt 2022</h3>
                                <p>09:00 - 10:00</p>
                            </td>
                            <td class="nama-npm">
                                <p style="font-weight: bold">Muhammad Ghibran Al Khamaeni</p>
                                <p>197006056</p>
                            </td>
                            <td class="desc">
                                <p>Pengerjaan Tugas Akhir</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="date-time">
                                <h3>28 Okt 2022</h3>
                                <p>09:00 - 10:00</p>
                            </td>
                            <td class="nama-npm">
                                <p style="font-weight: bold">Muhammad Ghibran Al Khamaeni</p>
                                <p>197006056</p>
                            </td>
                            <td class="desc">
                                <p>Pengerjaan Tugas Akhir</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="date-time">
                                <h3>28 Okt 2022</h3>
                                <p>09:00 - 10:00</p>
                            </td>
                            <td class="nama-npm">
                                <p style="font-weight: bold">Muhammad Ghibran Al Khamaeni</p>
                                <p>197006056</p>
                            </td>
                            <td class="desc">
                                <p>Pengerjaan Tugas Akhir</p>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>

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

</body>
</html>