@extends('layouts.app')

<style>
  /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
  #map {
    height: 100%;
  }
  /* Optional: Makes the sample page fill the window. */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>

<!-- Page Content -->
<div class="container">

    <div class="row">

    <div class="col-lg-5">
      <!-- <h2 class="my-4">Map</h2> -->
      <div class="map mt-5">
        <!-- <img style="width:100%" src="https://cdn5.vectorstock.com/i/1000x1000/48/69/ontario-province-map-vector-2934869.jpg" alt=""> -->
        <!-- Google Map -->
        <div id="map"></div>
        
        <!-- map script -->
        <script>
      var map;
      var infoWindow;

      function initMap() {
        // Waterloo Region
        var myLatlng = {lat: 43.464, lng: -80.520};

        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatlng,
          zoom: 10
        });

        setMarkers(map);

        infoWindow = new google.maps.InfoWindow;

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
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      // Data for the markers consisting of a name, a LatLng and a zIndex for the
      // order in which these markers should display on top of each other.
      var festivals = [
        ['Kitchener Waterloo OktoberFest', 43.464, -80.520, 2],
        ['Elmira Maple Syrup Festival', 43.604, -80.542, 1]
      ];

      var markers = [];
      var infowindows = [];

      function setMarkers(map) {

        for (var i = 0; i < festivals.length; i++) {
          // alert(festivals[i][3]);
          var festival = festivals[i];

          eval("var marker" + i + " = new google.maps.Marker({ position: {lat: festival[1], lng: festival[2]}, map: map, title: festival[0], zIndex: festival[3]  });");
          
          var contentString = festival[0] + "<br>Lat: " + festival[1] + "<br>" + festival[2]
            + "<br><a href='#' class='btn btn-info'>Detail...</a>";

          eval("var infowindow" + i + " = new google.maps.InfoWindow({ content: contentString });");

          // infowindows.push(infowindow);
          eval("marker" + i + ".addListener('click', function() { infowindow" + i + ".open(map, marker" + i + "); });");
        }
      }

      // Handle Location Error
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        /*
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
        */
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvbWIoBpy3ukwbEVlyVuyQEJAffOpYFaU&callback=initMap">
    </script>

        <!-- Google Map End -->

      </div>
    </div>
      <!-- /.col-lg-5 -->

        <div class="col-lg-7">
                

                
        <!-- search box start -->
        <div class="region region-help alert alert-info messages info mt-5 search">
          <span class="icon glyphicon glyphicon-question-sign" aria-hidden="true"></span>
          <section id="block-views-exp-hosts-listing-page"
                   class="block block-views clearfix collapsiblock-processed">
            <div class="content">
            <label for="edit-keyword">Find Event/ Festival/ Volunteer</label>

              <form class="form-inline" action="" method="get" accept-charset="UTF-8">
                <div>
                  <input class="form-control  form-control-borderless" type="text" placeholder="enter keyword" >
                  <button class="btn btn-primary ml-1" type="submit">Search</button>
                </div>
              </form>
            </div>
          </section>
          </div>
          <!-- search -->



        <!-- search box start -->
        <!-- <div class="region region-help alert alert-info messages info">
                <span class="icon glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                <section
                    id="block-views-exp-hosts-listing-page"
                    class="block block-views clearfix collapsiblock-processed">

                    <div class="content">
                        <form
                            action=""
                            method="get"
                            id="views-exposed-form-hosts-listing-page"
                            accept-charset="UTF-8">
                            <div>
                                <div class="views-exposed-form">
                                    <div class="views-exposed-widgets clearfix">
                                        <div
                                            id="edit-keyword-wrapper"
                                            class="views-exposed-widget views-widget-filter-search_api_views_fulltext">
                                            <label for="edit-keyword">Find Event/ Festival/ Volunteer</label>
                                            <div class="views-widget">
                                                <div class="form-item form-item-keyword form-type-textfield form-group">
                                                    <input
                                                        placeholder="Use filters or type a keyword to search, e.g. &quot;Waterloo, ON&quot;, description, etc."
                                                        class="form-control form-text"
                                                        type="text"
                                                        id="edit-keyword"
                                                        name="keyword"
                                                        value=""
                                                        size="10"
                                                        maxlength="128"></div>
                                                </div>
                                            </div>
                                            <div class="views-exposed-widget views-submit-button">
                                                <button
                                                    type="submit"
                                                    id="edit-submit-hosts-listing"
                                                    name=""
                                                    value="Search"
                                                    class="btn btn-primary form-submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div> -->
                <!-- search -->

            <!-- <div  
                id="carouselExampleIndicators"
                class="carousel slide my-4"
                data-ride="carousel">

                <a
                    class="carousel-control-prev"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a
                    class="carousel-control-next"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> -->

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="/detail">Event One</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Event Two</a>
                                    </h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#">
                                    <img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#">Event Three</a>
                                        </h4>
                                        <h5>$24.99</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Amet numquam aspernatur!</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#">
                                        <img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Event Four</a>
                                            </h4>
                                            <h5>$24.99</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Amet numquam aspernatur!</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100">
                                        <a href="#">
                                            <img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    <a href="#">Event Five</a>
                                                </h4>
                                                <h5>$24.99</h5>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="card h-100">
                                            <a href="#">
                                                <img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                        <a href="#">Event Six</a>
                                                    </h4>
                                                    <h5>$24.99</h5>
                                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Amet numquam aspernatur!</p>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.row -->

                                </div>
                                <!-- /.col-lg-7 -->
                                

                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.container -->


</div>

