@extends('layouts.app')

@section('content')

<div class="container">

<div class="product">
  <div class="row mt-5">
    <div class="col-lg-6">
      <div class="product__image">
        <img src="/storage/{{$data->first()->image}}" alt="Product" class="product__image-img">
      </div>
    </div>
    <div class="col-lg-6">
        <div class="product__description">
          <div class="product__title">
            {{$data->first()->name}}
          </div>
          <div class="product__price">
              {{$data->first()->price}}
          </div>

          <div class="product__actions">

          
            <div class="button button_red">
                <span class="button__icon">
                  <img class="button__icon-img" src="{{asset('images/icons/plus_white.svg')}}">
                </span>
                <span class="button__body">
                  Add to cart
                </span>
            </div>

            <div class="button">
                <span class="button__icon">
                  <img class="button__icon-img" src="{{asset('images/icons/bookmarks_black.svg')}}">
                </span>
                <span class="button__body">
                  Add to bookmarks
                </span>
            </div>

          </div>

          <p class="product__body">
              {{$data->first()->description}}
          </p>

          <ul class="product__list">
            <li class="product__list-item product__list-item_arrow">Brand:     {{$data->first()->brand}}</li>
            <li class="product__list-item product__list-item_arrow">Country:     {{$data->first()->origin}}</li>
          </ul>
           <!--
          <ul class="product__list">
              <li class="product__list-item product__list-item_star">Super 1</li>
              <li class="product__list-item product__list-item_star">Super 2</li>
              <li class="product__list-item product__list-item_star">Super 3</li>
          </ul>
         -->
        </div>
    </div>

        
  </div>
</div>

<div class="row mt-5">
  <div class="col-lg-4">
    <p class="product__suggestion">
      Add some Va Va Voom to your order with these exclusive add on’s
    </p>
      
  </div>
</div>


<div class="row mt-5">
  <div class="col-lg-3 col-md-3">
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

@endsection
