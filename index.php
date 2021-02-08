<?php
  require 'frag/header.php';
?>

<style media="screen">
  .navbar-nav .nav-link .menu-label::before, .navbar-nav .nav-link .menu-label::after{
    background: #56b186;
  }
  h1 span{
    color:#56b186;
  }
  .btn.btn-theme{
    background: #56b186;
  }
  body ::selection{
    background: #56b186;
  }
</style>

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <img src="images/loader.png" alt="">
    <p style="margin-top:30px;">Loading...</p>
  </div>
</div>

<!-- preloader end -->


<!--header start-->

<header id="site-header" class="header header-1">
  <div class="top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-6">
          <div class="topbar-link text-left">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="mailto:htinfotech7@gmail.com"><i class="ti-email"></i>htinfotech7@gmail.com</a>
              </li>
              <li class="list-inline-item">
                <a href="tel:+912345678900"> <i class="ti-mobile"></i>+91-234-567-8900</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="social-icons social-hover top-social-list text-right">
            <ul class="list-inline">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
              </li>
              <li><a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li><a href="#"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require 'frag/navbar.php'; ?>

</header>

<!--header end-->


<!--hero section start-->

<section class="fullscreen-banner text-center dark-bg o-hidden p-0 jarallax" data-bg-img="images/bg/34.jpg" data-overlay="5" data-speed="-0.2">
  <div class="align-center">
    <div class="container">
      <div class="jarallax px-5 xs-px-1 py-5" data-bg-img="images/bg/24.png" data-speed="-0.2">
        <div class="row align-items-center">
          <div class="col-md-12">
            <h1 class="text-white mb-2 animated4">We Are <span>PolicyNG</span></h1>
            <!-- <p class="animated1 lead mb-4 text-white" style="margon-top:-13px !important;font-size:34px;">Simplifying Policies</p> -->
            <p class="animated1 lead mb-4 text-white" style="margon-top:-13px !important;font-size:34px;">Nigerian Policies are for the advantage of the people</p>
            <a href="search.php" class="btn btn-theme btn-circle animated5"> <span>Search for Policies</span>
            </a>
            <a href="#about_us" class="btn btn-circle btn-border btn-white animated2"> <span>Explore</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

<!--about start-->

<section id="about_us">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <div class="about-img about-layer about-3">
          <div class="about-layer-one">
            <img class="img-center" src="images/about/13.jpg" alt="">
          </div>
          <div class="about-layer-two">
            <img class="img-center" src="images/about/14.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 md-mt-3">
        <div class="section-title mb-3">
          <h5 class="text-theme">What WE Do</h5>
          <h2 class="title-2">About <span>us</span></h2>
        </div>
        <h5 class="text-capitalize line-h-2">consectetur adipisicing elit. <span class="text-theme font-italic">Excepturi vero minima</span> impedit aliquam id. minima impedit <span class="text-theme">aliquam id.</span></h5>
        <p>Thpmso Is Best Template dolor sit amet, consectetur adipisicing elit. Excepturi vero aliquam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi vero minima impedit aliquam id. consectetur adipisicing elit. Excepturi vero minima impedit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi vero aliquam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi vero minima impedit aliquam id. consectetur adipisicing elit.</p>
        <div class="row mt-5">
          <div class="col-sm-12">
            <div class="tab">
              <!-- Nav tabs -->
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#tab1-1" role="tab" aria-selected="true">Our Mission</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#tab1-2" role="tab" aria-selected="false">Our Vission</a>
                </div>
              </nav>
              <!-- Tab panes -->
              <div class="tab-content pb-0" id="nav-tabContent">
                <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                  <p>We Provide is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make book.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                  <p>We Provide is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make book.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--about end-->


<!--service start-->

