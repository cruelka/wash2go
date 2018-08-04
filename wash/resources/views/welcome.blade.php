<!doctype html>
<html lang="en">
<head>
  <title>Bootstrap 4 Theme Kit</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Custom built theme - This already includes Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
</head>
<body>

  <div id="so-content">
  <div class="header so-header">
    <div class="header__block">
      <img src="{{ asset('images/logo_white.svg') }}" alt="Logo" class="header__logo so-header__logo">
    </div>
    <div class="header__block header__fullscreen-only" style="flex-grow: 2;">
        <div class="header__nav header__nav_wrapped" onclick="soModal.open('.navigation-modal')">
            Our products
          </div>
          <div class="header__nav">
              News
          </div>
    </div>
    
    
  
    <div class="header__block">
        <a href="/login" class="header__nav header__fullscreen-only">
            Sign In
        </a>

          <div class="header__mobile-only header__burger so-header__burger"  onclick="soModal.open('.navigation-modal')">
            <span></span><span></span><span></span>
          </div>
          <img class="header__button-icon so-header__bag" src="{{ asset('images/icons/bag.svg')}}">
    </div>

    
</div>


<div style="position: relative;">
  <div class="welcome-fullscreen-owl so-header__offset">
    <div class="welcome-fullscreen" style="background-image: url({{asset('images/bg/desc.jpg')}})">
      <div class="container welcome-fullscreen__inner">
      </div>
    </div>
    <div class="welcome-fullscreen" style="background-image: url({{asset('images/jpg/1.jpg')}}">
      <div class="container welcome-fullscreen__inner">
      </div>
    </div>
    <div class="welcome-fullscreen" style="background-image: url({{asset('images/jpg/2.jpg')}})">
      <div class="container welcome-fullscreen__inner">
      </div>
    </div>
  </div>

  <div class="welcome-fullscreen welcome-fullscreen__static">
      <div class="container welcome-fullscreen__inner">
          <div class="welcome-fullscreen__data">
              <div class="welcome-fullscreen__body">
                Brilliant results without a drop of water
              </div>
              <div class="welcome-fullscreen__heading">Waterless</div>
              <div class="welcome-fullscreen__heading-big">Car Care</div>
    
              <div class="booking-form">
                  
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
                    <select onchange="soBookingForm.priceChange(this)" id="booking-form__washing-type" class="form-control" class="booking-form__select">
                      <option value="0">Select Washing</option>
                      <option value="25">Extertal Wash / 25 AED</option>
                      <option value="25">Internal Wash / 25 AED</option>
                      <option value="50">Full Wash / 50 AED</option>
                      <option value="50">Steam Internal Wash / 50 AED</option>
                      <option value="35">Steam External Wash / 35 AED</option>
                      <option value="70">Steam Full Wash / 70 AED</option>
                      
                    </select>
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
    </div>
    


</div>


