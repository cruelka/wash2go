@extends('layouts.app')

@section('content')


<div class="container">

<div class="row">
  <div class="col-lg-3">
    <div class="sector">
        <div class="text">Categories</div>

        <ul class="vertical-navigation__list">
          <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
            Interior
          </li>

          <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
            Exterior
          </li>
          <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
            Accessories
          </li>
          <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
            Combo Pack
          </li>
        </ul>

        <div class="text">Filter</div>

        <ul class="vertical-navigation__list">
            <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
              Filter 1
            </li>
            <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
              Filter 2
            </li>
            <li class="vertical-navigation__item vertical-navigation__item_toplevel ">
              Filter 3
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
     {{ dd($data)}}
    @foreach($data->product as $product)
  <div class="col-lg-4 col-md-4">
      <div class="product-card product-card_square">
            <div class="product-card__img" style="background: url('/storage/product/'{{$product->image}});">
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
                {{$product->title}}
              </div>
              <div class="product-card__price">
                  {{$product->price}}
              </div>
              <div class="product-card__description">
                  {{$product->name}}
              </div>
            </div>
            
      </div>
  </div>
      @endforeach
  

</div>



    
  </div>
</div>



</div>

</div>

</div>

@endsection
