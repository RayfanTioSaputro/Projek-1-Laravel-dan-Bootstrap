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
                            <a class="nav-link" href="/blog/profil" style="color: #ffcc00;">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/pengalaman">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/portofolio">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section id="profil1">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4 mt-5" data-aos="fade-right" data-aos-duration="1000">
                        <img class="me2" src="{{('/images/ray2.png')}}">
                    </div>
                    <div class="col-md-6" style="margin-top: 40px;" data-aos="fade-left" data-aos-duration="1000">
                        <h1 class="name2">Rayfan<br><span class="stroke">Tio Saputro</span></h1>
                        <h1 class="job">Front-End Developer | UI/UX Designer</h1>
                    </div>
                    <div class="col-md-2" style="padding-top: 195px; padding-left: 50px;" data-aos="fade-left" data-aos-duration="1000">
                        <ul class="sosial-media list-unstyled" style="margin-left: 8px; margin-bottom: 75px;">
                            <li><a href="https://www.facebook.com/rayfan.tiosaputro/" target="blank" style="margin-left: -15px; color: #000;"><span class="fab fa-facebook-f" style="font-size: 21px;"></span></a></li>
                            <li><a href="https://www.instagram.com/rayfandesign/" target="blank" style="margin-left: -15px; color: #000; margin-right: 8px;"><span class="fab fa-instagram" style="font-size: 24px;"></span></a></li>
                            <li><a href="https://www.behance.net/rayfansaputro/" target="blank" style="margin-left: -15px; color: #000;"><span class="fab fa-behance" style="font-size: 24px;"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-5">
                        
                    </div>
                    <div class="col-md 8" style="margin-top: -115px;">
                        <hr>
                    </div>
                </div>
                <div class="row" data-aos="fade-left" data-aos-duration="1000">
                    <div class="col-md-4 mt-5">
                        
                    </div>
                    <div class="col" style="margin-top: -125px; margin-right: 50px;">
                        <h6 class="bio-judul">Tempat Tinggal</h6><br>
                        <p class="bio">Jl. H. Dimun, Gg. Damai 2, Rt 02/022, Depok</p>
                    </div>
                    <div class="col" style="margin-top: -125px; margin-right: 50px;">
                        <h6 class="bio-judul">Tempat/Tanggal Lahir</h6><br>
                        <p class="bio">Depok, 24 Juni 2003</p>
                    </div>
                    <div class="col" style="margin-top: -125px;">
                        <h6 class="bio-judul">Sekolah</h6><br>
                        <p class="bio">SMK Taruna Bhakti</p>
                    </div>
                </div>
            </div>       
        </section>
        <section id="profil2" style="margin-top: -20px;" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" style="margin-top: 24px;">
                        <h1 class="job" style="margin-left: 220px;">ABOUT ME</h1>
                    </div>
                    <div class="col-md-8" style="margin-top: 47px;">
                        <p class="text mb-5">
                            Hello! Saya Rayfan Tio Saputro, seseorang yang sedang 
                            mempelajari Front-End Development serta UI/UX Design. 
                            Saat ini saya bersekolah di SMK Taruna Bhakti dan mengambil jurusan RPL (Rekayasa Perangkat Lunak). 
                            Di dunia programming saya tergolong pemula, karena baru terjun sekitar 2 tahun yang lalu
                            
                            <br><br>
                            Awal saat belajar coding, saya cukup kesulitan. 
                            Itu bukan tanpa alasan, karena pada dasarnya saya lebih menyukai desain ketimbang programming.
                            Itulah kenapa saya mengambil bidang Front-End Development.
                            Di bidang tersebut saya bisa mendesain tampilan website maupun aplikasi dengan semenarik mungkin.
                            Jadi saat ini saya sudah mulai enjoy di bidang saya. :)
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="foo text-center" style="margin-top: 100px;">
                made by rayfan.
            </div>
        </section>`
    </div>
    
@endsection