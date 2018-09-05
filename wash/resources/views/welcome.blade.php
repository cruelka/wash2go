<!doctype html>
<html lang="en">
<head>
  <title>Wash2Go</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Custom built theme - This already includes Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">


  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-icon-57x57.png')}}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-icon-76x76.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-icon-120x120.png')}}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-icon-144x144.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-icon-152x152.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png')}}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favicon/android-icon-192x192.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{ asset('images/favicon/manifest.json')}}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('images/favicon/ms-icon-144x144.png')}}">
  <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

  <div id="so-content" style="overflow-x:hidden">
  <div class="header so-header so-header_scrolled">
    <a href="/" class="header__block">
      <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="header__logo so-header__logo">
    </a>
    <div class="header__block header__fullscreen-only" style="flex-grow: 2;">
        <div class="header__nav" onclick="soModal.open('.navigation-modal')">
            Our products
          </div>
          <a  href="/blog" class="header__nav">
              News
          </a>
          <a href="page/about-us" class="header__nav">
              About
          </a>
          <a href="/page/contact" class="header__nav">
              Contacts
          </a>
    </div>



    <div class="header__block">
        @if (Auth::check())
          <a href="/home" class="header__nav header__fullscreen-only">
            <img class="so-header__user-i" src="{{ asset('images/icons/user.svg')}}">
              {{ Auth::user()->name }}
          </a>
        @else
          <a href="/login" class="header__nav header__fullscreen-only">
              Sign In
          </a>

          <a href="/register" class="header__nav header__fullscreen-only">
              Sign Up
          </a>

        @endif

        <a  href="/booking"  class="header__nav header__fullscreen-only  header__nav_wrapped">
            Book now
        </a>

          <div class="header__mobile-only header__burger so-header__burger so-header__burger_scrolled"  onclick="soModal.open('.navigation-modal')">
            <span></span><span></span><span></span>
          </div>
          <a href="/cart" class="">
            <img class="header__button-icon so-header__bag" src="{{ asset('images/icons/bag.svg')}}">
          </a>
</div>


</div>


<div style="position: relative;">

  <div style="position: relative;max-width: 1680px;margin: 0 auto;">

  <div class="slider stick-dots">
    <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="{{asset('images/slider/1.jpg')}}" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
      <div class="slide__content">
        <div class="slide__content--headings">
           <h2 class="text-slider animated" data-animation-in="fadeInUp">Brilliant results without a drop of water</h2>
           <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3">Waterless Car Care</p>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="{{asset('images/slider/2.jpg')}}" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
      <div class="slide__content">
        <div class="slide__content--headings">
           <h2 class="text-slider animated" data-animation-in="fadeInRight">Eco-Friendly Cleaners</h2>
           <p class="animated" data-animation-in="fadeInRight" data-delay-in="0.2">Save for anyone in the family</p>
        </div>
      </div>
    </div>


    <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="{{asset('images/slider/3.jpg')}}" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
      <div class="slide__content">
        <div class="slide__content--headings">
           <h2 class="text-slider animated" data-animation-in="fadeInRight">High Perfomance</h2>
           <p class="animated" data-animation-in="fadeInRight" data-delay-in="0.2">For professionals in the car wash business</p>
        </div>
      </div>
    </div>

    <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="{{asset('images/slider/4.jpg')}}" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
      <div class="slide__content">
        <div class="slide__content--headings">
            <h2 class="text-slider animated" data-animation-in="fadeInUp">Brilliant results without a drop of water</h2>
            <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3">Waterless Car Care</p>
      </div>
    </div>
    </div>
    <div class="slide">
      <div class="slide__img">
        <img src="" alt="" data-lazy="{{asset('images/slider/5.jpg')}}" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
      <div class="slide__content">
        <div class="slide__content--headings" >
            <h2 class="text-slider animated" data-animation-in="fadeInRight">Eco-Friendly Cleaners</h2>
            <p class="animated" data-animation-in="fadeInRight" data-delay-in="0.2">Save for anyone in the family</p>
        </div>
      </div>
    </div>

  </div>

  
  <!--
  <div class="welcome-fullscreen-owl so-header__offset">

    <div class="welcome-fullscreen" style="background-image: url({{asset('images/slider/1.jpg')}})">
      <div class="container welcome-fullscreen__inner">
        <div class="welcome-fullscreen__data">
          <div class="welcome-fullscreen__body">
                Brilliant results without a drop of water
              </div>
              <div class="welcome-fullscreen__heading-special">
              Waterless Car Care
              </div>
          </div>
      </div>
    </div>

    <div class="welcome-fullscreen" style="background-image: url({{asset('images/slider/2.jpg')}})">
      <div class="container welcome-fullscreen__inner">
        <div class="welcome-fullscreen__data" >
          <div class="welcome-fullscreen__body">
                Eco-Friendly Cleaners
              </div>
              <div class="welcome-fullscreen__heading-special">
              Save for anyone in the family
              </div>
          </div>
      </div>
    </div>

    <div class="welcome-fullscreen" style="background-image: url({{asset('images/slider/3.jpg')}})">
      <div class="container welcome-fullscreen__inner">
        <div class="welcome-fullscreen__data">
          <div class="welcome-fullscreen__body">
                Hign Perfomance
              </div>
              <div class="welcome-fullscreen__heading-special">
              For professionals in the car wash business
              </div>
          </div>
      </div>
    </div>

  </div>

  -->


  </div>

