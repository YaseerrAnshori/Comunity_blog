<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
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
                        <a href="blog" class=" nav-link p-4">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="article" class=" nav-link p-4 active">Article</a>
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

    <header id="main-slide-blog">
        <div id="myBlog">
            <div class="carousel-inner text-white">
                <div class="active" id="slide1-article">
                    <div class="container">
                        <div class=" d-md-block">
                            <h1 class=" bg-info display-1  px-4 pb-2 d-inline-block">Article</h1>
                            <br>
                            <p class="bg-dark px-2 pb-1 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam atque velit, quia soluta ratione nisi! Quidem id suscipit harum soluta?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<section class="" id="article">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-8">
                    {{-- breadcumb --}}
                    <nav>
                        <ol class="breadcrumb bg-white ms-0 mt-3 mb-4">
                            <li class="breadcrumb-item">
                                <a href="home" class="text-info text-decoration-none">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class=" text-secondary text-decoration-none">Article</a>
                            </li>
                            {{-- <li class="breadcrumb-item active">Lorem ipsum dolor sit, amet consectetur </li> --}}
                        </ol>
                    </nav>
                    <hr>

                    {{-- main article --}}
                    <article class="py-2">
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <div class="class-muted">
                            <small>Yasir ansori</small>
                            <small>18 september 2021</small>
                            <small>7 coments</small>
                        </div>
                        <img src="{{ asset('img/full-image12.jpg') }}" alt="" class="img-fluid p-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, similique minus, obcaecati repellat tempore voluptate iste fuga voluptatibus voluptas ex incidunt nulla modi est hic nisi eius ipsum placeat explicabo necessitatibus. Impedit labore veniam provident quibusdam pariatur repudiandae nulla obcaecati similique. Nulla consectetur nostrum odio officia deserunt laboriosam reiciendis obcaecati maiores minima neque, vel fuga veniam reprehenderit cumque similique repellendus voluptas? Distinctio cumque deleniti voluptatum labore suscipit sed possimus quam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam veniam sint aliquid, dicta adipisci tempore repellat? Nihil quod optio culpa maxime modi saepe mollitia error hic corrupti nobis a enim nemo impedit nam eveniet, et repellendus molestias itaque odio amet magni labore fugiat? Consequatur esse temporibus repudiandae culpa eum accusantium.</p>
                        <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis.</p>
                            <footer class="blockquote-footer">
                                <cite>John Doe</cite> (CEO mayora)
                            </footer>
                        </blockquote>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, aliquam fugiat dolorem autem iste blanditiis error illo alias at cupiditate quis neque vero vitae voluptatem animi magni doloremque est quibusdam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum assumenda animi perspiciatis culpa aliquam? Perferendis est soluta, voluptate vero similique officia fugiat exercitationem, corporis eos velit ullam sunt voluptates natus iure ipsum in eligendi quam amet. Rem ea odit perspiciatis distinctio dolores assumenda iusto temporibus debitis similique! Illum, repellendus delectus.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quasi porro cupiditate, fuga voluptas ullam et alias neque sit assumenda.</p>
                    </article>
                    <hr>
                    {{-- author --}}

                    <div class="d-flex align-items-start py-4">
                        <img src="{{ asset('img/people2.jpg') }}" alt="" class="me-3 img-thumbnail img-fluid">
                        <div>
                            <h3><a href="#" class="text-info text-decoration-none"> ilyas maulana</a></h3>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit veritatis sunt nisi eveniet velit. Animi debitis vel suscipit nam voluptatem?

                            <div class="pt-4" style="white-space: nowrap">
                                <a href="" class="text-info text-decoration-none me-2">
                                    <i class="bi-facebook fs-2"></i>
                                </a>
                                <a href="" class="text-info text-decoration-none me-2">
                                    <i class="bi-instagram fs-2"></i>
                                </a>
                                <a href="" class="text-info text-decoration-none me-2">
                                    <i class="bi-twitter fs-2"></i>
                                </a>
                                <a href="" class="text-info text-decoration-none me-2">
                                    <i class="bi-github fs-2"></i>
                                </a>
                                <a href="" class="text-info text-decoration-none me-2">
                                    <i class="bi-twitter fs-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                <!-- ARTICLE COMMENTS -->
                <section class="py-4">
                    <h2>Comments</h2>

                    <div class="d-flex mt-4">
                    <a href="#" class="flex-shrink-0 me-3">
                        <img class="rounded-circle img-thumbnail"
                        src="img/people8.jpg" style="width:50px; height:50px;">
                    </a>
                    <div>
                        <div class="d-flex justify-content-between">
                        <h5 class="mt-0">Ulya Nasyiah</h5>
                        <small class="text-muted">15 September 2018</small>
                        </div>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                        scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at,
                        tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                        Donec lacinia congue felis in faucibus.</p>
                        <p>Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Aliquam erat
                        volutpat. Integer malesuada.</p>
                        <div><a href="#" class="text-info">Reply</a></div>

                        <div class="d-flex align-items-start mt-4">
                        <a href="#" class="flex-shrink-0 me-3">
                            <img class="rounded-circle img-thumbnail"
                            src="img/people11.jpg" style="width:50px; height:50px;">
                        </a>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                            <h5 class="mt-0">Bahuwarna Pradana</h5>
                            <small class="text-muted">16 September 2018</small>
                            </div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                            sequi nesciunt. Fusce tellus odio, dapibus id fermentum quis, suscipit
                            id erat. Suspendisse sagittis ultrices augue.</p>
                            <div><a href="#" class="text-info">Reply</a></div>
                        </div>
                        </div>

                        <div class="d-flex align-items-start mt-4">
                        <a href="#" class="flex-shrink-0 me-3">
                            <img class="rounded-circle img-thumbnail"
                            src="img/people10.jpg" style="width:50px; height:50px;">
                        </a>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                            <h5 class="mt-0">Elisa Farida</h5>
                            <small class="text-muted">17 September 2018</small>
                            </div>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos hymenaeos. Maecenas libero. Fusce nibh. Proin mattis lacinia
                            justo. Fusce wisi.</p>
                            <p>Aliquam in lorem sit amet leo accumsan lacinia. Maecenas fermentum,
                            sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus
                            odio a lectus. Class aptent taciti sociosqu ad litora torquent per conubia
                            nostra, per inceptos hymenaeos. </p>
                            <div><a href="#" class="text-info">Reply</a></div>
                        </div>
                        </div>

                    </div>
                    </div>
                    <hr>

                    <div class="d-flex align-items-start mt-4">
                    <a href="#" class="flex-shrink-0 me-3">
                        <img class="rounded-circle img-thumbnail"
                        src="img/people9.jpg" style="width:50px; height:50px;">
                    </a>
                    <div>
                        <div class="d-flex justify-content-between">
                        <h5 class="mt-0">Candra Adika</h5>
                        <small class="text-muted">20 September 2018</small>
                        </div>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="my-2"><a href="#" class="text-info">Reply</a></div>
                    </div>
                    </div>
                    <hr>
                </section>

                <!-- REPLY COMMENT-->
                <section class="pt-3 pb-5">
                    <h4>Leave a Reply</h4>
                    <p>Your email address will not be published. Required fields
                    are marked *</p>
                    <form>
                    <div class="mb-3">
                        <label for="isianKomentar" class="form-label">Comment *</label>
                        <textarea class="form-control" id="isianKomentar"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                        <input type="text" class="form-control" id="inputName"
                        placeholder="Name *">
                        </div>
                        <div class="col-6">
                        <input type="email" class="form-control" id="inputEmail"
                        placeholder="Email *">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-info" value="Post Comment">
                    </form>
                </section>
                </div>

        <!-- SIDEBAR -->
        <div id="sidebar" class="col-md-4 mt-4 ">

            <!-- POPULAR POST SLIDER-->
            <div class="row mb-5">
              <div class="col text-center">
                <h3>Popular Post</h3>
                <div id="mySlide" class="carousel slide" data-bs-ride="carousel">

                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="w-100 img-thumbnail" src="img/thumbnail1.jpg">
                      <div class="carousel-caption pb-0">
                        <a href="#" class="text-white">
                          <p class="bg-dark d-inline-block px-1">
                            Lorem Ipsum Dolor Sit Amet</p>
                        </a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="w-100 img-thumbnail" src="img/thumbnail2.jpg">
                      <div class="carousel-caption pb-0">
                        <a href="#" class="text-white">
                          <p class="bg-dark d-inline-block px-1">
                            Totam Rem Aperiam, Eaque</p>
                        </a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="w-100 img-thumbnail" src="img/thumbnail3.jpg">
                      <div class="carousel-caption pb-0">
                        <a href="#" class="text-white">
                          <p class="bg-dark d-inline-block px-1">
                            Aenean Id Metus Ullamcorper</p>
                        </a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="w-100 img-thumbnail" src="img/thumbnail4.jpg">
                      <div class="carousel-caption pb-0">
                        <a href="#" class="text-white">
                          <p class="bg-dark d-inline-block px-1">
                            Mauris Dolor Felis, Sagittis At</p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <button class="carousel-control-prev" type="button" data-bs-target="#mySlide"
                  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#mySlide"
                  data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                  </button>

                </div>
              </div>
            </div>

            <!-- POST CATEGORY -->
          <div class="row mb-5">
            <div class="col">
              <h3 class="text-center">Post Category</h3>
              <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item d-flex justify-content-between
                align-items-center">
                  <a href="#" class="text-info">Ekonomi</a>
                  <span class="badge badge-primary badge-pill bg-info">10</span>
                </li>
                <li class="list-group-item d-flex justify-content-between
                align-items-center">
                  <a href="#" class="text-info">Politik</a>
                  <span class="badge badge-primary badge-pill bg-info">17</span>
                </li>
                <li class="list-group-item d-flex justify-content-between
                align-items-center">
                  <a href="#" class="text-info">Teknologi</a>
                  <span class="badge badge-primary badge-pill bg-info">7</span>
                </li>
                <li class="list-group-item d-flex justify-content-between
                align-items-center">
                  <a href="#" class="text-info">Music</a>
                  <span class="badge badge-primary badge-pill bg-info">21</span>
                </li>
                <li class="list-group-item d-flex justify-content-between
                align-items-center">
                  <a href="#" class="text-info">Programming</a>
                  <span class="badge badge-primary badge-pill bg-info">106</span>
                </li>
                <li class="list-group-item d-flex justify-content-between
                align-items-center">
                  <a href="#" class="text-info">Lingkungan</a>
                  <span class="badge badge-primary badge-pill bg-info">28</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- LATEST COMMENTS -->
          <div id="latest-comments" class="row">
            <div class="col">
              <h3 class="text-center">Latest Comments</h3>

              <div class="d-flex py-3 border-bottom">
                <img class="me-3 rounded-circle img-thumbnail"
                src="img/people6.jpg" style="width:50px; height:50px;">
                <div>
                  <a href="#" class="text-dark">
                    <p class="mb-0">Cras sit amet nibh libero in gravida nulla,
                      Nulla vel metus.</p>
                    <small class="text-muted align-self-end">
                      15 September 2018</small>
                  </a>
                </div>
              </div>

              <div class="d-flex py-3 border-bottom">
                <img class="me-3 rounded-circle img-thumbnail"
                src="img/people7.jpg" style="width:50px; height:50px;">
                <div>
                  <a href="#" class="text-dark">
                    <p class="mb-0">Fusce tellus. Fusce dui leo, imperdiet in,
                      aliquam sit amet, feugiat eu, orci.</p>
                    <small class="text-muted align-self-end">
                      29 Juni 2018</small>
                  </a>
                </div>
              </div>

              <div class="d-flex py-3 border-bottom">
                <img class="me-3 rounded-circle img-thumbnail"
                src="img/people8.jpg" style="width:50px; height:50px;">
                <div>
                  <a href="#" class="text-dark">
                    <p class="mb-0"> Class aptent taciti sociosqu ad litora
                      torquent per conubia nostra, per inceptos hymenaeos.</p>
                    <small class="text-muted align-self-end">
                      30 Mei 2018</small>
                  </a>
                </div>
              </div>

              <div class="d-flex py-3">
                <img class="me-3 rounded-circle img-thumbnail"
                src="img/people9.jpg" style="width:50px; height:50px;">
                <div>
                  <a href="#" class="text-dark">
                    <p class="mb-0">Mauris elementum mauris vitae tortor.
                       Praesent dapibus.</p>
                    <small class="text-muted align-self-end">
                      7 Maret 2018</small>
                  </a>
                </div>
              </div>

            </div>
          </div>

          <!-- ADVERTISEMENT -->
          <div class="row py-4 sticky-top mt-5">
            <div class="col text-center">
              <h3>Advertisement</h3>
              <a href="#">
                <img class="me-3 img-fluid" src="img/ads.jpg" >
              </a>
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
