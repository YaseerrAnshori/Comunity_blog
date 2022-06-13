<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                        <a href="blog" class=" nav-link p-4 ">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="article" class=" nav-link p-4">Article</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery" class=" nav-link p-4  ">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class=" nav-link p-4 active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- <header id="gallery-header" class="header-image text-white d-none d-md block">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Gallery</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nihil odit aliquid a dicta! Exercitationem dolorem perferendis cumque molestias. Perferendis!</p>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}


    {{-- slider --}}
    <header id="main-slide-blog">
        <div id="myBlog">
            <div class="carousel-inner text-white">
                <div class="active" id="slide1-login">
                    <div class="container">
                        <div class=" d-md-block">
                            <h1 class=" bg-info display-1  px-4 pb-2 d-inline-block">Login</h1>
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
                <div class="col">
                    {{-- breadcumb --}}
                    <nav>
                        <ol class="breadcrumb bg-white ms-0 mt-3 mb-4">
                            <li class="breadcrumb-item">
                                <a href="home" class="text-info text-decoration-none">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="gallery" class=" text-secondary text-decoration-none">Login</a>
                            </li>
                        </ol>
                    </nav>
                    <hr>

                </div>

            </div>
        </div>
    </section>

    <div class="section py-5" id="login">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 col-lg-5 mx-auto">
                    <h4 class="text-center mb-4">Account Login</h4>
                    <form action="home">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                            <label for="floatingInput">Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex">
                            <input type="submit" class="btn btn-info flex-fill" value="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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

<script src="{{ asset('js/lightbox-plus-jquery.js') }}"></script>
</body>
</html>