<!--
  <div class="booking-form__wrapper">

  <div class="booking-form" >

                  <div class="booking-form__item">
                    <div class="booking-form__item-lable">
                      Location
                    </div>
                    <select class="form-control" class="booking-form__select">
                      <option value="Jumeirah">Jumeirah</option>
                      <option value="JLT">JLT</option>
                      <option value="Muheisnah">Muheisnah</option>
                      <option value="...">...</option>
                    </select>
                  </div>
                  <div class="booking-form__item">
                    <div class="booking-form__item-lable">
                      Car type
                    </div>
                    <select class="form-control" class="booking-form__select">
                      <option value="Jumeirah">Sedan</option>
                      <option value="JLT">SUV</option>
                      <option value="Muheisnah">Convertible</option>
                    </select>
                  </div>
                  <div class="booking-form__item">
                      <div class="booking-form__item-lable">
                        Washing type
                      </div>

                      <select onchange="soBookingForm.priceChange(this)" id="booking-form__washing-type" class="form-control booking-form__select">
                        <option value="0">Select Washing</option>
                        <option value="25">Extertal Wash / 25 AED</option>
                        <option value="25">Internal Wash / 25 AED</option>
                        <option value="50">Full Wash / 50 AED</option>
                        <option value="50">Steam Internal Wash / 50 AED</option>
                        <option value="35">Steam External Wash / 35 AED</option>
                        <option value="70">Steam Full Wash / 70 AED</option>
                      </select>

                      <div class="booking-form__select form-control">Select washing</div>
                    </div>
                    <div class="booking-form__item">
                      <div class="booking-form__item-lable">
                        Choose date
                      </div>

                      <select onchange="soBookingForm.priceChange(this)" id="booking-form__washing-type" class="form-control booking-form__select">
                        <option value="0">Select Washing</option>
                        <option value="25">Extertal Wash / 25 AED</option>
                        <option value="25">Internal Wash / 25 AED</option>
                        <option value="50">Full Wash / 50 AED</option>
                        <option value="50">Steam Internal Wash / 50 AED</option>
                        <option value="35">Steam External Wash / 35 AED</option>
                        <option value="70">Steam Full Wash / 70 AED</option>
                      </select>

                      <div class="booking-form__select form-control">Select washing</div>
                    </div>

                  <div class="booking-form__item">
                    <div class="booking-form__item-lable">
                      Day
                    </div>
                    <select id="booking-form__day" class="form-control" class="booking-form__select">
                      <option value="00:00">Select day</option>
                    </select>
                  </div>
                  <div class="booking-form__item">
                    <div class="booking-form__item-lable">
                      Time
                    </div>
                    <select id="booking-form__time" class="form-control" class="booking-form__select">
                        <option value="00:00">Select time</option>
                    </select>
                  </div>

                  <div class="booking-form__item">
                      <div class="booking-form__item-lable">
                        Price
                      </div>
                      <div id="booking-form__item-total" class="booking-form__item-total">0</div>
                    </div>
                  <div class="booking-form__b">
                      <div class="booking-form__b-inner" onclick="soModal.open('.so-modal__booking-form')">
                        Book
                      </div>
                  </div>
                </div>

              </div>




  </div>
   -->
