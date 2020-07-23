@extends('master')
@section('konten')
    <div class="sections">
        <section id="navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <i><h1 class="logo">rayyy<span class="dot">.</span></h1></i>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/profil">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/pengalaman" style="color: #ffcc00;">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/portofolio">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section id="pengalaman">
            <div class="container mt-5">
                  <div class="row" data-aos="fade-left" data-aos-duration="1000">
                    <div class="col-md-2 mt-5">
                        <img class="fotoexp" style="width: 322px;" src="{{('/images/android.jpg')}}">
                    </div>
                    <div class="col-md-1 mt-5 vertikal"></div>
                    <div class="col-md-9" style="margin-top: 42px; margin-left: -75px;">
                        <h1 class="exp">Tutor Sebaya - Membuat Aplikasi Mengaji</h1>
                        <h1 class="date mb-3">November, 2018</h1>
                        <p class="text">
                          Waktu masih kelas 10, pada saat itu kakak kelas 
                          memberikan pengajaran membuat aplikasi mobile menggunakan Android Studio.
                          Aplikasi yang dibuat merupakan aplikasi mengaji sederhana. 
                          Tidak lebih dari 12 jam, aplikasi tersebut sudah dapat digunakan dan tidak ada error. 
                          Dan ada sekitar 6 orang kakak kelas yang menjadi tutor.
                        </p>
                    </div>
                </div>
                <div class="row mt-3" data-aos="fade-right" data-aos-duration="1000">
                    <div class="col-md-2 mt-5">
                        <img class="fotoexp" style="width: 300px;" src="{{('/images/kunjin.jpg')}}">
                    </div>
                    <div class="col-md-1 vertikal" style="margin-top: -50px;"></div>
                    <div class="col-md-9" style="margin-top: 42px; margin-left: -75px;">
                        <h1 class="exp">Kunjungan Industri di Keboen Coding</h1>
                        <h1 class="date mb-3">Desember, 2018</h1>
                        <p class="text">
                          Sebulan setelah program tutor sebaya, diadakan program kunjungan 
                          industri ke perusahaan yang berkaitan dengan jurusan.
                          Saat itu kelompok saya memilih Keboen Coding yang sejatinya 
                          merupakan sebuah komunitas untuk menjadi destinasi kunjungan industri.
                          Di sana tempatnya sangat asri dan tidak bising, jadi sangat nyaman untuk mengerjakan projek.
                        </p>
                    </div>
                </div>
                <div class="row mt-3" data-aos="fade-right" data-aos-duration="1000">
                    <div class="col-md-2 mt-5">
                        <img class="fotoexp" style="width: 332px; margin-left: -100px;" src="{{('/images/permata.jpg')}}">
                    </div>
                    <div class="col-md-1 vertikal" style="height: 250px; margin-top: -20px"></div>
                    <div class="col-md-9" style="margin-top: 42px; margin-left: -75px;">
                        <h1 class="exp">Seminar Permata Youthpreneur</h1>
                        <h1 class="date mb-3">Maret, 2019</h1>
                        <p class="text mb-5">
                          Ini ketika saya sudah naik ke kelas 11. 
                          Saat itu Permata Bank mengundang siswa/i dari 
                          SMK Taruna Bhakti untuk menghadiri seminar dari program Permata Youthpreneur.
                          Permata Youthpreneur sendiri adalah pelatihan di bidang kewirausahaan, 
                          meliputi <i>startup digital,</i> <i>coding,</i> bisnis model, dan literasi keuangan. 

                          
                        </p>
                    </div>
                </div>
                <div class="row" style="margin-top: -10px;" data-aos="fade-left" data-aos-duration="1000">
                    <div class="col-md-2" style="margin-top: 45px; margin-left: 20px;">
                        <img class="fotoexp" style="width: 345px; margin-left: -100px;" src="{{('/images/starbhakday.jpg')}}">
                    </div>
                    <div class="col-md-1 vertikal" style="height: 288px; margin-top: -60px; margin-left: 30px;"></div>
                    <div class="col-md-9" style="margin-top: 42px; margin-left: -75px;">
                        <h1 class="exp">Starbhak Day</h1>
                        <h1 class="date mb-3">February, 2020</h1>
                        <p class="text mb-5">
                          Masih dikelas 11, saat itu sedang diadakan 
                          <i>event</i> Starbhak Day yang diadakan oleh SMK Taruna Bhakti. 
                          Pada <i>event</i> tersebut diwajibkan bagi kelas 11 dan kelas 12 untuk membuat suatu yang nantinya akan dipamerkan. 
                          Jadi saya beserta teman yang berjumlah 4 orang membuat aplikasi Sarpras Starbhak yang bertujuan untuk membantu mengatur peminjaman barang di sarpras sekolah.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="foo text-center">
                made by rayfan.
            </div>
        </section>`
    </div>

@endsection