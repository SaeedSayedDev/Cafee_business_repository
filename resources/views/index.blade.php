<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delicious Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



  <!-- =======================================================
  * Template Name: Delicious - v4.8.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      @foreach($informations as $information)
      <i class="bi bi-phone d-flex align-items-center"><span> {{$information->phone1}} </span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>{{$information->open_days}} - {{$information->open_hours}}</span></i>
      @endforeach
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">Delicious</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Delicious</span> Restaurant</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
            @foreach($about as $about)


            <div class="content">

              <h3>{{$about->title}}</strong></h3>
              <p>
                {{$about->information}}
              </p>

              <ul>
                @foreach($aboutFeature as $feature)
                <li><i class="bx bx-check-double"></i>{{$feature->feature}}</li>
                @endforeach
              </ul>
              <p>
                {{$about->descreption}}
              </p>
            </div>

            @endforeach
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <?php $index = 1; ?>
          @foreach($our_features as $feature)
          <div class="col-lg-4">
            <div class="box">
              <span>0{{$index}}</span>
              <h4>{{$feature->title}}</h4>
              <p>{{$feature->description}}</p>
            </div>
          </div>
          <?php $index++ ?>
          @endforeach
        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              @foreach($menuCategories as $menuCategory)
            <li data-filter=".{{str_replace(' ', '', $menuCategory->name)}}">{{$menuCategory->name}}</li>
              @endforeach

            </ul>
          </div>
        </div>

        <div class="row menu-container">
          @foreach($menuItems as $item)
          <div class="col-lg-6 menu-item {{str_replace(' ', '', $item->category->name)}}">

            <div class="menu-content">

              <a>{{$item->name}}</a><span>{{$item->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$item->description}}
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">

              @foreach ($specials as $special)
              <li class="nav-item">
                <a class="nav-link @if($special->id == 1) active show @endif" data-bs-toggle="tab" href="#tab-{{$special->id}}">{{$special->dish_name}}</a>
              </li>
              @endforeach

            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

              @foreach($specials as $special)
              <div class="tab-pane @if($special->id == 1) active show @endif" id="tab-{{$special->id}}">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>{{$special->dish_title}}</h3>
                    <p class="fst-italic">{{$special->dish_desc_top}}</p>
                    <p>{{$special->dish_desc_bottom}}</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src='{{asset("Images/special/$special->dish_image")}}' alt="" style="width:280px; height:280px;" class=" rounded-circle img-fluid">
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">
            @foreach($events as $event)
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img style="width:600px ; height:500px" src='{{asset("Images/Event/$event->event_image")}}' class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>{{$event->event_name}}</h3>
                  <div class="price">
                    <p><span>{{$event->event_price}}</span></p>
                  </div>
                  <p class="fst-italic">
                    {{$event->event_desc_top}}
                  </p>
                  <ul>
                    <!-- {{$event->event_feature}} -->
                    @foreach ($event->event_feature as $feature)

                    <li><i class="bi bi-check-circle"></i> {{$feature->ourFeatures}} </li>
                    @endforeach
                    <!-- <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li> -->
                  </ul>
                  <p>
                    {{$event->event_desc_bottom}}

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            @endforeach



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->


    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="container text-center">
          <button type="button" data-toggle="collapse" data-target="#demo" class="book-a-table-btn scrollto w-50 border-0 mb-5">Book a table</button>

          <div id="demo" class="collapse">

            <div class="menu">
              <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">Show All</li>
                    @foreach($menuCategories as $menuCategory)
                    <li data-filter=".{{str_replace(' ', '', $menuCategory->name)}}">{{$menuCategory->name}}</li>
                    @endforeach

                  </ul>
                </div>
              </div>

              <div>
                @if($errors->any())
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                  {{$error}}
                  @endforeach
                </div>
                @endif
                @if (session()->get('erorr'))
                <div class="alert alert-danger">
                  {{session()->get('erorr')}}
                </div>
                @endif
                @if (session()->get('massege'))
                <div class="alert alert-success">
                  {{session()->get('massege')}}
                </div>
                @endif
                <form action="{{url('/booking/store')}}" method="post">
                  @csrf

                  <!-- menu for book table -->
                  <div class="row menu-container pb-5">
                    @foreach($menuItems as $item)
                    <div class="col-lg-6 menu-item {{str_replace(' ', '', $item->category->name)}}">

                      <div class="menu-content">

                        <a><input type="checkbox" name="menu_id[]" value="{{$item->id}}" class="mx-2">
                          {{$item->name}}</a><span>{{$item->price}}</span>
                      </div>
                      <div class="menu-ingredients mx-5 text-start">
                        {{$item->description}}
                      </div>
                    </div>
                    @endforeach
                  </div>

                  <!-- information for book table -->
                  <div class="pt-5">
                    <div class="row">
                      <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" value="said" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">

                      </div>

                      <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" value="saidsayed9061@gmail.com" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">

                      </div>

                      <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" value="01096505009" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">

                      </div>

                      <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="datetime-local" name="startDateTime" class="block w-full form-control appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                      </div>

                      <div class="col-lg-4 col-md-6 form-group mt-3">
                        <select name="table_id" required class="block w-full form-select appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 rounded-0 form-control">
                          <option value="" disabled selected hidden>Select Table</option>
                          @foreach ($tables as $table)
                          <option value="{{$table->id}}">Table {{$table->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="number" class="form-control" value="4" name="ofPeople" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">

                      </div>
                    </div>

                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    </div>

                  </div>
                  <div class="text-center"><button type="submit" class="book-a-table-btn scrollto w-25 border-0 mb-5">Check Out</button></div>
                </form>
              </div>
            </div>

          </div>



        </div>
      </div>
      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row g-0">
          @foreach($images as $image)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href='{{asset("Images/Images/$image->images")}}' class="gallery-lightbox">
                <img style="width: 250px; height:250px" src='{{asset("Images/Images/$image->images")}}' alt="" class="img-fluid w-100">
              </a>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          @foreach($chefs as $chef)
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img style="width:415px; height: 277px;" src='{{asset("images/Chef/$chef->image")}}' class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$chef->name}}</h4>
                <span>{{$chef->job_title}}</span>
                <div class="social">
                  @foreach($chef->chef_social as $social)
                  @if($social->facebook != null)
                  <a href="{{$social->facebook}}"><i class="fa-brands fa-facebook"></i></a>
                  @endif
                  @if($social->instagram != null)
                  <a href="{{$social->instagram}}"><i class="fa-brands fa-instagram"></i></i></a>
                  @endif
                  @if($social->twitter != null)
                  <a href="{{$social->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                  @endif
                  @if($social->tiktok != null)
                  <a href="{{$social->tiktok}}"><i class="fa-brands fa-tiktok"></i></a>
                  @endif

                  @endforeach
                </div>
              </div>
            </div>
          </div>
          @endforeach


        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      <div class="map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14160.473734478968!2d31.273750174288867!3d29.84056419340377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145835d6251b8eff%3A0xe6897fa3e61142a7!2z2KfZhNio2K_Ysdi02YrZhg!5e0!3m2!1sar!2seg!4v1662752846455!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14160.473734478968!2d31.273750174288867!3d29.84056419340377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145835d6251b8eff%3A0xe6897fa3e61142a7!2z2KfZhNio2K_Ysdi02YrZhg!5e0!3m2!1sar!2seg!4v1662752846455!5m2!1sar!2seg" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            @foreach ($informations as $information)
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location</h4>
              <p>{{$information->location}}</p>

              <!-- <p>A108 Adam Street<br>New York, NY 535022</p> -->
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>{{$information->open_hours}} </p>
              <p>{{$information->open_days}}</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>{{$information->email1}}</p>
              <p>{{$information->email2}}</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>{{$information->phone1}}</p>
              <p>{{$information->phone2}}</p>
            </div>
            @endforeach
          </div>
        </div>

        <form action='{{url("/contact/store")}}' method="POST" role="form" class="pt-5">
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <!-- <div class="form-group mt-3">
            <input type="hidden" class="form-control" name="is_reading" value="not_reading" id="is_reading">
          </div> -->
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>

          <div class="text-center"><button class="btn btn-warning rounded-5 text-white mt-4 " type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Delicious</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="https://twitter.com/SaidSayedSalah4" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/said.sayed.182/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/said.sayed.182/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/said-sayed-488071244/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <!-- add a new script tag, and listen for the upcoming event -->
  <script src="{{ asset('js/app.js') }}"></script>
<!-- add a new script tag, and listen for the upcoming event -->
<script type="text/javascript">
    // Echo is available via window.Echo, in app.js file
    Echo.channel('events')
        .listen('.activity-monitor', (e) => {
            console.log(e);
        });
</script>
</body>

</html>