<div class="container">

  <div class="adventages sector">


    <div class="row mt-2" >
      <div class="col-lg-3 col-md-3">
        <div class="adventages__item" data-aos="fade-right">
          <div class="adventages__item-icon">
            <img class="adventages__item-icon-img" alt="Icon" src="{{ asset('images/icons/adventages/1.svg') }}">
          </div>
          <div class="adventages__item-heading" >
              ECO-FRIENDLY
          </div>
          <div class="adventages__item-body">
              Bio-based car care products with minimal impact on the environment
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="adventages__item" data-aos="fade-right">
            <div class="adventages__item-icon">
                <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/adventages/3.svg')}}">
            </div>
            <div class="adventages__item-heading">
              INNOVATIVE
            </div>
            <div class="adventages__item-body">
              Off-grid waterless can cleaning method that can be used anywhere without any facility
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="adventages__item" data-aos="fade-left">
              <div class="adventages__item-icon">
                  <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/adventages/2.svg')}}">
              </div>
              <div class="adventages__item-heading">
                  TOP-PERFORMANCE
              </div>
              <div class="adventages__item-body">
                  Natural products as effective
                  as their chemical competitors
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="adventages__item" data-aos="fade-left">
                <div class="adventages__item-icon">
                    <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/adventages/4.svg')}}">
                </div>
                <div class="adventages__item-heading">
                    SAFE FOR THE USER
                </div>
                <div class="adventages__item-body">
                    Formulations free of harmful solvents, additives, and VOCs
                </div>
              </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-xs-12 col-md-6">
      <div class="card-preview__info-image-bg-wrapper" data-aos="fade-right">
        <a href="/page/{{$why->slug}}" class="card-preview__info-image-bg" style="background-image:url(/storage/{{$why->image}})"></a>
      </div>
      </div>
    <div class="col-xs-12 col-md-6">
      <div class="card-preview__info" data-aos="fade-left">
        <div class="card-preview__info-inner">
            <a href="/page/{{$why->slug}}" class="card-preview__info-heading">
               {{$why->title}}
              </a>
              <div class="card-preview__info-body">
                {{ $why ->excerpt }}
              </div>
              <a href="/page/{{$why->slug}}" class="card-preview__info-lable">
                About washing
              </a>
              <a href="/page/{{$why->slug}}" class="card-preview__info-link">
                More Information <img class="card-preview__info-link-i" src="{{asset('images/icons/arrow-right_green.svg')}}" alt="Arrow">
              </a>
        </div>

      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-xs-12">
      <div class="about-wrapper">
        <img class="wheel" src="{{asset('images/icons/wheel.svg')}}" alt="Wheel" data-aos="flip-left">
        <div class="about-wrapper__inner" data-aos="fade-up">
          <div class="heading">About us</div>
          <div class="text">
              Wash2Go products are made from 100% plant-derived,
              biodegradable ingredients.

          </div>
          <div class="text"  data-aos="fade-down">
              Not only do our products help save water, they also reduce the toxic runoff from conventional car washes that find its way into our rivers and oceans.
          </div>
        </div>
        
      </div>
      <div class="row mt-5 adventages__list adventages__list_bg" id="counter">
          <div class="col-xs-6 col-sm-3 text-special" data-aos="fade-right">
            <div class="text-special__inner">
              <div class="text-special__heading"><span class="counter-value" data-count="100">0</span>%</div>
              <div class="text-special__body">Satisfaction guarantee</div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 text-special" data-aos="fade-right">
              <div class="text-special__inner">
                <div class="text-special__heading"><span class="counter-value" data-count="5000">1000</span>+</div>
                <div class="text-special__body">Cleaned cars</div>
              </div>
          </div>
          <div class="col-xs-6 col-sm-3 text-special" data-aos="fade-left">
                <div class="text-special__inner">
                  <div class="text-special__heading"><span class="counter-value" data-count="30">1</span>+</div>
                  <div class="text-special__body">high quality products</div>
                </div>
          </div>
          <div class="col-xs-6 col-sm-3 text-special" data-aos="fade-left">
            <div class="text-special__inner">
                <div class="text-special__heading"><span class="counter-value" data-count="20">1</span>M</div>
                <div class="text-special__body">Saved litersof water</div>
            </div>

          </div>
      </div>
    </div>
    
  </div>

  <div class="row mt-5">

      <div class="col-xs-12 col-md-6">
        <div class="card-preview__info" data-aos="fade-right">
          <div class="card-preview__info-inner">
              <a href="https://wash2go.ae/page/why-eco-wash" class="card-preview__info-heading">
                    {{$eco->title}}
              </a>
                <div   class="card-preview__info-body">
                {{ $eco->excerpt }}
                </div>
                <a href="https://wash2go.ae/page/why-eco-wash" class="card-preview__info-lable">
                  Benefits
                </a>
                <a href="https://wash2go.ae/page/why-eco-wash" class="card-preview__info-link">
                  More Information <img class="card-preview__info-link-i" src="{{asset('images/icons/arrow-right_green.svg')}}" alt="Arrow">
                </a>
          </div>

        </div>
      </div>

      <div class="col-xs-12 col-md-6">
        <div class="card-preview__info-image-bg-wrapper" data-aos="fade-left">
        <a href="https://wash2go.ae/page/why-eco-wash" class="card-preview__info-image-bg" style="background-image:url(/storage/{{$eco->image}})"></a>
        </div>
      
        </div>
    </div>

  <div class="adventages adventages_center sector">



    <div class="heading" data-aos="zoom-in">
        Our products
    </div>

    <div class="row mt-5">

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <a href="/category/interior" class="adventages__item adventages__item_wrapped"  data-aos="fade-right">
          <div class="adventages__item-icon">
            <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/categories/1.svg')}}">
          </div>
          <div class="adventages__item-heading">
            Interior
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3  col-xs-6">
          <a href="/category/exterior" class="adventages__item adventages__item_wrapped" data-aos="fade-right">
            <div class="adventages__item-icon">
              <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/categories/2.svg')}}">
            </div>
            <div class="adventages__item-heading">
              Exterior
            </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
          <a href="/category/accessories" class="adventages__item adventages__item_wrapped" data-aos="fade-left">
            <div class="adventages__item-icon">
              <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/categories/3.svg')}}">
            </div>
            <div class="adventages__item-heading">
              Accessories
            </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
          <a href="/category/combo-pack" class="adventages__item adventages__item_wrapped" data-aos="fade-left">
            <div class="adventages__item-icon">
              <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/categories/4.svg')}}">
            </div>
            <div class="adventages__item-heading">
              Combo Pack
            </div>
          </a>
      </div>
    </div>


  <div class="adventages sector">
    <div class="heading" data-aos="zoom-in">
      Most selling
    </div>



  <div class="row mt-5">
      @foreach($products as $product)
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="product-card product-card_square" data-aos="zoom-in">
                <a href="/product/{{$product->id}}" class="product-card__img" style="background: url('/storage/{{$product->image}}')">
                  <div class="product-card__add-to-card-b">
                    <div class="button button_red">
                      <span class="button__icon">
                        <img class="button__icon-img" src="{{asset('images/icons/plus_white.svg')}}">
                      </span>
                      <span class="button__body">
                        Add to cart
                      </span>
                    </div>
                  </div>
                  <div class="product-card__marked">

                  </div>
                </a>
                <div class="product-card__body">
                  <a href="/product/{{$product->id}}" class="product-card__title">
                      {{$product->title}}
                  </a>
                  <div class="product-card__price">
                      {{$product->price}}   AED
                  </div>
                </div>

          </div>
      </div>
    @endforeach



  </div>
  </div>


  <div class="sector">
      <div class="heading" data-aos="zoom-in">
        Latest News
      </div>

      <div class="row mt-5">
          @foreach($posts as $post)
          <div class="col-lg-6 col-md-6">



                  <div class="news-card" data-aos="fade-down">
                      <div class="news-card__lable">
                            {{$post->meta_keywords}}
                      </div>
                      <a href = '/post/{{$post->slug}}'  class="news-card__title">
                          {{$post->title}}
                      </a>
                      <div class="news-card__additional">
                          {{ \Carbon\Carbon::parse($post->created_at)->format('d/M/y')}}
                      </div>
                      <a href="/post/{{$post->slug}}" class="news-card__img-wrapper">
                        <div class="news-card__img" style="background: url('/storage/{{$post->image}}')">
                        </div>
                      </a>
                      <div class="news-card__description">
                          {{ $post->excerpt }}
                      </div>
                      <a href = '/post/{{$post->slug}}' class="news-card__b">
                          Continue reading
                      </a>
                  </div>


          </div>
          @endforeach

      </div>
