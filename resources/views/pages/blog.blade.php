<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    @include("includes.header")
</head>
<body>
{{-- Navbar --}}
    <nav id="main-navbar" class="navbar navbar-expand-md navbar-dark bg-dark py-0 ">
        <div class="container">
            <a href="" class="navbar-brand">
                <span class="d-none">ILKOM</span>
                <img src="{{ asset('img/ilkoom_logo.png') }}" alt="ilkom logo" class=" main-logo d-none d-md-inline">
                <img src="{{ asset('img/ilkoom_logo.png') }}" alt="ilkom logo" class=" small-logo d-inline d-md-none">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="home" class=" nav-link p-4 ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog" class=" nav-link p-4 active">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="article" class=" nav-link p-4">Article</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery" class=" nav-link p-4 ">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class=" nav-link p-4 ">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

{{-- slider --}}
    <header id="main-slide-blog">
        <div id="myBlog">
            <div class="carousel-inner text-white">
                <div class="active" id="slide1-blog">
                    <div class="container">
                        <div class=" d-md-block">
                            <h1 class=" bg-info display-1  px-4 pb-2 d-inline-block">Blog</h1>
                            <br>
                            <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam atque velit, quia soluta ratione nisi! Quidem id suscipit harum soluta?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


{{-- BLOG Container --}}
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                {{-- breadcumb --}}
                <nav>
                    <ol class="breadcrumb bg-white ms-0 mt-4 mb-4">
                        <li class="breadcrumb-item">
                            <a href="home" class="text-info text-decoration-none">Home</a>
                        </li>
                        <li class=" text-secondary breadcrumb-item active">Blog</li>
                    </ol>
                </nav>
                <hr>
                {{-- Blog list --}}
                <div class="row py-2 d-flex">
                    <div class="col-md-5 text-center">
                        <img src="{{ asset('img/thumbnail11.jpg') }}" class="img-fluid mt-2" alt="" >
                    </div>
                    <div class="col-md-7 text-center text-md-start mt-3 mt-md-0">
                        <h3>
                            <a href="article" class="text-info text-decoration-none">Lorem ipsum dolor sit amet, consectetur adipisicing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur a dolores nostrum hic, amet dolorem nemo voluptates? Porro, inventore in?</p>
                        <div class="text-muted">
                            <small>Yasir Anshori</small>
                            <small>11 maret 2001</small>
                            <small>100 Comments</small>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row py-2 d-flex">
                    <div class="col-md-5 text-center">
                        <img src="{{ asset('img/thumbnail8.jpg') }}" class="img-fluid mt-2" alt="" >
                    </div>
                    <div class="col-md-7 text-center text-md-start mt-3 mt-md-0">
                        <h3>
                            <a href="article" class="text-info text-decoration-none">consectetur adipisicing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur a dolores nostrum hic, amet dolorem nemo voluptates?......</p>
                        <div class="text-muted">
                            <small>Yasir Anshori</small>
                            <small>11 maret 2001</small>
                            <small>100 Comments</small>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row py-2 d-flex">
                    <div class="col-md-5 text-center">
                        <img src="{{ asset('img/thumbnail7.jpg') }}" class="img-fluid mt-2" alt="" >
                    </div>
                    <div class="col-md-7 text-center text-md-start mt-3 mt-md-0">
                        <h3>
                            <a href="article" class="text-info text-decoration-none">Lorem ipsum dolor sit amet</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur a dolores nostrum hic, amet dolorem nemo voluptates? Porro, inventore in?</p>
                        <div class="text-muted">
                            <small>Yasir Anshori</small>
                            <small>11 maret 2001</small>
                            <small>100 Comments</small>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row py-2 d-flex">
                    <div class="col-md-5 text-center">
                        <img src="{{ asset('img/thumbnail4.jpg') }}" class="img-fluid mt-2" alt="" >
                    </div>
                    <div class="col-md-7 text-center text-md-start mt-3 mt-md-0">
                        <h3>
                            <a href="article" class="text-info text-decoration-none"> sit amet, consectetur adipisicing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur a dolores nostrum hic, amet dolorem nemo voluptates? Porro, inventore in?</p>
                        <div class="text-muted">
                            <small>Yasir Anshori</small>
                            <small>11 maret 2001</small>
                            <small>100 Comments</small>
                        </div>
                    </div>
                </div>
                <hr>
                {{-- pagination --}}
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a href="#" class="page-link text-decoration-none">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link text-decoration-none">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link text-decoration-none">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link text-decoration-none">4</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link text-decoration-none">5</a>
                    </li>
                </ul>
            </div>
            {{-- sidebar --}}
            <div id="sidebar" class="col-md-4 mt-4">
                {{-- popular post --}}
                <div class="row mb-5">
                    <div class="col text-center">
                        <h3>Popular Post</h3>
                        <div id="mainSlide" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/thumbnail10.jpg') }}" class="w-100 img-thumbnail" alt="Sidebar">
                                    <div class="carousel-caption pb-0">
                                        <a href="" class="text-white"></a>
                                        <p class="bg-dark d-inline-block px-1">
                                            Lorem ipsum dolor sit man
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/thumbnail3.jpg') }}" class="w-100 img-thumbnail" alt="Sidebar">
                                    <div class="carousel-caption pb-0">
                                        <a href="" class="text-white"></a>
                                        <p class="bg-dark d-inline-block px-1">
                                            dolor sit man
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/thumbnail4.jpg') }}" class="w-100 img-thumbnail" alt="Sidebar">
                                    <div class="carousel-caption pb-0">
                                        <a href="" class="text-white"></a>
                                        <p class="bg-dark d-inline-block px-1">
                                            Lorem ipsum
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/thumbnail7.jpg') }}" class="w-100 img-thumbnail" alt="Sidebar">
                                    <div class="carousel-caption pb-0">
                                        <a href="" class="text-white"></a>
                                        <p class="bg-dark d-inline-block px-1">
                                             ipsum dolor sit
                                        </p>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#mainSlide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                    <span class="visually-hidden">Previos</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#mainSlide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- post category --}}
                <div class="row mb-5">
                    <div class="col">
                        <h3 class="text-center">Post Category</h3>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#" class="text-info text-decoration-none">Ekonomi</a>
                                <span class="badge badge-primary badge-fill bg-info">10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#" class="text-info text-decoration-none">Informatika</a>
                                <span class="badge badge-primary badge-fill bg-info">90</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#" class="text-info text-decoration-none">Sains</a>
                                <span class="badge badge-primary badge-fill bg-info">20</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#" class="text-info text-decoration-none">Politik</a>
                                <span class="badge badge-primary badge-fill bg-info">12</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#" class="text-info text-decoration-none">Teknologi</a>
                                <span class="badge badge-primary badge-fill bg-info">80</span>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- latest coments --}}
                <div id="latest-comments" class="row">
                    <div class="col">
                        <h3 class="text-center">Latest Comment</h3>

                        <div class="d-flex py-3 border-bottom">
                            <img src="{{ asset('img/people1.jpg') }}" alt="" class="me-3 rounded-circle img-thumbnail small-logo">
                            <div class="">
                                <a href="#" class="text-dark ">
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur  Nam fugiat, temporibus amet fuga perferendis soluta.</p>
                                    <small class="text-muted align-self-end">10 Maret 2022</small>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex py-3 border-bottom">
                            <img src="{{ asset('img/people5.jpg') }}" alt="" class="me-3 rounded-circle img-thumbnail small-logo">
                            <div class="">
                                <a href="#" class="text-dark ">
                                    <p class="mb-0"> adipisicing elit. Nam fugiat, temporibus amet fuga perferendis soluta.</p>
                                    <small class="text-muted align-self-end">9 april 2011</small>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex py-3 border-bottom">
                            <img src="{{ asset('img/people3.jpg') }}" alt="" class="me-3 rounded-circle img-thumbnail small-logo">
                            <div class="">
                                <a href="#" class="text-dark ">
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam fugiat, temporibus amet fuga perferendis soluta.</p>
                                    <small class="text-muted align-self-end">1 juni 2021</small>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex py-3 border-bottom">
                            <img src="{{ asset('img/people4.jpg') }}" alt="" class="me-3 rounded-circle img-thumbnail small-logo">
                            <div class="">
                                <a href="#" class="text-dark ">
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam fugiat, temporibus amet fuga perferendis soluta.</p>
                                    <small class="text-muted align-self-end">1 juni 2021</small>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- footer --}}
