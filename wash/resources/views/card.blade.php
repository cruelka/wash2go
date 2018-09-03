@extends('layouts.app')

@section('content')

<div class="shopping-card">
    <p class="shopping-card__title">
        Shopping cart
    </p>
    <div class="row">
      <div class="col-lg-6">
        <div class="shopping-card__list">
          <div class="shopping-card__item">
            <div class="shopping-card__item-prev">
              <img src="resourse/images/example/i.jpg" alt="Product" class="shopping-card__item-prev-img">
            </div>
            <div class="shopping-card__item-title">
              Product name
            </div>
            <div class="shopping-card__item-price">
              65 AED
            </div>
            <div class="button">
                <span class="button__body">
                  -
                </span>
                <span class="button__body">
                  +
                </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
          <div class="button button_red">
              <span class="button__icon">
                <img class="button__icon-img" src="resourse/images/icons/plus_white.svg">
              </span>
              <span class="button__body">
                Checkout
              </span>
          </div>

          <div class="button">
              <span class="button__icon">
                <img class="button__icon-img" src="resourse/images/icons/bookmarks_black.svg">
              </span>
              <span class="button__body">
                Continue shopping 
              </span>
          </div>

      </div>
    </div>
    
  </div>
  @endsection