</div>
      <div class="sector">
        <div class="button" data-aos="zoom-in">
            <a href="/blog" class="button__body">
                More News
            </a>
        </div>
      </div>

      <div class="sector">
        <div class="">
          <div class="row mt-5">
            <div class="col-lg-3 col-md-3  col-xs-12">
              <img src="{{ asset('images/icons/quotes.svg') }}" class="review__quotes" alt="Quotes">
            </div>
            <div class="col-lg-9 col-md-9  col-xs-12">
                <div class="review">
                  <div class="review__heading" data-aos="zoom-in">What Customers Say</div>
                  <div class="review__inner">

                          <div class="review__item">
                              <img src="{{ asset('images/icons/quotes_green.svg') }}" class="review__item-quotes" alt="Quotes">
                              <div class="review__item-body">
                                  Wash 2 Go service is top quality. Got worth of my money. Will definitely go for waterless car wash always because the kind of care is in this service worth visiting again.

                              </div>
                              <div class="review__autor">
                                  Al Saeedi
                              </div>
                            </div>
                  
                          <div class="review__item">
                              <img src="{{ asset('images/icons/quotes_green.svg') }}" class="review__item-quotes" alt="Quotes">
                              <div class="review__item-body">
                                  I never thought a car can be washed without a drop of water. Leave about outcome.

                                  But after having my car washed from wash2go I was surprised the care and cleanliness it brought

                                  To my lovely car.                              </div>
                              <div class="review__autor">Hussain</div>
                            </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>


  </div>