<section class="grey-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mr-auto">
        <div class="section-title">
          <h5 class="text-theme">Service</h5>
          <h2 class="title-2 z-index-1">We Are <span>Cretive</span></h2>
          <p class="line-h-3">Thomso libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="featured-item style-2">
          <div class="featured-icon"> <i class="ti-paint-bucket"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Easy to use</h5>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 sm-mt-3">
        <div class="featured-item style-2">
          <div class="featured-icon"> <i class="ti-brush"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Awesome Design</h5>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5 sm-mt-3">
      <div class="col-md-6">
        <div class="featured-item style-2">
          <div class="featured-icon"> <i class="ti-layout-accordion-separated"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Parallax</h5>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 sm-mt-3">
        <div class="featured-item style-2">
          <div class="featured-icon"> <i class="ti-cup"></i>
          </div>
          <div class="featured-title text-uppercase">
            <h5>Unlimited Feutures</h5>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--service end-->


<!--video start-->

<section class="theme-bg p-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 px-5 py-5 align-item-middle" data-bg-img="images/bg/07.jpg" data-overlay="8">
        <div>
          <h2 class="text-capitalize text-white mb-5">We Make It Simple To Take Your Business With Target Success.</h2>
          <div class="video-btn"> <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><span class="btn-play"><i class="fas fa-play-circle"></i></span>Play Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 px-5 py-5 text-center">
        <div class="row">
          <div class="col-sm-6">
            <div class="counter style-5"> <i class="flaticon-light-bulb"></i>
              <span class="count-number" data-to="150" data-speed="10000">150</span>
              <label>Web Design</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="counter style-5"> <i class="flaticon-projection"></i>
              <span class="count-number" data-to="175" data-speed="10000">175</span>
              <label>Success Project</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="counter style-5"> <i class="flaticon-coffee-cup"></i>
              <span class="count-number" data-to="344" data-speed="10000">344</span>
              <label>Coffee Cup</label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="counter style-5"> <i class="flaticon-happy"></i>
              <span class="count-number" data-to="125" data-speed="10000">125</span>
              <label>Happy Clients</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--video end-->


<!--client start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mr-auto">
        <div class="section-title">
          <h5>Client</h5>
          <h2 class="title-2">Our <span>Partners</span></h2>
          <p>Thomso libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</p>
        </div>
      </div>
    </div>
    <div class="client-logo style-3">
      <div class="row client-row">
        <div class="col-sm-3 col-sm-3 client-item">
          <img class="img-center" src="images/client/09.png" alt="">
        </div>
        <div class="col-sm-3 col-sm-3 client-item">
          <img class="img-center" src="images/client/10.png" alt="">
        </div>
        <div class="col-sm-3 col-sm-3 client-item">
          <img class="img-center" src="images/client/11.png" alt="">
        </div>
        <div class="col-sm-3 col-sm-3 client-item">
          <img class="img-center" src="images/client/12.png" alt="">
        </div>
      </div>
      <div class="row client-row">
        <div class="col-sm-3 client-item">
          <img class="img-center" src="images/client/13.png" alt="">
        </div>
        <div class="col-sm-3 client-item">
          <img class="img-center" src="images/client/14.png" alt="">
        </div>
        <div class="col-sm-3 client-item">
          <img class="img-center" src="images/client/15.png" alt="">
        </div>
        <div class="col-sm-3 client-item">
          <img class="img-center" src="images/client/16.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!--client end-->


<!--feutures start-->

<section class="o-hidden p-0">
  <div class="container-fluid p-0">
    <div class="row no-gutters row-eq-height">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-item py-8 dark-bg text-center text-white" data-bg-img="images/about/02.jpg" data-overlay="8">
          <div class="featured-title text-uppercase">
            <h5>Pixel Perfect</h5>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p> <a class="btn btn-white btn-sm btn-border btn-circle mt-4" href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-item py-8 dark-bg text-center text-white" data-bg-img="images/about/09.jpg" data-overlay="7">
          <div class="featured-title text-uppercase">
            <h5>Creative design</h5>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p> <a class="btn btn-sm btn-border btn-circle mt-4" href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-item py-8 dark-bg text-center text-white" data-bg-img="images/about/09.jpg" data-overlay="8">
          <div class="featured-title text-uppercase">
            <h5>Awesome Slider</h5>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p> <a class="btn btn-white btn-sm btn-border btn-circle mt-4" href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-item py-8 dark-bg text-center text-white" data-bg-img="images/about/09.jpg" data-overlay="7">
          <div class="featured-title text-uppercase">
            <h5>Powerfull Service</h5>
          </div>
          <div class="featured-desc">
            <p>Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.</p> <a class="btn btn-sm btn-border btn-circle mt-4" href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--feutures end-->