<footer id="main-footer" class="text-white bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center text-md-start">
                <a href="index.html">
                    <img src="{{ asset('img/ilkoom_logo.png') }}" class="small-logo" alt="Ilkomm">
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quae ullam fuga iste. Nisi</p>
            </div>
            <div class="col-md-3 text-center">
                <h5>Community</h5>
                <ul class="list-unstyled ">
                    <li><a href="#" class="text-white text-decoration-none">Activity</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Members</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Groups</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Forums</a></li>
                </ul>
            </div>

            <div class="col-md-3 text-center">
                <h5>Our Service</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Our Mission</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Help/Contact</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Cookie Policy</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="col-md-3 text-center text-md-start">
                <h5>Contact Us</h5>
                <div class="text-nowrap"><i class="bi-envelope fa-fw me-3 "></i>Yasir@gmail.com</div>
                <div class="text-nowrap"><i class="bi-phone fa-fw me-3"></i>02157884</div>
                <div class="text-nowrap"><i class="bi-globe fa-fw me-3"></i>www.ilkom.com</div>
            </div>
        </div>
        <div class="row mt-3 mt-md-0">
            <div class="col-md-3 me-md-auto text-center text-md-start">
                <small>&copy; ILKOM {{ date("Y") }}</small>
            </div>
            <div class="col-md-3 text-center text-md-start">
                <a href="" class="text-white text-decoration-none me-2"><i class="bi-facebook fa-lg"></i></a>
                <a href="" class="text-white text-decoration-none me-2"><i class="bi-twitter fa-lg"></i></a>
                <a href="" class="text-white text-decoration-none me-2"><i class="bi-instagram fa-lg"></i></a>
                <a href="" class="text-white text-decoration-none me-2"><i class="bi-whatsapp fa-lg"></i></a>
                <a href="" class="text-white text-decoration-none me-2"><i class="bi-github fa-lg"></i></a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
