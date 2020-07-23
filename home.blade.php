@extends('master')
@section('konten')
    <div class="sections">
        <section id="navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <i><h1 class="logo">rayyy<span class="dot">.</span></h1></i>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="/blog" style="color: #ffcc00;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/profil">Profile</a>
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
        <section id="banner">
            <div class="i">
                <img class="me" src="{{('images/ray2.png')}}">
                <center><h1 class="name">i'm rayfan</h1></center>
                <center><h7>Front-End Developer | UI/UX Designer</h7></center>
                <div>
                    <center><a href="/blog/profil"><button class="btn1 mt-5">About Me</button></a></center>
                </div>
            </div>
        </section>
    </div>

@endsection