<!--portfolio start-->

<section>
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-4 col-md-12">
        <div class="section-title">
          <h5 class="text-theme">Portfolio</h5>
          <h2 class="title-2">Recent <span>Work</span></h2>
          <p>Thomso libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
        </div>
      </div>
      <div class="col-lg-8 col-md-12 text-lg-right">
        <div class="portfolio-filter">
          <button data-filter="" class="is-checked">All</button>
          <button data-filter=".cat1">Responsive</button>
          <button data-filter=".cat2">Creative</button>
          <button data-filter=".cat3">Animated</button>
          <button data-filter=".cat4">web-design</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="masonry columns-3">
          <div class="grid-sizer"></div>
          <div class="masonry-brick cat1">
            <div class="portfolio-item popup-gallery">
              <div class="portfolio-slider owl-carousel owl-theme no-pb">
                <div class="item">
                  <a href="images/portfolio/masonry/large/01.jpg">
                    <img src="images/portfolio/masonry/01.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/masonry/large/04.jpg">
                    <img src="images/portfolio/masonry/04.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/masonry/large/06.jpg">
                    <img src="images/portfolio/masonry/06.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/masonry/large/09.jpg">
                    <img src="images/portfolio/masonry/09.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/masonry/large/10.jpg">
                    <img src="images/portfolio/masonry/10.jpg" alt="">
                  </a>
                </div>
                <div class="item">
                  <a href="images/portfolio/masonry/large/11.jpg">
                    <img src="images/portfolio/masonry/11.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="portfolio-hover">
                <h4>Slider Gallery</h4>
                <div class="portfolio-title">
                  <a class="popup" href="#"> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-brick cat1 cat3">
            <div class="portfolio-item">
              <img src="images/portfolio/masonry/02.gif" alt="">
              <div class="portfolio-hover">
                <h4>External Link</h4>
                <div class="portfolio-title">
                  <a class="popup portfolio-link" target="_blank" href="portfolio-details-1.html"> <i class="ti-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-brick cat4 cat2">
            <div class="portfolio-item popup-gallery">
              <img src="images/portfolio/masonry/05.jpg" alt="">
              <div class="portfolio-hover">
                <h4>Image Popup</h4>
                <div class="portfolio-title">
                  <a class="popup popup-img" href="images/portfolio/masonry/large/05.jpg"> <i class="ti-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-brick cat2 cat3">
            <div class="portfolio-item">
              <img src="images/portfolio/masonry/04.jpg" alt="">
              <div class="portfolio-hover">
                <h4>Categories</h4>
                <div class="portfolio-title">
                  <a class="popup portfolio-link" target="_blank" href="portfolio-details-1.html"> <i class="ti-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-brick cat3 cat1">
            <div class="portfolio-item">
              <img src="images/portfolio/masonry/03.jpg" alt="">
              <div class="portfolio-hover">
                <h4>Video Popup</h4>
                <div class="portfolio-title">
                  <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=meBbDqAXago"> <i class="fas fa-play-circle"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-brick cat3 cat1">
            <div class="portfolio-item">
              <img src="images/portfolio/masonry/12.jpg" alt="">
              <div class="portfolio-hover">
                <h4>Video Popup</h4>
                <div class="portfolio-title">
                  <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=meBbDqAXago"> <i class="fas fa-play-circle"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="masonry-brick cat2 cat4">
            <div class="portfolio-item">
              <img src="images/portfolio/masonry/07.gif" alt="">
              <div class="portfolio-hover">
                <h4>External Link</h4>
                <div class="portfolio-title">
                  <a class="popup portfolio-link" target="_blank" href="portfolio-details-1.html"> <i class="ti-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--portfolio end-->


<!--testimonial start-->

