@extends('layouts.app')

@section('content')
<div class="container">


<div class="shopping-card">
    <p class="shopping-card__title">
        Shopping cart
    </p>
    <div class="row">
        <div class="col-xs-12 col-md-6">
        <div class="shopping-card__list">
         @if($items)
        @foreach($items as $item)

     
          <div class="shopping-card__item" data="{{$item->getHash()}}">
            <div class="shopping-card__item-prev">
              <img src="/storage/{{$item->subItems[key($item->subItems)]->options['description']}}" alt="Product" class="shopping-card__item-prev-img">
            </div>
            <div class="shopping-card__item-inner">
              <div class="shopping-card__item-title">
                  {{$item->name}}
              </div>
              <div class="shopping-card__item-price">
                  {{$item->price}} AED
              </div>
              <div class="button">
                  <span class="button__body shopping-card__qty-minus">
                    -
                  </span>
                  <span class="button__body shopping-card__qty shopping-card__qty-{{$item->id}}"> {{$item->qty}} </span>
                  <span class="button__body shopping-card__qty-plus" onclick="cart.update('{{$item->getHash()}}')">
                    +
                  </span>
                  <span class="button__body">
                    Remove
                  </span>
              </div>
              <div class="shopping-card__item-price-total">
                  Total: {{$item->price}} AED
              </div>
            </div>
          </div>
   
        @endforeach
             @else
            <div>Your cart is empty</div>
             @endif

        <div class="shopping-card__total-wrapper">
          <div>
            Subtotal: {{LaraCart::subTotal()}} AED
          </div>
          <div>
            Tax: {{LaraCart::taxTotal()}} AED
          </div>
          <div class="shopping-card__total-big">
            Total: {{LaraCart::total()}} AED
          </div>
        </div>

        </div>

        </div>
      <div class="col-xs-12 col-md-6">
          <div class="button button_red">
              <span class="button__icon">
                <img class="button__icon-img" src="{{asset('images/icons/plus_white.svg')}}">
              </span>
              <span class="button__body">
                Checkout
              </span>
          </div>

          <div class="button">
              <span class="button__icon">
                <img class="button__icon-img" src="{{asset('images/icons/bookmarks_black.svg')}}">
              </span>
              <span class="button__body">
                Continue shopping 
              </span>
          </div>

      </div>
    </div>

    


    
  </div>
  </div>
  @endsection
