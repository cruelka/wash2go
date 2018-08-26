@extends('layouts.app')

@section('content')


<div class="container">

<div class="row">
  <div class="col-lg-3">
    <div class="sector">
        <div class="text">Orders History</div>

        <ul class="vertical-navigation__list">
          <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
            My Bookings
          </li>
          <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
            My Orders
          </li>
        </ul>

        <div class="text">Personal</div>

        <ul class="vertical-navigation__list">
            <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
              Settings
            </li>
            <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
              Log Out
            </li>
          </ul>
    </div>
    
  </div>

  <div class="col-lg-9">
    
<div class="category-heading">
    <div class="row">
      <div class="col-lg-4">
          <p class="category-heading__title">
                Our Products
            </p>
            <p class="category-heading__body">
            The entire line of Wash2Go® products rely on eco-friendly cleaning, polishing and protecting agents that equal or surpass their chemical-based competitors. Being values-driven people, we are committed to bringing car owners and car wash service providers a superior line of car care products that do not harm the planet or the user.
            </p>
      </div>
    </div>
    
  </div>
  
  <div class="sector">
  <div class="row">
    
  <div class="col-lg-4 col-md-4">
      <div class="product-card product-card_square">
            <div class="product-card__img" style="background: url({{asset('images/example/1.jpg')}});">
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
                66 AED
              </div>
              <div class="product-card__description">
                300g - Hokkaido, Japan
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

@endsection
