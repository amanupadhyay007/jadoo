<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadoo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <!-- icon -->
  <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Main CSS Link -->
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <!-- ================================ -->
  <!-- NAVBAR-->
  <!-- ================================ -->

  <div class="header sticky-top">
    <nav class="navbar navbar-expand-lg">
      <div class="container logo" style="padding: 0px;">
        <img src="images/logo.svg" alt="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">

            <li class="nav-item px-3 px-xl-4">
              <a style="padding-left: 55px ;" class="nav-link fw-medium" href="#service">Service</a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a style="padding-left: 40px;" class="nav-link fw-medium" href="#destination">Destination</a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a style="padding-left: 40px;" class="nav-link fw-medium" href="#booking">Booking</a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a class="nav-link fw-medium" href="#testimonial">Testimonial</a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a class="nav-link fw-medium" href="login.html">Login</a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a class="btn btn-outline-dard order-1 order-lg-0 fw-medium" href="signup.html">Sign Up</a>
            </li>
            <li class="nav-item dropdown" style="padding: 0px;">
              <a class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium" href="#"
                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                EN
              </a>
              <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius: 0.3rem;">
                <li><a class="dropdown-item" href="#">EN</a></li>
                <li><a class="dropdown-item" href="#">BN</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- ================================ -->
  <!-- HOME -->
  <!-- ================================ -->

  <section style="position:relative">
    <div class="bg-holder"></div>
    <div class="container">
      <div class="row flex:start;">
        <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end " ;>
          <img class="pt-7 pt-md-0 hero-img" src="images/hero-img.png" alt="hero-header">
          <img src="images/hero-bg.svg" alt=""
            style="position: absolute; right: 0px; z-index: -1;  height:800px;   width: 100%;  transform: translateY(-90px); scale: 1.4;  ">
        </div>

        <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
          <h4 class="fw-bold text-danger mb-3">Best Destinations around the world</h4>
          <h1 class="hero-title">Travel, enjoy and live a new and full life</h1>
          <p class="mb-4 fw-medium">Built Wicket longer admire do barton vanity itself do in it.<br
              class="d-none d-xl-block">Preferred to sportsmen it engrossed listening. Park gate<br
              class="d-none d-xl-block">sell they west hard for the.</p>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>

  <!-- ================================ -->
  <!-- SERVICE -->
  <!-- ================================ -->


  <section class="pt-md-6" id="service">
    <div style="position: relative; display: flex; flex-direction: column; gap: 60px;" class="container">
      <div class="position-absolute z-index-1 end-0 d-none d-lg-block" style=" background-color: red; width: 100%;">
        <img style="position: absolute;  left:90%;" ; src="images/shape.svg" style="max-width: 200px" alt="service" />
      </div>
      <div class="mb-7 text-center">
        <h5 class="text-secondary">CATEGORY </h5>
        <h3>We Offer Best Services</h3>
      </div>
      <div class="row">
        <div class="card col-lg-3 col-sm-6 mb-6">
          <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
            <div class="card-body p-xxl-5 p-4">
              <img src="images/icon/icon1.png" width="75" alt="Service" />
              <h4 class="mb-3">Calculated Weather</h4>
              <p class="mb-0 fw-medium">Built Wicket longer admire do barton vanity itself do in it.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-6">
          <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
            <div class="card-body p-xxl-5 p-4">
              <img src="images/icon/icon2.png" width="75" alt="Service" />
              <h4 class="mb-3">Best Flights</h4>
              <p class="mb-0 fw-medium">Engrossed listening. Park gate sell they west hard for the.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-6">
          <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
            <div class="card-body p-xxl-5 p-4"> <img src="images/icon/icon3.png" width="75" alt="Service" />
              <h4 class="mb-3">Local Events</h4>
              <p class="mb-0 fw-medium">Barton vanity itself do in it. Preferd to men it engrossed listening.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-6">
          <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
            <div class="card-body p-xxl-5 p-4"> <img src="images/icon/icon4.png" width="75" alt="Service" />
              <h4 class="mb-3">Customization</h4>
              <p class="mb-0 fw-medium">We deliver outsourced aviation services for military customers</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =============================== -->
  <!-- DESTINATION -->
  <!-- =============================== -->

  <section class="pt-3" id="destination">
    <div class="container">
      <div class="position-absolute top-100 start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4">
        <!-- <img src="images/shape_dest.svg" alt="destination" /> -->
      </div>
      <div class="mb-7 text-center">
        <h5 class="text-secondary">Top Selling </h5>
        <h3 class="pb-4 fw-bold font-cursive text-capitalize">Top Destinations</h3>
      </div>
      <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card overflow-hidden shadow">
            <img class="card-img-top" src="images/dest1.jpg" alt="Rome, Italty" />
            <div class="card-body py-4 px-3">
              <div class="card-text d-flex flex-column flex-lg-row justify-content-between mb-3">
                <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link"
                    href="#!">Rome, Italty</a></h4>
                <span class="fs-5 fw-medium">$5,42k</span>
              </div>
              <div class="d-flex align-items-center"> <img src="images/navigation.svg" style="margin-right: 14px"
                  width="20" alt="navigation" />
                <span class="fs-0 fw-medium">10 Days Trip</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <div class="card overflow-hidden shadow">
            <img class="card-img-top" src="images/dest2.jpg" alt="London, UK" />
            <div class="card-body py-4 px-3">
              <div class="card-text d-flex flex-column flex-lg-row justify-content-between mb-3">
                <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link"
                    href="#!">London, UK</a></h4>
                <span class="fs-5 fw-medium">$4.2k</span>
              </div>
              <div class="d-flex align-items-center"> <img src="images/navigation.svg" style="margin-right: 14px"
                  width="20" alt="navigation" />
                <span class="fs-0 fw-medium">12 Days Trip</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card overflow-hidden shadow"> <img class="card-img-top" src="images/dest3.jpg"
              alt="Full Europe" />
            <div class="card-body py-4 px-3">
              <div class="card-text d-flex flex-column flex-lg-row justify-content-between mb-3">
                <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link"
                    href="#!">Full Europe</a></h4>
                <span class="fs-5 fw-medium">$15k</span>
              </div>
              <div class="d-flex align-items-center"> <img src="images/navigation.svg" style="margin-right: 14px"
                  width="20" alt="navigation" />
                <span class="fs-0 fw-medium">28 Days Trip</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================ -->
  <!-- BOOKING -->
  <!-- ================================ -->

  <section id="booking">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="mb-4 text-start">
            <h5 class="text-secondary">Easy and Fast </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Book your next trip in 3 easy steps
            </h3>
          </div>
          <div class="d-flex align-items-start mb-5">
            <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="images/selection.svg"
                width="22" alt="steps" /></div>
            <div class="flex-1">
              <h5 class="text-secondary fw-bold fs-0">Choose Destination</h5>
              <p>Choose your favourite place. No matter <br class="d-none d-sm-block"> where you travel inside the
                World.</p>
            </div>
          </div>
          <div class="d-flex align-items-start mb-5">
            <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="images/water-sport.svg"
                width="22" alt="steps" /></div>
            <div class="flex-1">
              <h5 class="text-secondary fw-bold fs-0">Make Payment</h5>
              <p>After find your perfect spot, make your <br class="d-none d-sm-block"> payment and get ready to travel.
              </p>
            </div>
          </div>
          <div class="d-flex align-items-start mb-5">
            <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="images/taxi.svg" width="22"
                alt="steps" /></div>
            <div class="flex-1">
              <h5 class="text-secondary fw-bold fs-0">Reach Airport on Selected Date</h5>
              <p>Lastly, you have to arrive at the airport <br class="d-none d-sm-block"> on time and enjoy the
                vacation.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-start">
          <div class="card position-relative shadow" style="max-width: 370px;">
            <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;"> <img
                src="images/bg.png" style="max-width:550px;" alt="shape" /></div>
            <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100" src="images/booking-img.jpg"
                alt="booking" />
              <div>
                <h5 class="fw-medium">Trip To Greece</h5>
                <p class="fs--1 mb-3 fw-medium">14-29 June | by Robbin joseph</p>
                <div class="icon-group mb-4">
                  <span class="btn icon-item">
                    <img src="images/leaf.svg" alt="" /></span>
                  <span class="btn icon-item"> <img src="images/map.svg" alt="" /></span>
                  <span class="btn icon-item"> <img src="images/send.svg" alt="" /></span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center mt-n1">
                    <img class="me-3" src="images/building.svg" width="18" alt="building" />
                    <span class="fs--1 fw-medium">24 people going</span>
                  </div>
                  <div class="show-onhover position-relative">
                    <div
                      class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                      style="width: 260px;border-radius:18px;">
                      <div class="card-body py-3">
                        <div class="d-flex">
                          <div style="margin-right: 10px">
                            <img class="rounded-circle" src="images/chhota-image.png" width="50" alt="favorite" />
                          </div>
                          <div>
                            <p class="fs--1 mb-1 fw-medium">Ongoing </p>
                            <h5 class="fw-medium mb-3">Trip to rome</h5>
                            <h6 class="fs--1 fw-medium mb-2"><span>40%</span> completed</h6>
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="heart btn"> <img src="images/heart.svg" width="20" alt="step" /></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================ -->
  <!-- TESTIMONIAL -->
  <!-- ================================ -->

  <!-- <section id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="mb-8 text-start">
            <h5 class="text-secondary">Testimonials </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">What people say about Us.</h3>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
          
        </div>
      </div>
    </div> 
  </section>-->

  <!-- ================================ -->
  <!-- PARTNER -->
  <!-- ================================ -->

  <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
    <div id="partner" class="container">
      <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
        <div class="col">
          <div class="card shadow-hover mb-4" style="border-radius:10px;">
            <div class="card-body text-center">
              <img class="img-fluid" src="images/PARTNER 1.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-hover mb-4" style="border-radius:10px;">
            <div class="card-body text-center">
              <img class="img-fluid" src="images/PARTNER 2.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-hover mb-4" style="border-radius:10px;">
            <div class="card-body text-center">
              <img class="img-fluid" src="images/PARTNER 3.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-hover mb-4" style="border-radius:10px;">
            <div class="card-body text-center">
              <img class="img-fluid" src="images/PARTNER 4.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-hover mb-4" style="border-radius:10px;">
            <div class="card-body text-center">
              <img class="img-fluid" src="images/PARTNER 5.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ================================ -->
  <!-- Subscribe -->
  <!-- ================================ -->
  
  <section class="pt-6">
    <div id="subscribe" class="container">
      <div class="py-8 px-5 position-relative text-center"
        style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
        <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img src="images/send.png"
            style="max-width:70px;" alt="send icon" /></div>
        <div class="position-absolute end-0 top-0 z-index--1"> <img src="images/shape-bg2 (1).png" width="264"
            alt="cta shape" /></div>
        <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img
            src="images/shape-bg1 (1).png" style="max-width: 340px;" alt="cta shape" /></div>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
            <h2 class="text-secondary lh-1-7 mb-7">Subscribe to get information, latest news and other interesting
              offers about Cobham</h2>
            <form class="row g-3 align-items-center w-lg-75 mx-auto">
              <div class="col-sm">
                <div class="input-group-icon">
                  <input class="form-control form-little-squirrel-control" type="email" placeholder="Enter email "
                    aria-label="email" />
                  <img class="input-box-icon" src="images/mail.svg" width="17" alt="mail" />
                </div>
              </div>
              <div class="col-sm-auto">
                <button class="btn btn-danger orange-gradient-btn fs--1">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!-- ================================ -->
    <!-- FOOTER -->
    <!-- ================================ -->

    <section class="pb-lg-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0">
            <img class="mb-4" src="images/logo2.svg" alt="jadoo" />
            <p class="fs--1 text-secondary mb-0 fw-medium">Book your trip in minute, get full Control for much longer.
            </p>
          </div>
          <div class="Company col-lg-2 col-md-4 ">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Company</h4>
            <ul style="list-style-type: none;">
              <li><a href="#about">About</a></li>
              <li><a href="#about">Careers</a></li>
              <li><a href="#about">Mobile</a></li>
            </ul>
          </div>
          <div class="Company col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
            <ul style="list-style-type: none;">
              <li><a href="#about">Help/FAQ</a></li>
              <li><a href="#about">Press</a></li>
              <li><a href="#about">Affiliate</a></li>
            </ul>
          </div>
          <div class="Company col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
            <ul style="list-style-type: none;">
              <li><a href="#about">Airlinefees</a></li>
              <li><a href="#about">Airline</a></li>
              <li><a href="#about">Low fare tips</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
            <div class="icon-grp mb-4">
              <a class="text-decoration-none icon-item shadow-social" id="facebook" href="#!">
                <i class="face fa-brands fa-facebook"></i></a>
              <a class="text-decoration-none icon-item shadow-social" id="instagram" href="#!">
                <i class="fa-brands fa-instagram"></i></a>
              <a class="text-decoration-none icon-item shadow-social" id="twitter" href="#!">
                <i class="fa-brands fa-twitter"></i></a>
            </div>
            <h4 class="fw-medium font-sans-serif text-secondary mb-3">Discover our app</h4>
            <div class="d-flex align-items-center">
              <a href="#!"> <img class="me-2" src="images/play-store.png" alt="play store" /></a>
              <a href="#!"> <img src="images/apple-store.png" alt="apple store" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="py-4 text-center">
      <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved@jadoo.co </p>
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>