<div class="subscribe subscribe_white ">
  <div class="container">


    <div class="row mt-2">
      <div class="col-xs-12" style="display: block;margin: 0 auto;">
        
        <div class="subscribe__inner">
            
          <div class="subscribe__heading text-center">
                Sign up for monthly news <br>
                <span class="text-success">and ways to help save earth!</span>
            </div>
          
          <form class="form-inline subscribe__form">

              <div class="form-group mb-2">


              </div>
              <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">E-Mail</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-success mb-2">Confirm</button>
          
            </form>
          </div>

      </div>

    </div>
  </div>
</div>







</div>

<div class="footer footer_blue">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-4">

            <div class="row">
                <div class="col-lg-12">
                  <ul class="footer__list">
                    <li class="footer__item footer__item_heading" >Menu</li>
                  </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                  <ul class="footer__list">

                    <li class="footer__item" ><a href="/category/interior">Interior</a></li>
                    <li class="footer__item" ><a href="/category/exterior">Exterior</a></li>
                    <li class="footer__item" ><a href="/category/accessories">Accessories</a></li>
                    <li class="footer__item" ><a href="/category/combo-pack">Combo Pack</a></li>
                  </ul>
                </div>


              </div>

        </div>

        <div class="col-lg-4">


                <ul class="footer__list">
                  <li class="footer__item footer__item_heading" >Links</li>
                </ul>

                <ul class="footer__list">

                  <li class="footer__item" ><a href="/page/terms-and-conditions">Terms and Conditions</a> </li>
                  <li class="footer__item" >Privacy Policy</li>
                  <li class="footer__item" >Return & Cancellation Policy</li>
                  <li class="footer__item" >Shipping & Delivery Policy</li>
                </ul>

        </div>
        <div class="col-lg-4">

                <ul class="footer__list">
                  <li class="footer__item footer__item_heading" >Contact us</li>
                </ul>

                <ul class="footer__list">

                  <li class="footer__item" >Business village <br>
                    6th Floor <br>
                    Office #601
                    </li>
                  <li class="footer__item" >Deira Dubai</li>
                  <li class="footer__item" >055 464 4954</li>
                  <li class="footer__item" >© Copyright Wash 2 Go</li>
                </ul>

        </div>
      </div>


    </div>
  </div>
  <div style="display: none;">Book Now</div>
  <div id="so-modal__shadow" onclick="soModal.close()"></div>

  <a href="/booking" class="booking-mobile">
    <img class="booking-mobile__img" src="{{asset('images/booking.svg')}}" alt="Book Now">
  </a>