<div class="container">

  <div class="adventages sector">

  
    <div class="row mt-2">
      <div class="col-lg-3">
        <div class="adventages__item">
          <div class="adventages__item-icon">
            <img class="adventages__item-icon-img" alt="Icon" src="{{ asset('images/icons/adventages/1.svg') }}">
          </div>
          <div class="adventages__item-heading">
              ECO-FRIENDLY
          </div>
          <div class="adventages__item-body">
              Bio-based car care products with minimal impact on the environment
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="adventages__item">
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
        <div class="col-lg-3">
          <div class="adventages__item">
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
          <div class="col-lg-3">
            <div class="adventages__item">
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
    <div class="col-lg-6 col-md-6">
      <img  class="card-preview__info-image" src="{{asset('images/jpg/1.jpg')}}" alt="Car">
    </div>
    <div class="col-lg-6 col-md-6">
      <div class="card-preview__info">
        <div class="card-preview__info-inner">
            <div class="card-preview__info-heading">
                Why It's Good for Your Car
              </div>
              <div class="card-preview__info-body">
                Our service cleans, shines, & protects the vehicle's paint, windows & wheels, and also gives the tires a nice shine.
              </div>
              <div class="card-preview__info-lable">
                About washing
              </div>
              <div class="card-preview__info-link">
                More Information <img class="card-preview__info-link-i" src="{{asset('images/icons/arrow-right_green.svg')}}" alt="Arrow">
              </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-9 col-md-9">
      <div class="heading">About us</div>
      <div class="text">
          Wash2Go products are made from 100% plant-derived,
          biodegradable ingredients.
         
      </div>
      <div class="text">
          Not only do our products help save water, they also reduce the toxic runoff from conventional car washes that find its way into our rivers and oceans.
      </div>
      <div class="row mt-5">
          <div class="col-lg-4 col-md-4 text-special">
            <div class="text-special__inner">
              <div class="text-special__heading">100%</div>
              <div class="text-special__body">Satisfaction guarantee</div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 text-special">
              <div class="text-special__inner">
                <div class="text-special__heading">5k+</div>
                <div class="text-special__body">Cleaned cars</div>
              </div>
          </div>
          <div class="col-lg-4 col-md-4 text-special">
                <div class="text-special__inner">
                  <div class="text-special__heading">30+</div>
                  <div class="text-special__body">high quality products</div>
                </div>
          </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 text-special text-special_wrapped">
      <div class="text-special__inner">
          <div class="text-special__heading">2M</div>
          <div class="text-special__body">Saved litersof water</div>
      </div>
        
    </div>
  </div>

  <div class="row mt-5">
      
      <div class="col-lg-6 col-md-6">
        <div class="card-preview__info">
          <div class="card-preview__info-inner">
              <div class="card-preview__info-heading">
                  Eco washing
                </div>
                <div class="card-preview__info-body">
                    No scratching of the vehicle's exterior. <br>
                    High gloss finish.  <br>
                    Eco-friendly process.  <br>
                    One cup of water per vehicle.  <br>
                    Secure.
                </div>
                <div class="card-preview__info-lable">
                  Benefits
                </div>
                <div class="card-preview__info-link">
                  More Information <img class="card-preview__info-link-i" src="{{asset('images/icons/arrow-right_green.svg')}}" alt="Arrow">
                </div>
          </div>
          
        </div>
      </div>

      <div class="col-lg-6 col-md-6">
          <img  class="card-preview__info-image" src="{{asset('images/jpg/2.jpg')}}" alt="Car">
        </div>
    </div>

  <div class="adventages adventages_center sector">

    

    <div class="heading">
        Our products
    </div>

    <div class="row mt-5">
      
      <div class="col-lg-3 col-md-3">
        <div class="adventages__item">
          <div class="adventages__item-icon">
            <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/categories/1.svg')}}">
          </div>
          <div class="adventages__item-heading">
            Interior
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
          <div class="adventages__item">
            <div class="adventages__item-icon">
              <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/categories/2.svg')}}">
            </div>
            <div class="adventages__item-heading">
              Exterior
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-3">
          <div class="adventages__item">
            <div class="adventages__item-icon">
              <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/categories/3.svg')}}">
            </div>
            <div class="adventages__item-heading">
              Accessories
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-3">
          <div class="adventages__item">
            <div class="adventages__item-icon">
              <img class="adventages__item-icon-img" alt="Icon" src="{{asset('images/icons/categories/4.svg')}}">
            </div>
            <div class="adventages__item-heading">
              Combo Pack
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="adventages sector">
    <div class="heading">
      Most selling
    </div>
  


  <div class="row mt-5">
      <div class="col-lg-3 col-md-3">
          <div class="product-card product-card_square">
                <div class="product-card__img" style="">
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
                    <div class="product-card__new">
                        New
                    </div>
                  </div>
                </div>
                <div class="product-card__body">
                  <div class="product-card__title">
                    WINDOW CLEAR
                  </div>
                  <div class="product-card__price">
                    18 AED
                  </div>
                </div>
                
          </div>
      </div>


  </div>
  </div>


  <div class="sector">
      <div class="heading">
        Latest News
      </div>

      <div class="row mt-5">
          <div class="col-lg-6 col-md-6">
            <div class="news-card">
              <div class="news-card__lable">
                Tips on car care
              </div>
              <div class="news-card__title">
                How often should I wax my car?
              </div>
              <div class="news-card__additional">
                On June 12, 2018 / By Turtle Save
              </div>
              <div class="news-card__img" style="background: url({{asset('images/example/5.jpg')}})">

              </div>
              <div class="news-card__description">
                One of the most frequent questions we get asked is: how often should I wax my car? And our answer is – it depends. You see, there are sever..
              </div>
              <div class="news-card__b">
                Continue reading
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
              <div class="news-card">
                <div class="news-card__lable">
                  Tips on car care
                </div>
                <div class="news-card__title">
                  How often should I wax my car?
                </div>
                <div class="news-card__additional">
                  On June 12, 2018 / By Turtle Save
                </div>
                <div class="news-card__img" style="background: url({{asset('images/example/5.jpg')}})">
  
                </div>
                <div class="news-card__description">
                  One of the most frequent questions we get asked is: how often should I wax my car? And our answer is – it depends. You see, there are sever..
                </div>
                <div class="news-card__b">
                  Continue reading
                </div>
              </div>
            </div>
      </div>

      <div class="sector">
        <div class="button">
            <a href="/blog" class="button__body">
                More News
            </a>
        </div>
      </div>

      <div class="sector">
        <div class="">
          <div class="row mt-5">
            <div class="col-lg-3 col-md-3">
              <img src="{{ asset('images/icons/quotes.svg') }}" class="review__quotes" alt="Quotes">
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="review">
                  <div class="review__heading">What Customers Say</div>
                  <div class="review__inner">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                          <div class="review__item">
                              <img src="{{ asset('images/icons/quotes_green.svg') }}" class="review__item-quotes" alt="Quotes">
                              <div class="review__item-body">
                                  "I wanted something where I could meet new people and get out of the house. Uber has helped with both of those things, plus I’m seeing new parts of the city I’ve never seen before!"
                              </div>
                              <div class="review__autor">Sean Walker</div>
                            </div>
                      </div>

                      <div class="col-lg-6 col-md-6">
                          <div class="review__item">
                              <img src="{{ asset('images/icons/quotes_green.svg') }}" class="review__item-quotes" alt="Quotes">
                              <div class="review__item-body">
                                  "I started driving with Uber because I liked the idea that my own car could make me money. After just about a couple weeks, I saw that this was something I wanted to do permanently."
                              </div>
                              <div class="review__autor">Sean Walker</div>
                            </div>
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
      <div class="col-lg-12" style="display: block;margin: 0 auto;">
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
                  
                  <li class="footer__item" >Terms and Conditions</li>
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
                  
                  <li class="footer__item" >There is will be address</li>
                  <li class="footer__item" >There is also</li>
                  <li class="footer__item" >+00 00 000 0000</li>
                  <li class="footer__item" >© Copyright Wash 2 Go</li>
                </ul>
           
        </div>
      </div>
  
      
    </div>
  </div>

  <div id="so-modal__shadow" onclick="soModal.close()"></div>
