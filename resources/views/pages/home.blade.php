<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
                        <a href="home" class=" nav-link p-4 active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog" class=" nav-link p-4">Blog</a>
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
    <header id="main-slide">
        <div id="mySlide" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mySlide" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mySlide" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mySlide" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#mySlide" data-bs-slide-to="3"></button>
            </div>

            <div class="carousel-inner text-white">
                <div class="carousel-item active" id="slide1">
                    <div class="container">
                        <div class=" d-md-block">
                            <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Get Inspired</h1>
                            <br>
                            <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam atque velit, quia soluta ratione nisi! Quidem id suscipit harum soluta?</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " id="slide2">
                    <div class="container">
                        <div class=" d-md-block text-end">
                            <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Take Action</h1>
                            <br>
                            <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam atque velit, quia soluta ratione nisi! Quidem id suscipit harum soluta?</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " id="slide3">
                    <div class="container">
                        <div class=" d-md-block">
                            <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Be Sosial</h1>
                            <br>
                            <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam atque velit, quia soluta ratione nisi! Quidem id suscipit harum soluta?</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item " id="slide4">
                    <div class="container">
                        <div class=" d-md-block text-end">
                            <h1 class="display-1 bg-info px-4 pb-2 d-inline-block">Find store</h1>
                            <br>
                            <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam atque velit, quia soluta ratione nisi! Quidem id suscipit harum soluta?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-control-prev" type="button" data-bs-target="#mySlide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previos</span>
            </div>
            <div class="carousel-control-next" type="button" data-bs-target="#mySlide" data-bs-slide="prev">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </div>
        </div>
    </header>
{{-- shof off --}}

<section id="showoff-1" class="text-muted py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/image1.jpg') }}" alt="" class="img-fluid mb-3">
            </div>
            <div class="col-md-6">
                <h2>Lets Build Community</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sit necessitatibus dolorem </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, commodi porro! Hic eos, suscipit quisquam corporis nesciunt debitis sunt harum ex vero. Facere quo at veritatis nobis mollitia distinctio modi.</p>
                <button class="btn btn-outline-info">Learn More</button>
            </div>
        </div>
    </div>
</section>
<section id="showoff-2" class="bg-light text-muted py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Lets Build Website</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sit necessitatibus dolorem </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, commodi porro! Hic eos, suscipit quisquam corporis nesciunt debitis sunt harum ex vero. Facere quo at veritatis nobis mollitia distinctio modi.</p>
                <button class="btn btn-outline-info">Learn More</button>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/image2.jpg') }}" alt="" class="img-fluid mb-3">
            </div>
        </div>
    </div>
</section>

{{-- explore --}}

<section id="explore">
    <div class="dark-overlay">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="py-5">
                        <h1 class="display-4">Explore</h1>
                        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci libero iste provident nam tempore officia beatae mollitia pariatur labore voluptates aperiam excepturi enim non, laboriosam, nihil fuga. Animi, corporis provident!</p>
                        <a href="#" class="btn btn-ouline-dark">Find Our More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- member ship section --}}
