@extends('layouts.app')

@section('content')
    <div class="col-12">
        <section class="search-sec">
            <div class="container">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-1">
                                    <input type="text" class="form-control search-slt border border-danger" placeholder="Enter Festival">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-1">
                                    <input type="text" class="form-control search-slt border border-danger" placeholder="Enter City">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-1">
                                    <select class="form-control search-slt border border-danger" id="exampleFormControlSelect1">
                                        <option>Select Vehicle</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                        <option>Example one</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-1">
                                    <button type="button" class="btn btn-danger wrn-btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 p-3">
                <img style="width:100%" src="https://cdn5.vectorstock.com/i/1000x1000/48/69/ontario-province-map-vector-2934869.jpg" alt="">
            </div>
            <div class="col-7 pt-3">
                <!-- right side -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 border border-secondary">
                            <a href="#">
                                <img class="card-img-top" src="/svg/images1.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Oktoberfest</a>
                                </h4>
                                <div class="d-flex">
                                    <div><img src= "/svg/bed2.png" style="height:25px;" class="pr-2" ></div>
                                    <div><img src= "/svg/meal2.png" style="height:25px;" class="pr-2"></div>
                                    <div><img src= "/svg/long2.png" style="height:25px;" class="pr-2"></div>
                                    <div><img src= "/svg/dol.png" style="height:25px;" class="pr-2"></div>
                                    <div><img src= "/svg/vol1.png" style="height:25px;" class="pr-2"></div>
                                    <div><img src= "/svg/disability1.png" style="height:30px;" class="pr-2"></div>
                                </div>
                                <div>
                                    <div class="pr-5"><strong>Date: </strong> Sept 19, 2020</div>
                                    <div class="pr-5"><strong>Address: </strong> 17 Benton St, Kitchener, ON N2G 3G9</div>
                                    <div class="pr-5"><strong>Celebrations: </strong>Parades, food, music</div>
                                </div>

                                <p class="card-text">Oktoberfest is the world's largest Volksfest. Held annually in Munich, Bavaria, Germany, it is a 16- to 18-day folk festival running from mid or late September to the first Sunday in October, with more than six million people from around the world attending the event every year.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 border border-secondary">
                            <a href="#">
                                <img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Ottawa Children’s Festival</a>
                                </h4>
                                <div class="d-flex">
                                    <div><img src= "/svg/bed2.png" style="height:25px;" class="pr-2" ></div>
                                    <div><img src= "/svg/meal2.png" style="height:25px;" class="pr-2"></div>
                                    <div><img src= "/svg/long2.png" style="height:25px;" class="pr-2"></div>
                                    <div><img src= "/svg/vol1.png" style="height:25px;" class="pr-2"></div>
                                    <div><img src= "/svg/disability1.png" style="height:30px;" class="pr-2"></div>
                                </div>
                                <div>
                                    <div class="pr-5"><strong>Date: </strong>May 6 ~ May 10, 2020</div>
                                    <div class="pr-5"><strong>Time: </strong>8:45 a.m. ~ 4:00 p.m.</div>
                                    <div class="pr-5"><strong>Address: </strong>294 Albert St, Ottawa, ON</div>
                                    <div class="pr-5"><strong>Celebrations: </strong>Parades, food, music</div>
                                </div>
                                <p class="card-text">Since 1985, the Ottawa Children’s Festival (OCF) has hosted an annual celebration of the best in live performing arts for children. Creating programs for children aged two to 15, the Festival focuses on enriching school curriculum and promoting the arts as an integral part of children’s education; strives to present work that excites and challenges...</p>
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
                <!-- right side -->
            </div>
            <div class="row pt-5">

            </div>
        </div>
    </div>
@endsection
