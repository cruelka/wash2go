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
              <a href="/logout">Log Out</a>
            </li>
          </ul>
    </div>
    
  </div>

  <div class="col-lg-9">
    
<div class="category-heading">
    <div class="row">
      <div class="col-lg-4">
          <p class="category-heading__title">
                My Bookings
            </p>
      </div>
    </div>
    
  </div>


  <div>
      @foreach($bookings as $booking)
                <div class="tabled__item">
                    <div class="lable">Service</div>
                    <div class="text black">{{$booking->service}}</div>
                    <div class="row tabled__row">
                        <div class="col-sm-3 col-xs-12">
                            <div class="lable">Where</div>
                            <div class="lable lable_black">{{$booking->location}}</div>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <div class="lable">Date</div>
                            <div class="lable lable_black">{{$booking->date}}</div>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <div class="lable">Time</div>
                            <div class="lable lable_black">{{$booking->time}}</div>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <div class="lable">Status</div>
                            <div class="lable lable_black">{{$booking->status}}</div>
                        </div>
                    </div>
                    <div class="lable">Total</div>
                    <div class="text black">{{$booking->price}}</div>
                </div>
      @endforeach
          {{ $bookings->links() }}

  </div>

  </div>



</div>

</div>

</div>

@endsection
