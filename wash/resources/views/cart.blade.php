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

     
          <div class="shopping-card__item shopping-card__item-{{$item->id}}" data="{{$item->getHash()}}">
            <div class="shopping-card__item-prev" style="background-image: url(/storage/{{$item->subItems[key($item->subItems)]->options['description']}})">
            </div>
            <div class="shopping-card__item-inner">
              <div class="shopping-card__item-title">
                  {{$item->name}}
              </div>
              <div class="shopping-card__item-price">
                  <span class="shopping-card__item-price-data">{{$item->price}}</span>  AED
              </div>
              <div class="button">
                  <span class="button__body shopping-card__qty-minus" onclick="cart.update('{{$item->getHash()}}','{{$item->id}}','minus')">
                    -
                  </span>
                  <span class="button__body shopping-card__qty shopping-card__qty-{{$item->id}}"> {{$item->qty}} </span>
                  <span class="button__body shopping-card__qty-plus" onclick="cart.update('{{$item->getHash()}}','{{$item->id}}','plus')">
                    +
                  </span>
                  <span class="button__body" onclick="cart.remove('{{$item->getHash()}}','{{$item->id}}')">
                    Remove
                  </span>
              </div>
              <div class="shopping-card__item-price-total">
                  Total: <span class="shopping-card__item-price-total-data">{{$item->price}}</span> AED
              </div>
            </div>
          </div>
   
        @endforeach
             @else
            <div>Your cart is empty</div>
             @endif

        <div class="shopping-card__total-wrapper">
          <div class="shopping-card__subtotal">
            Subtotal: <span class="shopping-card__subtotal-data">{{LaraCart::subTotal()}}</span> AED
          </div>
          <div class="shopping-card__tax">
            Tax: <span class="shopping-card__tax-data">{{LaraCart::taxTotal()}}</span> AED
          </div>
          <div class="shopping-card__total-big">
            Total: <span class="shopping-card__total-big-data">{{LaraCart::total()}}</span> AED
          </div>
        </div>

        </div>

        </div>
      <div class="col-xs-12 col-md-6">

        <div class="panel panel-default">
                <div class="panel-heading">Contact details</div>

                <div class="panel-body">
                    <form class="form-horizontal">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" required autofocus>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required autofocus>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" class="swapShippingCheckbox" name="remember"> Shipping 10 AED
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="swapShipping">
                            <p>Click on the map to move marker</p>
                            <div class="btn btn-success" onclick="window.getLocation()">Get current location</div>
                            <br><br>
                            <div id="map"></div>

                            <br>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-primary">
                                    Check Out
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>







          <!--
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
          -->

      </div>
    </div>

    


    
  </div>
  </div>

      <script>
       // In the following example, markers appear when the user clicks on the map.
      // The markers are stored in an array.
      // The user can then click an option to hide, show or delete the markers.
      var map;
      var markers = [];

      function initMap() {

        infoWindow = new google.maps.InfoWindow;

        function getLocation(){
          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };

              infoWindow.setPosition(pos);
              infoWindow.setContent('Location found.');
              infoWindow.open(map);
              map.setCenter(pos);
              addMarker(pos);
            }, function() {
              handleLocationError(true, infoWindow, map.getCenter());
            });

            
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }

        }

        window.getLocation = getLocation;



function handleLocationError(browserHasGeolocation, infoWindow, pos) {
infoWindow.setPosition(pos);
infoWindow.setContent(browserHasGeolocation ?
                      'Error: The Geolocation service failed.' :
                      'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
  
}



        var haightAshbury = {lat:25.257562,lng: 55.326623};

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: haightAshbury,
          mapTypeId: 'terrain'
        });

        // This event listener will call addMarker() when the map is clicked.
        map.addListener('click', function(event) {
          addMarker(event.latLng);
        });

        // Adds a marker at the center of the map.
        addMarker(haightAshbury);


        var myLatlng = new google.maps.LatLng(25.257562, 55.326623);


        var mapOptions = {
          zoom: 13,
          center: myLatlng
        }
        var map2 = new google.maps.Map(document.getElementById("map2"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title:"Business village, 6th Floor, Office #601"
        });

        marker.setMap(map2);

      }

      // Adds a marker to the map and push to the array.
      function addMarker(location) {
        clearMarkers();
        deleteMarkers();

        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
        markers.push(marker);
      }

      // Sets the map on all markers in the array.
      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }

      // Removes the markers from the map, but keeps them in the array.
      function clearMarkers() {
        setMapOnAll(null);
      }

      // Shows any markers currently in the array.
      function showMarkers() {
        setMapOnAll(map);
      }

      // Deletes all markers in the array by removing references to them.
      function deleteMarkers() {
        clearMarkers();
        markers = [];
      }

      

      /////////

      /*
        
      
      */
      
    </script>

  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

      .pac-container {
        z-index: 9999;
      }
      #map {
        height: 400px;
     
      }

      #pac-input {
        top: 10px !important;
        display: block;
    width: 100%;
    height: 36px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.6;
    color: #555555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccd0d2;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
      }

      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        /*
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        */
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        /*font-family: Roboto;*/
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
       /*font-family: Roboto;*/
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        /*font-family: Roboto;*/
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
    </style>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnQdVeXsvN-31LxFeKaKf255C5vGB73VQ&libraries=places&callback=initMap&language=en"
         async defer></script>
  @endsection