<section class="pos-r p-0 o-hidden">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-5 grey-bg mr-auto align-item-middle px-5 py-5">
        <div class="section-title mb-0">
          <h5 class="text-theme">Testimonial</h5>
          <h2 class="title-2 z-index-1">People <span>Say ?</span></h2>
          <p class="mb-0">Thomso libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</p>
        </div>
      </div>
      <div class="col-md-7 dark-bg px-5 py-5">
        <div class="owl-carousel owl-theme owl-7 no-pb">
          <div class="item">
            <div class="testimonial style-3 text-left">
              <div class="testimonial-content"> <span><i class="ti-quote-left"></i></span>
                <p>consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.</p>
              </div>
              <div class="testimonial-avatar">
                <div class="testimonial-img">
                  <img class="img-center" src="images/thumbnail/01.png" alt="">
                </div>
                <div class="testimonial-caption">
                  <h6>- John Doe</h6>
                  <label>Designer</label>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial style-3 text-left">
              <div class="testimonial-content"> <span><i class="ti-quote-left"></i></span>
                <p>consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.</p>
              </div>
              <div class="testimonial-avatar">
                <div class="testimonial-img">
                  <img class="img-center" src="images/thumbnail/01.png" alt="">
                </div>
                <div class="testimonial-caption">
                  <h6>- John Doe</h6>
                  <label>Designer</label>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial style-3 text-left">
              <div class="testimonial-content"> <span><i class="ti-quote-left"></i></span>
                <p>consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.</p>
              </div>
              <div class="testimonial-avatar">
                <div class="testimonial-img">
                  <img class="img-center" src="images/thumbnail/01.png" alt="">
                </div>
                <div class="testimonial-caption">
                  <h6>- John Doe</h6>
                  <label>Designer</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--testimonial end-->


<!--blog start-->

<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <div class="section-title">
          <h5 class="text-theme">Recent News</h5>
          <h2 class="title-2">Our Latest <span>Blogs</span></h2>
          <p>Thomso libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-12">
        <div class="post">
          <div class="post-image">
            <img class="img-fluid" src="images/blog/01.jpg" alt="">
          </div>
          <div class="post-desc">
            <div class="post-title">
              <h5><a href="blog-details-right-sidebar.html"> Consectetur Adipiscing</a> </h5>
            </div>
            <div class="post-meta">
              <ul class="list-inline">
                <li>05 May, 2018</li>
                <li>Like</li>
                <li>Comment</li>
              </ul>
            </div>
            <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi..</p> <a class="post-btn" href="blog-details-right-sidebar.html">Read More<i class="ml-2 fas fa-long-arrow-alt-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 md-mt-5">
        <div class="post">
          <div class="post-image">
            <img class="img-fluid" src="images/blog/02.jpg" alt="">
          </div>
          <div class="post-desc">
            <div class="post-title">
              <h5><a href="blog-details-right-sidebar.html"> Consectetur Adipiscing</a> </h5>
            </div>
            <div class="post-meta">
              <ul class="list-inline">
                <li>05 May, 2018</li>
                <li>Like</li>
                <li>Comment</li>
              </ul>
            </div>
            <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi..</p> <a class="post-btn" href="blog-details-right-sidebar.html">Read More<i class="ml-2 fas fa-long-arrow-alt-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 md-mt-5">
        <div class="post">
          <div class="post-image">
            <img class="img-fluid" src="images/blog/03.jpg" alt="">
          </div>
          <div class="post-desc">
            <div class="post-title">
              <h5><a href="blog-details-right-sidebar.html"> Pretium ut lacinia</a> </h5>
            </div>
            <div class="post-meta">
              <ul class="list-inline">
                <li>05 May, 2018</li>
                <li>Like</li>
                <li>Comment</li>
              </ul>
            </div>
            <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi..</p> <a class="post-btn" href="blog-details-right-sidebar.html">Read More<i class="ml-2 fas fa-long-arrow-alt-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--blog end-->

</div>

<!--body content end-->


<!--footer start-->

