@extends('layouts.app')

@section('content')

<div class="booking-steps__wrapper">
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
                      <div value="At Home" onclick="soBookingForm.changePage(2)" class="booking-steps__card-item booking-steps__card-item_where">
                        <img src="{{asset('images/icons/home.svg')}}" alt="Home" class="booking-steps__card-item-img">
                        At home
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                      <div value="Visit Us" onclick="soBookingForm.changePage(3)" class="booking-steps__card-item booking-steps__card-item_where">
                        <img src="{{asset('images/icons/location.svg')}}" alt="Home"  class="booking-steps__card-item-img">
                        Visit us
                      </div>
                    </div>
                  </div>

                  <div class="booking-steps__restore">
                    
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
                  <div class="button button_right" onclick="soBookingForm.changePage(4,'map')">
                    <div class="button__body">
                      Continue
                    </div>
                  </div>
                </div>

                <div class="booking-steps__heading">Select your location</div>
                <div class="booking-steps__body">
                  <div class="booking-steps__validation booking-steps__validation_map"></div>
                  <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                  <div id="map"></div>
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

                <div class="booking-steps__validation booking-steps__validation_bodytype"></div>

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
                  <div class="button button_right" onclick="soBookingForm.changePage(6,'services')">
                    <div class="button__body">
                      Continue
                    </div>
                  </div>
                </div>

                <div class="booking-steps__heading">Select washing type</div>
                <div class="booking-steps__validation booking-steps__validation_services"></div>
                <div class="booking-steps__body">
                  <div class="booking-steps__list">
                    <div class="booking-steps__list-lable">
                      Internal
                    </div>
                    <div class="booking-steps__list-item booking-steps__list-item_service booking-steps__list-item_internal booking-steps__list-item_no-steam" value="25" oneandonly="booking-steps__list-item_internal">
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
                    <div class="booking-steps__list-item booking-steps__list-item_service booking-steps__list-item_internal booking-steps__list-item_steam" value="50" oneandonly="booking-steps__list-item_internal">
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
                    <div class="booking-steps__list-item booking-steps__list-item_service booking-steps__list-item_external booking-steps__list-item_no-steam" value="25" oneandonly="booking-steps__list-item_external">
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
                    <div class="booking-steps__list-item booking-steps__list-item_service booking-steps__list-item_external  booking-steps__list-item_steam" value="35" oneandonly="booking-steps__list-item_external">
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
                  <div class="button button_right" onclick="soBookingForm.changePage(7);soBookingForm.drawConfirm()">
                    <div class="button__body">
                      Continue
                    </div>
                  </div>
                </div>

                <div class="booking-steps__heading">Select Time</div>
                <div class="booking-steps__body">
                  <div class="booking-steps__list-lable">
                      Select date
                  </div>
                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker2'>
                      <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <br>
                    <div class="booking-steps__list-lable">
                      Select time
                    </div>

                    <div class='input-group date' id='datetimepicker3'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
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

                <div class="booking-steps__heading">Confirm</div>

                <div id="booking-steps__confirm-data">

                </div>

                
                <div>Contact information</div>

                @if(Auth::check())

                
                @else
                


                <br>
                <a href="/login" class="btn btn-success">Login</a>
                <br>
                <br>

                

                <div class="booking-steps__list-lable">
                  Or you can book like a guest
                </div>

                 
              

              @endif

              <form id="booking-form" data="{{ csrf_token() }}" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="email" class="form-control" id="bookingname" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="bookingmail" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="phone" class="form-control" id="bookingphone" placeholder="Enter Phone">
                  </div>

                  <div id="booking-form__errors"></div>
                  <div class="btn btn-success" onclick="soBookingForm.post()">Confirm</div>
                </form>

              </div>


          </div>
          
        </div>

        

      


     
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 25.257562, lng: 55.326623},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);


          
        });


        var myLatlng = new google.maps.LatLng(25.257562, 55.326623);
        var mapOptions = {
          zoom: 13,
          center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById("map2"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title:"Business village, 6th Floor, Office #601"
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);
      }

      
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

    

     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnQdVeXsvN-31LxFeKaKf255C5vGB73VQ&libraries=places&callback=initAutocomplete&language=en"
         async defer></script>
@endsection