<section id="membership" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Membership Levels</h1>
                <hr class="w-25 mx-auto">
                <p class="lead">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, odio aut? Fugiat, unde! Cum vitae dolorem assumenda quidem debitis illo, consectetur amet? Saepe tenetur, cum unde cumque beatae assumenda ratione.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-4">
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <h3 class="pt-3">Premium 1 Month</h3>
                    </div>
                    <div class="card-body">
                        <p class="h-5 text-danger"><s>Rp. 300.000</s></p>
                        <h3 class="card-title text-bold">Rp.120.000</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur in atque inventore quaerat perspiciatis error.</p>
                        <hr class="w-75 mx-auto">
                        <ul class="list-unstyled text-start">
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                View Site Activity
                            </li>
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                There is Site Progress
                            </li>
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                All Site Members
                            </li>
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                When Site Member Directory
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-muted d-flex d-flex">
                        <a href="#" class="btn btn-info flex-grow-1">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <h3 class="pt-3">Premium 2 Month</h3>
                    </div>
                    <div class="card-body">
                        <p class="h-5 text-danger"><s>Rp. 600.000</s></p>
                        <h3 class="card-title text-bold">Rp.110.000</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur in atque inventore quaerat perspiciatis error.</p>
                        <hr class="w-75 mx-auto">
                        <ul class="list-unstyled text-start">
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                View Site Activity
                            </li>
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                There is Site Progress
                            </li>
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                All Site Members
                            </li>
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                When Site Member Directory
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-muted d-flex d-flex">
                        <a href="#" class="btn btn-info flex-grow-1">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <h3 class="pt-3">Premium 3 Month</h3>
                    </div>
                    <div class="card-body">
                        <p class="h-5 text-danger"><s>Rp. 200.000</s></p>
                        <h3 class="card-title text-bold">Rp.150.000</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur in atque inventore quaerat perspiciatis error.</p>
                        <hr class="w-75 mx-auto">
                        <ul class="list-unstyled text-start">
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                View Site Activity
                            </li>
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                There is Site Progress
                            </li>
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                All Site Members
                            </li>
                            <li class="m-2 ms-3">
                                <i class="bi-check-circle-fill me-2"></i>
                                When Site Member Directory
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-muted d-flex d-flex">
                        <a href="#" class="btn btn-info flex-grow-1">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- member --}}
<section id="member-showcase" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Our Member</h1>
                <hr class="w-25 mx-auto">
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto commodi recusandae nihil eaque, animi laborum!</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <img src="{{ asset('img/people1.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people2.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people3.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people4.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people5.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people6.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people7.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people8.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people9.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people10.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
                <img src="{{ asset('img/people11.jpg') }}" class="rounded-circle img-thumbnail m-2" alt=" orang">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <button class="btn btn-outline-info mx-auto">View More Member</button>
            </div>
        </div>
    </div>
</section>

{{-- paid member --}}
<section id="feature" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Paid Membership Feature</h1>
                <hr class="w-25 mx-auto">
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat aliquid ipsum maxime sunt harum necessitatibus?
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="me-3">
                    <i class="bi-shield-shaded fs-2"></i>
                </div>
                <div class="mt-1">
                    <h4>Restrict User Accesss</h4>
                    <p class="text-muted">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis odit culpa debitis incidunt quo ea animi eum odio ullam modi.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="me-3">
                    <i class="bi-credit-card fs-2"></i>
                </div>
                <div class="mt-1">
                    <h4>More User Unit</h4>
                    <p class="text-muted">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis odit culpa debitis incidunt quo ea animi eum odio ullam modi.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="me-3">
                    <i class="bi-laptop fs-2"></i>
                </div>
                <div class="mt-1">
                    <h4>Accesss Player</h4>
                    <p class="text-muted">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis odit culpa debitis incidunt quo ea animi eum odio ullam modi.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="me-3">
                    <i class="bi-person-plus fs-2"></i>
                </div>
                <div class="mt-1">
                    <h4>Restrict User Car</h4>
                    <p class="text-muted">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis odit culpa debitis incidunt quo ea animi eum odio ullam modi.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="me-3">
                    <i class="bi-plus-square fs-2"></i>
                </div>
                <div class="mt-1">
                    <h4>Boot User Accesss</h4>
                    <p class="text-muted">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis odit culpa debitis incidunt quo ea animi eum odio ullam modi.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="me-3">
                    <i class="bi bi-bank2"></i>
                </div>
                <div class="mt-1">
                    <h4>Real User Accesss</h4>
                    <p class="text-muted">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis odit culpa debitis incidunt quo ea animi eum odio ullam modi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Total Showcase --}}