<footer class="footer dark-bg footer-1">
  <div class="primary-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-logo mb-3">
            <img id="footer-logo-img" class="img-center" src="images/logo.png" alt="">
          </div>
          <p class="mb-0">Thomso is fully responsible, Performance oriented theme. Build whatever you like with the Thomso. Thomso is the creative, modern and multipurpose HTML5 Template suitable for any business.</p>
          <div class="social-icons circle social-hover mt-4">
            <ul class="list-inline mb-0">
              <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
              </li>
              <li class="social-twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
              </li>
              <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
              </li>
              <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
              </li>
              <li class="social-rss"><a href="#"><i class="fas fa-rss" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-list pl-lg-5 sm-mt-5">
          <h5>Usefull links</h5>
          <ul class="list-unstyled">
            <li><a href="about-1.html"><i class="fas fa-angle-right"></i> About Thomso</a>
            </li>
            <li><a href="terms-and-conditions.html"><i class="fas fa-angle-right"></i> Terms & Condition</a>
            </li>
            <li><a href="privacy-policy.html"><i class="fas fa-angle-right"></i> Privacy Policy</a>
            </li>
            <li><a href="career.html"><i class="fas fa-angle-right"></i>Career</a>
            </li>
            <li><a href="contact-1.html"><i class="fas fa-angle-right"></i> Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 md-mt-5 footer-list">
          <h5>Recent Posts</h5>
          <ul class="list-unstyled">
            <li><a href="blog-grid-3.html"><i class="fas fa-angle-right"></i> Aliquam expedita magni</a>
            </li>
            <li><a href="blog-grid-3.html"><i class="fas fa-angle-right"></i> Standard Blog post</a>
            </li>
            <li><a href="blog-grid-3.html"><i class="fas fa-angle-right"></i> Consectetur adipisicing elit</a>
            </li>
            <li><a href="blog-grid-3.html"><i class="fas fa-angle-right"></i>Lorem ipsum dolor sit</a>
            </li>
            <li><a href="blog-grid-3.html"><i class="fas fa-angle-right"></i> Ratione eligendi tempora</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 md-mt-5">
          <h5>Contact information</h5>
          <ul class="media-icon list-unstyled">
            <li class="mb-4"> <i class="ti-map-alt"></i>
              <p class="mb-0">562 Road, USA</p>
            </li>
            <li class="mb-4"> <i class="ti-email"></i>
              <a href="mailto:htinfotech7@gmail.com">htinfotech7@gmail.com</a>
            </li>
            <li> <i class="ti-mobile"></i>
              <a href="tel:+912345678900">+91-234-567-8900</a>
            </li>
          </ul>
          <form id="newslatter" class="formee mt-4" action="php/subscribe.php" method="post">
            <div class="input-group">
              <input name="email" id="email" class="form-control" type="text" placeholder="Email Address" /> <span class="input-group-btn">
            <button class="form-btn" type="submit" title="Send" value="Send"><i class="fas fa-envelope-open"></i></button>
        </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer text-center">
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-12"> <span>Copyright 2018 Thomso Theme by <a target="_blank" href="www.themeht.com"> ThemeHt </a> | All Rights Reserved</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--color-customizer start-->