</div>

</div>



<div id="so-modal">
    <div class="container">
      <div class="so-modal__inner">
        <div class="so-modal__close__wrapper">
          <img onclick="soModal.close()" class="so-modal__close" src="{{asset('images/icons/cross_black.svg')}}" alt="cross">
        </div>
        <div class="so-modal__item so-modal__booking-form form">
          <div class="so-modal__booking-form__heading">
           <img src="{{asset('images/logo.svg')}}"  class="so-modal__booking-form__logo" alt="Logo">
           <a href="/booking" class="so-modal__booking-form__lable">Booking Form</a>
          </div>

          <div class="booking-steps">
              <div class="booking-steps__status"></div>

              <div class="booking-steps__item booking-steps__item_active" id="booking-steps__item-1">
                <div class="booking-steps__heading">Choose Location</div>
                <div class="booking-steps__body">
                  <div class="row">

                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                      <div  onclick="soBookingForm.changePage(2)" class="booking-steps__card-item">
                        <img src="{{asset('images/icons/home.svg')}}" alt="Home" class="booking-steps__card-item-img">
                        At home
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                      <div onclick="soBookingForm.changePage(3)" class="booking-steps__card-item">
                        <img src="{{asset('images/icons/location.svg')}}" alt="Home"  class="booking-steps__card-item-img">
                        Visit us
                      </div>
                    </div>
                  </div>


                </div>
              </div>

              <div class="booking-steps__item" id="booking-steps__item-2">
                <div class="booking-steps__navigation">
                  <div class="button" onclick="soBookingForm.changePage(1)">
                    <div class="button__body">
                      Back
                    </div>
                  </div>
                  <div class="button button_right" onclick="soBookingForm.changePage(4)">
                    <div class="button__body">
                      Continue
                    </div>
                  </div>
                </div>

                <div class="booking-steps__heading">Select your location</div>
                <div class="booking-steps__body">

                  <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                  <div id="map"></div>
                </div>
              </div>


              <div class="booking-steps__item" id="booking-steps__item-3">
                <div class="booking-steps__navigation">
                  <div class="button" onclick="soBookingForm.changePage(1)">
                    <div class="button__body">
                      Back
                    </div>
                  </div>
                  <div class="button button_right" onclick="soBookingForm.changePage(4)">
                    <div class="button__body">
                      Continue
                    </div>
                  </div>
                </div>

                <div class="booking-steps__heading">We are here</div>
                <div class="booking-steps__body">

                  <div id="map2" style="height: 400px"></div>

                </div>
              </div>

              <div class="booking-steps__item" id="booking-steps__item-4">
              <div class="booking-steps__navigation">
                  <div class="button" onclick="soBookingForm.changePage(2)">
                    <div class="button__body">
                      Back
                    </div>
                  </div>
                  <div class="button button_right" onclick="soBookingForm.changePage(5,'bodytype')">
                    <div class="button__body">
                      Continue
                    </div>
                  </div>
                </div>

                <div class="booking-steps__heading">Select Car type</div>



                <div class="row">

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/micro.svg')}}" alt="Micro" class="booking-steps__card-item-img">
                        Micro
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/sedan.svg')}}" alt="Sedan" class="booking-steps__card-item-img">
                        Sedan
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/cuv.svg')}}" alt="CUV" class="booking-steps__card-item-img">
                        CUV
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/suv.svg')}}" alt="Suv" class="booking-steps__card-item-img">
                        SUV
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/hatchback.svg')}}" alt="Hatchback" class="booking-steps__card-item-img">
                        Hatchback
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/roadster.svg')}}" alt="Roadster" class="booking-steps__card-item-img">
                        Roadster
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/pickup.svg')}}" alt="Pickup" class="booking-steps__card-item-img">
                        Pickup
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/van.svg')}}" alt="Van" class="booking-steps__card-item-img">
                        Van
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/coupe.svg')}}" alt="Coupe" class="booking-steps__card-item-img">
                        Coupe
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/supercar.svg')}}" alt="Supercar" class="booking-steps__card-item-img">
                        Supercar
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/cabriolet.svg')}}" alt="Cabriolet" class="booking-steps__card-item-img">
                        Cabriolet
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                      <div class="booking-steps__card-item booking-steps__card-item_body-type">
                        <img src="{{asset('images/icons/bodytype/minivan.svg')}}" alt="Minivan" class="booking-steps__card-item-img">
                        Minivan
                      </div>
                    </div>

                  </div>

              </div>

              <div class="booking-steps__item" id="booking-steps__item-5">
                <div class="booking-steps__navigation">
                  <div class="button" onclick="soBookingForm.changePage(4)">
                    <div class="button__body">
                      Back
                    </div>
                  </div>
                  <div class="button button_right" onclick="soBookingForm.changePage(6,'washingtype')">
                    <div class="button__body">
                      Continue
                    </div>
                  </div>
                </div>

                <div class="booking-steps__heading">Select washing type</div>
                <div class="booking-steps__errors"></div>
                <div class="booking-steps__body">
                  <div class="booking-steps__list">
                    <div class="booking-steps__list-lable">
                      Internal
                    </div>
                    <div class="booking-steps__list-item booking-steps__list-item_internal booking-steps__list-item_no-steam" value="25" oneandonly="booking-steps__list-item_internal">
                      <span class="booking-steps__list-item-checkbox">
                        <span class="booking-steps__list-item-checkbox-i"></span>
                      </span>
                      <span class="booking-steps__list-item-name">
                        Internal Washing
                      </span>
                      <span class="booking-steps__list-item-price">
                        25 AED
                      </span>
                    </div>
                    <div class="booking-steps__list-item booking-steps__list-item_internal booking-steps__list-item_steam" value="50" oneandonly="booking-steps__list-item_internal">
                      <span class="booking-steps__list-item-checkbox">
                        <span class="booking-steps__list-item-checkbox-i"></span>
                      </span>
                      <span class="booking-steps__list-item-name">
                        Internal Steam Washing
                      </span>
                      <span class="booking-steps__list-item-price">
                        50 AED
                      </span>
                    </div>

                    <div class="booking-steps__list-lable">
                      External
                    </div>
                    <div class="booking-steps__list-item booking-steps__list-item_external booking-steps__list-item_no-steam" value="25" oneandonly="booking-steps__list-item_external">
                      <span class="booking-steps__list-item-checkbox">
                        <span class="booking-steps__list-item-checkbox-i"></span>
                      </span>
                      <span class="booking-steps__list-item-name">
                        External Washing
                      </span>
                      <span class="booking-steps__list-item-price">
                        25 AED
                      </span>
                    </div>
                    <div class="booking-steps__list-item booking-steps__list-item_external  booking-steps__list-item_steam" value="35" oneandonly="booking-steps__list-item_external">
                      <span class="booking-steps__list-item-checkbox">
                        <span class="booking-steps__list-item-checkbox-i"></span>
                      </span>
                      <span class="booking-steps__list-item-name">
                        External Steam Washing
                      </span>
                      <span class="booking-steps__list-item-price">
                        35 AED
                      </span>
                    </div>
                    <div class="booking-steps__list-lable">
                      Total:
                    </div>
                    <div class="booking-steps__list-lable-total">
                      <span class="booking-steps__list-lable-total-data">0</span> AED
                    </div>
                  </div>


                </div>
              </div>


              <div class="booking-steps__item" id="booking-steps__item-6">
                <div class="booking-steps__navigation">
                  <div class="button" onclick="soBookingForm.changePage(5)">
                    <div class="button__body">
                      Back
                    </div>
                  </div>
                  <div class="button button_right" onclick="soBookingForm.changePage(7)">
                    <div class="button__body">
                      Continue
                    </div>
                  </div>
                </div>

                <div class="booking-steps__heading">Select Time</div>
                <div class="booking-steps__body">
                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker2'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                </div>

                </div>
              </div>

              <div class="booking-steps__item" id="booking-steps__item-7">
                <div class="booking-steps__navigation">
                    <div class="button" onclick="soBookingForm.changePage(6)">
                      <div class="button__body">
                        Back
                      </div>
                    </div>
                  </div>

                <div class="booking-steps__heading">Your Contact information</div>
                 <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone">
                  </div>
              </form>
              <div class="btn btn-success">Send Enquiry</div>

              </div>


          </div>

        </div>
          <div class="so-modal__item navigation-modal">
          @if (Auth::check())

            <a href="/home" class="navigation-modal__item navigation-modal__item_top">
              Home
            </a>
            @else
            <a href="/login" class="navigation-modal__item navigation-modal__item_top">
                Sign In
            </a>
            <a href="/register" class="navigation-modal__item navigation-modal__item_top">
                  Sign Up
            </a>
            @endif


            <div class="navigation-modal__item navigation-modal__item_top">
            Products
            </div>

            <div class="navigation-modal__sub">
              <a href="/category/interior" class="navigation-modal__item">
                <img src="{{asset('images/icons/categories/1.svg')}}" alt="Accessories" class="navigation-modal__item-i"> Interior
              </a>

              <a href="/category/exterior" class="navigation-modal__item">
                <img src="{{asset('images/icons/categories/2.svg')}}" alt="Accessories" class="navigation-modal__item-i"> Exterior
              </a>

              <a href="/category/accessories" class="navigation-modal__item">
                <img src="{{asset('images/icons/categories/3.svg')}}" alt="Accessories" class="navigation-modal__item-i">  Accessories
              </a>

              <a href="/category/combo-pack" class="navigation-modal__item">
                <img src="{{asset('images/icons/categories/4.svg')}}" alt="Accessories" class="navigation-modal__item-i"> Combo Pack
              </a>

            </div>

            <a href="/blog" class="navigation-modal__item navigation-modal__item_top">
            News
            </a>
            <a href="/page/about-us" class="navigation-modal__item navigation-modal__item_top">
              About
            </a>
            <a href="/page/contact"class="navigation-modal__item navigation-modal__item_top">
            Contacts
            </a>
          </div>
        </div>

    </div>
    
  </div>

 

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('js/app.js')}}" ></script>
<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick/slick/slick.min.js"></script>-->


<script>
    $(document).ready(function(){
      $('.review__inner').owlCarousel({
      loop:true,
      margin:20,
      nav:false,
      autoplay:true,
      autoplayTimeout:5000,
      smartSpeed:450,
      responsive:{
        0:{
            items:1
        },
        768: {
          items: 2
        }
        
    }
  });

  AOS.init();

    });

    


/*
** With Slick Slider Plugin : https://github.com/marvinhuebner/slick-animation
** And Slick Animation Plugin : https://github.com/marvinhuebner/slick-animation
*/

// Init slick slider + animation
$(".slider")
  .slick({
    autoplay: true,
    speed: 800,
    lazyLoad: "progressive",
    arrows: false,
    dots: true,
    pauseOnHover:false,
  })
  .slickAnimation();


  var a = 0;

$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});
    
  </script>


  <!-- BEGIN JIVOSITE CODE -->
  <script type='text/javascript'>
      (function(){ var widget_id = 'KvZksjqRYV';var d=document;var w=window;function l(){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
  </script>
  <!-- END JIVOSITE CODE -->
</body>
</html>