<section id="total-showcase" class="py-5 bg-dark text-white d-none d-md-block ">
    <div class="container">
        <div class="row text-center d-flex justify-content-center">
            <div class="col-2">
                <div class="text-info mb-1">
                    <i class="bi-chat-dots fs-1"></i>
                </div>
                <p class="h5 mb-0">Activity</p>
                <p class="h3"><strong>4,5389</strong></p>
            </div>
            <div class="col-2">
                <div class="text-info mb-1">
                    <i class="bi-person fs-1"></i>
                </div>
                <p class="h5 mb-0">Member</p>
                <p class="h3"><strong>3,222</strong></p>
            </div>
            <div class="col-2">
                <div class="text-info mb-1">
                    <i class="bi-broadcast fs-1"></i>
                </div>
                <p class="h5 mb-0">User</p>
                <p class="h3"><strong>4,5389</strong></p>
            </div>
            <div class="col-2">
                <div class="text-info mb-1">
                    <i class="bi-people fs-1"></i>
                </div>
                <p class="h5 mb-0">Groups</p>
                <p class="h3"><strong>4,5389</strong></p>
            </div>
            <div class="col-2">
                <div class="text-info mb-1">
                    <i class="bi-ui-checks fs-1"></i>
                </div>
                <p class="h5 mb-0">Check</p>
                <p class="h3"><strong>9,5389</strong></p>
            </div>

        </div>
    </div>
</section>

{{-- member list --}}

<section id="member-list" class="py-5 bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Member List</h1>
                <hr class="w-25 mx-auto">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, ducimus!</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col mt-3">
                <div class="card">
                    <img src="{{ asset('img/thumbnail2.jpg') }}" alt="Card" class="card-img-top">
                    <div class="card-body">
                        <img src="{{ asset('img/people1.jpg') }}" alt="" class="rounded-circle img-thumbnail">
                    </div>
                    <h5 class="card-title">Yasir Anshori</h5>
                    <ul class="list-unstyled text-start my-4">
                        <li class="m-2 ms-3">
                            <i class="bi-briefcase-fill me-2"></i>
                            Bergabunglah di juni 2022
                        </li>
                        <li class="m-2 ms-3">
                            <i class="bi-house-fill me-2"></i>
                            CEO PT.Information
                        </li>
                        <li class="m-2 ms-3">
                            <i class="bi-envelope-fill me-2"></i>
                            Yaseer@hotmail.com
                        </li>
                    </ul>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, Lorem ipsum dolor sit amet consectetur
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last seem 1 minutes ago</small>
                    </p>
                </div>
            </div>
            <div class="col mt-3">
                <div class="card">
                    <img src="{{ asset('img/thumbnail3.jpg') }}" alt="Card" class="card-img-top">
                    <div class="card-body">
                        <img src="{{ asset('img/people2.jpg') }}" alt="" class="rounded-circle img-thumbnail">
                    </div>
                    <h5 class="card-title">Aulia Herra</h5>
                    <ul class="list-unstyled text-start my-4">
                        <li class="m-2 ms-3">
                            <i class="bi-briefcase-fill me-2"></i>
                            Bergabunglah di juni 2021
                        </li>
                        <li class="m-2 ms-3">
                            <i class="bi-house-fill me-2"></i>
                            CEO PT.Koneksi
                        </li>
                        <li class="m-2 ms-3">
                            <i class="bi-envelope-fill me-2"></i>
                            Aulia@hotmail.com
                        </li>
                    </ul>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, Lorem ipsum dolor sit amet consectetur
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last seem 1 month ago</small>
                    </p>
                </div>
            </div>
            <div class="col mt-3">
                <div class="card">
                    <img src="{{ asset('img/thumbnail4.jpg') }}" alt="Card" class="card-img-top">
                    <div class="card-body">
                        <img src="{{ asset('img/people3.jpg') }}" alt="" class="rounded-circle img-thumbnail">
                    </div>
                    <h5 class="card-title">Balqis Adawiyah</h5>
                    <ul class="list-unstyled text-start my-4 ">
                        <li class="m-2 ms-3">
                            <i class="bi-briefcase-fill me-2"></i>
                            Bergabunglah di juni 2022
                        </li>
                        <li class="m-2 ms-3">
                            <i class="bi-house-fill me-2"></i>
                            CEO PT.Design
                        </li>
                        <li class="m-2 ms-3">
                            <i class="bi-envelope-fill me-2"></i>
                            Balqis@hotmail.com
                        </li>
                    </ul>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, Lorem ipsum dolor sit amet consectetur
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last seem 1 week ago</small>
                    </p>
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
                <ul class="list-unstyled text-decoration-none">
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
