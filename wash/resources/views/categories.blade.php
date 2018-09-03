@extends('layouts.app')

@section('content')


<div class="container">

<div class="row">
  <div class="col-xs-12 col-md-3">
    <div class="sector">
        <div class="text">Categories</div>

        <ul class="vertical-navigation__list">
          <li  class="vertical-navigation__item vertical-navigation__item_toplevel @if($data->first()->slug == 'interior') vertical-navigation__item_active @endif">
            <a href="/category/interior" class="vertical-navigation__item_link">
                Interior
            </a>
          </li>

          <li class="vertical-navigation__item vertical-navigation__item_toplevel @if($data->first()->slug == 'exterior') vertical-navigation__item_active @endif ">
              <a href="/category/exterior" class="vertical-navigation__item_link">
                  Exterior
              </a>

          </li>
          <li  class="vertical-navigation__item vertical-navigation__item_toplevel @if($data->first()->slug == 'accessories') vertical-navigation__item_active @endif ">

              <a href="/category/accessories" class="vertical-navigation__item_link">
                  Accessories
              </a>

          </li>
          <li  class="vertical-navigation__item vertical-navigation__item_toplevel @if($data->first()->slug == 'combo-pack') vertical-navigation__item_active @endif ">
              <a href="/category/combo-pack" class="vertical-navigation__item_link">
                  Combo Pack
              </a>

          </li>
        </ul>
        <!--

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
          -->
    </div>

  </div>

  <div class="col-xs-12 col-md-9">
    
<div class="category-heading">
    <div class="row">
      <div class="col-xs-12 col-md-6">
          <p class="category-heading__title">
              {{$data->first()->title}}
            </p>
            <p class="category-heading__body">
                {{$data->first()->description}}
            </p>
      </div>
    </div>
    
  </div>
  
  <div class="sector">
  <div class="row">
      @if($data->first()->product->first())
    @foreach($data->first()->product as $product)
  <div class="col-xs-12 col-sm-6 col-md-4">
      <div class="product-card product-card_square">
            <a href="/product/{{$product->id}}" class="product-card__img" style="background: url('/storage/{{$product->image}}');">
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
            </a>
            <div class="product-card__body">
              <a href="/product/{{$product->id}}" class="product-card__title">
                {{$product->title}}
              </a>
              <div class="product-card__price">
                  {{$product->price}}
              </div>
              <a href="/product/{{$product->id}}"class="product-card__description">
                  {{$product->name}}
              </a>
            </div>
            
      </div>
  </div>
      @endforeach
          @else
            <div>Sorry, there are no products right now</div>
          @endif
  

</div>



    
  </div>
</div>



</div>

</div>

</div>

@endsection
