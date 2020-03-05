@extends('layouts.app')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class="row">

    <div class="col-lg-5">
      <!-- <h2 class="my-4">Map</h2> -->
      <div class="map  mt-5">
        <img style="width:100%" src="https://cdn5.vectorstock.com/i/1000x1000/48/69/ontario-province-map-vector-2934869.jpg" alt="">
      </div>
    </div>
      <!-- /.col-lg-5 -->

        <div class="col-lg-7">
        


	<div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
          <form class="card card-sm">
              <div class="card-body row no-gutters align-items-center">
                  <div class="col-auto">
                      <i class="fas fa-search h4 text-body"></i>
                  </div>
                  <!--end of col-->
                  <div class="col">
                      <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                  </div>
                  <!--end of col-->
                  <div class="col-auto">
                      <button class="btn btn-lg btn-success" type="submit">Search</button>
                  </div>
                  <!--end of col-->
              </div>
          </form>
      </div>
      <!--end of col-->
  </div>
        
        <!-- search box start -->
        <div class="region region-help alert alert-info messages info mt-5">
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
        <div class="region region-help alert alert-info messages info">
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
                </div>
                <!-- search -->
            <div  
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
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Event One</a>
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
@endsection