<div class="color-customizer closed">
  <div class="color-button">
    <a class="opener" href="#">
      <i class="fas fa-spinner fa-spin"></i>
    </a>
  </div>
  <div class="clearfix color-chooser">
    <ul class="colorChange clearfix">
      <li class="theme-default selected" title="theme-default" data-style="theme-default" ></li>
      <li class="theme-green" title="theme-green" data-style="theme-green" ></li>
      <li class="theme-aquamarine" title="theme-aquamarine" data-style="theme-aquamarine"></li>
      <li class="theme-navy-blue" title="theme-navy-blue" data-style="theme-navy-blue"></li>
      <li class="theme-crimson" title="theme-crimson" data-style="theme-crimson" ></li>
      <li class="theme-lolipop" title="theme-lolipop" data-style="theme-lolipop" ></li>
      <li class="theme-deep-pink" title="theme-deep-pink" data-style="theme-deep-pink"></li>
      <li class="theme-red-violet" title="theme-red-violet" data-style="theme-red-violet"></li>
      <li class="theme-amaranth" title="theme-amaranth" data-style="theme-amaranth" ></li>
      <li class="theme-scarlet" title="theme-scarlet" data-style="theme-scarlet" ></li>
      <li class="theme-limegreen" title="theme-limegreen" data-style="theme-limegreen"></li>
      <li class="theme-gold" title="gold" data-style="theme-gold"></li>
      <li class="theme-darkslateblue" title="theme-darkslateblue" data-style="theme-darkslateblue" ></li>
      <li class="theme-mediumvioletred" title="theme-mediumvioletred" data-style="theme-mediumvioletred" ></li>
      <li class="theme-kelly" title="theme-kelly" data-style="theme-kelly"></li>
      <li class="theme-rebecca-purple" title="theme-rebecca-purple" data-style="theme-rebecca-purple"></li>
      <li class="theme-forestgreen" title="theme-forestgreen" data-style="theme-forestgreen" ></li>
      <li class="theme-blue" title="theme-blue" data-style="theme-blue"></li>
      <li class="theme-yellow" title="theme-yellow" data-style="theme-yellow"></li>
      <li class="theme-royal-blue" title="theme-royal-blue" data-style="theme-royal-blue" ></li>
      <li class="theme-mediumseagreen" title="theme-mediumseagreen" data-style="theme-mediumseagreen" ></li>
      <li class="theme-red" title="theme-red" data-style="theme-red"></li>
      <li class="theme-blue-violet" title="theme-blue-violet" data-style="theme-blue-violet"></li>
      <li class="theme-slateblue" title="theme-slateblue" data-style="theme-slateblue"></li>
      <li class="theme-lightseagreen" title="theme-lightseagreen" data-style="theme-lightseagreen"></li>
    </ul>
    <div class="reset text-center mt-2"><a class="reset-btn btn-border btn-radius btn" href="#"><span>Reset All</span></a></div>
  </div>
</div>

<!--color-customizer end-->


<!--back-to-top start-->

<div id="scroll-top"><a class="top arrow" href="#top"><i class="ti-arrow-up"></i></a></div>

<!--back-to-top end-->


<!-- inject js start -->

<!--== jquery -->
<script src="js/jquery.3.3.1.min.js"></script>

<!--== popper -->
<script src="js/popper.min.js"></script>

<!--== bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!--== jquery appear -->
<script src="js/jquery.appear.js"></script>

<!--== jquery easing -->
<script src="js/jquery.easing.min.js"></script>

<!--== modernizr -->
<script src="js/modernizr.js"></script>

<!--== menu -->
<script src="js/menu/jquery.smartmenus.js"></script>

<!--== lightgallery -->
<script src="js/lightgallery/lightgallery.js"></script>

<!--== audioplayer -->
<script src="js/lightgallery/audioplayer.js"></script>

<!--== magnific-popup -->
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!--== owl-carousel -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>

<!--== slit-slider -->
<script src="js/slit-slider/jquery.ba-cond.min.js"></script>
<script src="js/slit-slider/jquery.slitslider.js"></script>

<!--== slick-slider -->
<script src="js/slick-slider/slick.js"></script>

<!--== jarallax -->
<script src="js/jarallax/jarallax.min.js"></script>

<!--== counter -->
<script src="js/counter/counter.js"></script>

<!--== countdown -->
<script src="js/countdown/jquery.countdown.min.js"></script>

<!--== isotope -->
<script src="js/isotope/isotope.pkgd.min.js"></script>

<!--== contact-form -->
<script src="js/contact-form/contact-form.js"></script>

<!--== validate -->
<script src="js/contact-form/jquery.validate.min.js"></script>

<!--== map api -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!--== map -->
<script src="js/map.js"></script>

<!--== typer -->
<script src="js/typer/typer.js"></script>

<!--== color-customizer -->
<script src="js/color-customize/color-customizer.js"></script>

<!--== theme-script -->
<script src="js/theme-script.js"></script>

<!-- inject js end -->

</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'n3plcpnl0082'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>
