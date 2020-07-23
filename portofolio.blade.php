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
                            <a class="nav-link" href="/blog/pengalaman">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/portofolio" style="color: #ffcc00;">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section id="portofolio">
            <div class="container mt-5">
                <div class="row mb-5">
                    <a href="#" class="project col-md-4 mb-5" style="text-decoration: none;">
                        <div class="card border-dark mt-5" style="width: 21.6rem; border-radius: 30px;" data-aos="flip-left" data-aos-duration="1200">
                            <span class="svg text-center mt-5"><i class="fas fa-pencil-ruler" style="font-size: 100px;"></i></span>
                            <div class="card-body mt-5 mb-4 ml-2 mr-2">
                                <p class="card-text text-center">
                                    UI/UX Design
                                </p>
                                <center><button class="btn2 mt-3" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Read More</button></center>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="project col-md-4 mb-5" style="text-decoration: none;">
                        <div class="card border-dark mt-5" style="width: 21.6rem; border-radius: 30px;" data-aos="flip-left" data-aos-duration="1000">
                            <span class="svg text-center mt-5"><i class="fas fa-code" style="font-size: 100px;"></i></span>
                            <div class="card-body mt-5 mb-4 ml-2 mr-2">
                                <p class="card-text text-center">
                                    Website & Application
                                </p>
                                <center><button class="btn2 mt-3" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Read More</button></center>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="project col-md-4 mb-5" style="text-decoration: none;">
                        <div class="card border-dark mt-5" style="width: 21.6rem; border-radius: 30px;" data-aos="flip-left" data-aos-duration="1400">
                            <span class="svg text-center mt-5"><i class="fas fa-pen-nib" style="font-size: 100px;"></i></span>
                            <div class="card-body mt-5 mb-4 ml-2 mr-2">
                                <p class="card-text text-center">
                                    Logo Design
                                </p>
                                <center><button class="btn2 mt-3" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">Read More</button></center>
                            </div>
                        </div>
                    </a>
                    <div class="collapse col-md-12 mb-5" id="collapseExample">
                        <div class="card card-body" style="border-radius: 30px; padding: 30px;">
                            <div class="row">
                                <h1 class="port col-md-11">UI/UX Design</h1>
                                <a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="col-md-1 fas fa-times"></i></a>
                            </div>    
                            <div class="row">
                                <div class="card border-dark mt-3" style="width: 20.5rem;margin-left: 17px;">
                                    <img src="{{('/images/nike.jpg')}}" class="card-img-top">
                                    <div class="card-body mt-2 mb-2 ml-2 mr-2">
                                        <p class="card-text text-center">
                                            Nike Web Store UI Design
                                        </p>
                                    </div>
                                </div>
                                <div class="card border-dark mt-3" style="width: 20.5rem;margin-left: 30px;">
                                    <img src="{{('/images/itrip.jpg')}}" class="card-img-top">
                                    <div class="card-body mt-2 mb-2 ml-2 mr-2">
                                        <p class="card-text text-center">
                                            Itrip Web UI Design
                                        </p>
                                    </div>
                                </div>
                                <div class="card border-dark mt-3" style="width: 20.5rem;margin-left: 30px;">
                                    <img src="{{('/images/travel.jpg')}}" class="card-img-top">
                                    <div class="card-body mt-2 mb-2 ml-2 mr-2">
                                        <p class="card-text text-center">
                                            Journey Web UI Design
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse col-md-12 mb-5" id="collapseExample2">
                        <div class="card card-body" style="border-radius: 30px; padding: 30px;">
                            <div class="row">
                                <h1 class="port col-md-11">Website & Application</h1>
                                <a href="#" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"><i class="col-md-1 fas fa-times"></i></a>
                            </div>    
                            <div class="row">
                                <div class="card border-dark mt-3" style="width: 20.5rem;margin-left: 17px;">
                                    <img src="{{('/images/portfolio.jpg')}}" class="card-img-top">
                                    <div class="card-body mt-2 mb-2 ml-2 mr-2">
                                        <p class="card-text text-center">
                                            Portfolio Website
                                        </p>
                                    </div>
                                </div>
                                <div class="card border-dark mt-3" style="width: 20.5rem;margin-left: 30px;">
                                    <img src="{{('/images/coders.jpg')}}" class="card-img-top">
                                    <div class="card-body mt-2 mb-2 ml-2 mr-2">
                                        <p class="card-text text-center">
                                            Company Portfolio Website
                                        </p>
                                    </div>
                                </div>
                                <div class="card border-dark mt-3" style="width: 20.5rem;margin-left: 30px;">
                                    <img src="{{('/images/sarpras.jpg')}}" class="card-img-top">
                                    <div class="card-body mt-2 mb-2 ml-2 mr-2">
                                        <p class="card-text text-center">
                                            Sarpras Starbhak Mobile Application
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse col-md-12 mb-5" id="collapseExample3">
                        <div class="card card-body" style="border-radius: 30px; padding: 30px;">
                            <div class="row">
                                <h1 class="port col-md-11">Logo Design</h1>
                                <a href="#" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample"><i class="col-md-1 fas fa-times"></i></a>
                            </div>    
                            <div class="row">
                                <div class="card border-dark mt-3" style="width: 20.5rem;margin-left: 17px;">
                                    <img src="{{('/images/darderdor.jpg')}}" class="card-img-top">
                                    <div class="card-body mt-2 mb-2 ml-2 mr-2">
                                        <p class="card-text text-center">
                                            Dapoer Darderdor Logo
                                        </p>
                                    </div>
                                </div>
                                <div class="card border-dark mt-3" style="width: 20.5rem;margin-left: 30px;">
                                    <img src="{{('/images/ownlogo.jpg')}}" class="card-img-top">
                                    <div class="card-body mt-2 mb-2 ml-2 mr-2">
                                        <p class="card-text text-center">
                                            My Own Logo Redesign
                                        </p>
                                    </div>
                                </div>
                                <div class="card border-dark mt-3" style="width: 20.5rem;margin-left: 30px;">
                                    <img src="{{('/images/ownlogoo.jpg')}}" class="card-img-top">
                                    <div class="card-body mt-2 mb-2 ml-2 mr-2">
                                        <p class="card-text text-center">
                                            My Own Logo
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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