</div>



<div id="so-modal">
    <div class="container">
      <div class="so-modal__inner">
        <div class="so-modal__close__wrapper">
          <img onclick="soModal.close()" class="so-modal__close" src="{{asset('images/icons/cross_black.svg')}}" alt="cross">
        </div>
        <div class="so-modal__item so-modal__booking-form form">
          <div class="so-modal__inner">
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
          <div class="so-modal__item navigation-modal">
            <div class="navigation-modal__item navigation-modal__item_top navigation-modal__mobile-only">
              Log In
            </div>
            <div class="navigation-modal__item navigation-modal__item_top navigation-modal__mobile-only">
              Sign Up
            </div>
            <div class="navigation-modal__item navigation-modal__item_top">
              Home
            </div>
            <div class="navigation-modal__item navigation-modal__item_top">
              Products
            </div>
  
            <div class="navigation-modal__sub">
                <div class="navigation-modal__item">
                  Interior
                </div>

                <div class="navigation-modal__item">
                  Exterior
                </div>

                <div class="navigation-modal__item">
                  Accessories
                </div>

                <div class="navigation-modal__item">
                  Combo Pack
                </div>
                
              </div>
            
            <div class="navigation-modal__item navigation-modal__item_top">
              News
            </div>
            <div class="navigation-modal__item navigation-modal__item_top">
              About
            </div>
            <div class="navigation-modal__item navigation-modal__item_top">
              Contacts
            </div>
          </div>
        </div>

    </div>
    
  </div>

 

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{asset('js/app.js')}}" ></script>



<script>
    $(document).ready(function(){
      $(".welcome-fullscreen-owl").owlCarousel({
      loop:true,
      margin:0,
      nav:false,
      autoplay:true,
    autoplayTimeout:2000,
      animateOut: 'fadeOut',
      smartSpeed:450,
    responsive:{
        0:{
            items:1
        },
        768: {
          items: 3
        }
        
    }
  });
    });
    
  </script>
</body>
</html>
