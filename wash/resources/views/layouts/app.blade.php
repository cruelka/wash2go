<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>Wash2Go</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
</head>
<body>
    
  <div id="so-content">
  <div class="header so-header so-header_scrolled">
    <a href="/" class="header__block">
      <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="header__logo so-header__logo">
    </a>
    <div class="header__block header__fullscreen-only" style="flex-grow: 2;">
        <div class="header__nav" onclick="soModal.open('.navigation-modal')">
            Our products
          </div>
          <a href="/blog" class="header__nav">
              News
          </a>
          <a href="/page/about-us" class="header__nav">
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

        <a href="/booking"  class="header__nav header__fullscreen-only  header__nav_wrapped">
            Book now
        </a>

          <div class="header__mobile-only header__burger so-header__burger so-header__burger_scrolled"  onclick="soModal.open('.navigation-modal')">
            <span></span><span></span><span></span>
          </div>
          <img class="header__button-icon so-header__bag" src="{{ asset('images/icons/bag.svg')}}">
    </div>

    
</div>


<div style="position: relative; " class="content__inner">

        @yield('content')

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
                    
                    <li class="footer__item" >Interior</li>
                    <li class="footer__item" >Exterior</li>
                    <li class="footer__item" >Accessories</li>
                    <li class="footer__item" >Combo Pack</li>
                  </ul>
                </div>
          
       
              </div>
  
        </div>
  
        <div class="col-lg-4">
          
        
                <ul class="footer__list">
                  <li class="footer__item footer__item_heading" >Links</li>
                </ul>
   
                <ul class="footer__list">
                  
                  <li class="footer__item" ><a href="/page/terms-and-conditions">Terms and Conditions</a></li>
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
           <div class="so-modal__booking-form__lable">Booking Form</div>
          </div>
          
          <div class="booking-steps">
              <div class="booking-steps__status"></div>
              
              <div class="booking-steps__item booking-steps__item_active" id="booking-steps__item-1">
                <div class="booking-steps__heading">Choose Location</div>
                <div class="booking-steps__body">
                  <div class="row">
                    
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                      <div  onclick="soBookingForm.changePage(3)" class="booking-steps__card-item">
                        <img src="{{asset('images/icons/home.svg')}}" alt="Home" class="booking-steps__card-item-img">
                        At home
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                      <div onclick="soBookingForm.changePage(2)" class="booking-steps__card-item">
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

                <div class="booking-steps__heading">We are here</div>
                <div class="booking-steps__body">
                  
                  <div id="map" style="height: 400px"></div>
                 
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
                  <div class="button button_right" onclick="soBookingForm.changePage(6)">
                    <div class="button__body">
                      Continue
                    </div>
                  </div>
                </div>

                <div class="booking-steps__heading">Select washing type</div>
                <div class="booking-steps__body">
                  <div class="booking-steps__list">
                    <div class="booking-steps__list-lable">
                      Internal
                    </div>
                    <div class="booking-steps__list-item booking-steps__list-item_internal" value="25" oneandonly="booking-steps__list-item_internal">
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
                    <div class="booking-steps__list-item booking-steps__list-item_external" value="25" oneandonly="booking-steps__list-item_external">
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
                <div class="navigation-modal__item">
                <img src="{{asset('images/icons/categories/1.svg')}}" alt="Accessories" class="navigation-modal__item-i"> Interior
                </div>

                <div class="navigation-modal__item">
                <img src="{{asset('images/icons/categories/2.svg')}}" alt="Accessories" class="navigation-modal__item-i"> Exterior
                </div>

                <div class="navigation-modal__item">
                  <img src="{{asset('images/icons/categories/3.svg')}}" alt="Accessories" class="navigation-modal__item-i">  Accessories
                </div>

                <div class="navigation-modal__item">
                <img src="{{asset('images/icons/categories/4.svg')}}" alt="Accessories" class="navigation-modal__item-i"> Combo Pack
                </div>
                
              </div>
            
            <div href="/blog" class="navigation-modal__item navigation-modal__item_top">
              News
            </div>
            <a href="/page/about-us" class="navigation-modal__item navigation-modal__item_top">
              About
            </a>
            <div class="navigation-modal__item navigation-modal__item_top">
              Contacts
            </div>
          </div>
        </div>

    </div>
    
  </div>

 

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('js/app.js')}}" ></script>





</body>
</html>
