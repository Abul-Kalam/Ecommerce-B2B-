@extends('frontend.layouts.default')

@section('title', 'Home')

@section('content')

<div class="contaoner-fluid">
    <div class="container">
        <div class="row mt-2">
            <div class="col-xm-12 col-sm-12 col-md-2 col-lg-2">
              <div class="card-box">
                <div class="list-group cat-list">
                    <a href="#" class="list-group-item list-group-item-action active">Men's Fashion</a>
                    <a href="#" class="list-group-item list-group-item-action">Women's Fashion</a>
                    <a href="#" class="list-group-item list-group-item-action">Kid's Fashion</a>
                    <a href="#" class="list-group-item list-group-item-action">Boy's Fashion</a>
                    <a href="#" class="list-group-item list-group-item-action">Girl's Fashion</a>
                    <a href="#" class="list-group-item list-group-item-action">Event's</a>
                    <a href="#" class="list-group-item list-group-item-action">Event's</a>
                    <a href="#" class="list-group-item list-group-item-action">Women's Fashion</a>
                    <a href="#" class="list-group-item list-group-item-action">Kid's Fashion</a>
                    <a href="#" class="list-group-item list-group-item-action">Boy's Fashion</a>
                </div>
              </div>
            </div>
            {{-- ============================./Category======================== --}}

            <div class="col-xm-12 col-sm-12 col-md-7 col-lg-7">
              <div class="card-box">
                <div id="carouselExampleIndicators" class="carousel slide main-slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <a class="link" href="#">
                            <div class="thumbnail-holder">
                              <img class="d-block w-100" src="{{ asset('images/fashion (1).jpg') }}" alt="First slide">
                            </div>
                          </a>
                        </div>
                        <div class="carousel-item">
                          <a class="link" href="#">
                              <div class="thumbnail-holder">
                                <img class="d-block w-100" src="{{ asset('images/fashion (2).jpg') }}" alt="Second slide">
                              </div>
                            </a>
                          </div>
                          <div class="carousel-item">
                            <a class="link" href="#">
                            <div class="thumbnail-holder">
                              <img class="d-block w-100" src="{{ asset('images/fashion (3).jpg') }}" alt="Third slide">
                            </div>
                          </a>
                        </div>
                        <div class="carousel-item">
                          <a class="link" href="#">
                            <div class="thumbnail-holder">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/oHioOxhEflU"
                                  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                          </a>
                        </div>
                        <div class="carousel-item">
                          <a class="link" href="#">
                            <div class="thumbnail-holder">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/RLrrKHPQC6M"
                                  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                          </a>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
              </div>
                {{-- ==============================./Slide========================== --}}

            </div>
            <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card-box events">
                  <a class="link" href="#">
                    <div class="thumbnail-holder">
                      <img src="{{ asset('images/people.jpg') }}" alt="Thumbnail">
                    </div>
                  </a>
                </div>
            </div>
            {{-- ==========================./Add-Events======================= --}}
        </div>

        <div class="row">
          <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card-box p-2">
                <div class="partner-wrap d-flex flex-row bg-white">
                    <div class="title d-flex">
                      <a href="#">
                        <h5>Our Partner's</h5>
                      </a>
                    </div>
                    <div class="headlines d-flex w-100">
                      <marquee behavior="scroll" scrollamount="7" scrolldelay="1" direction="left">
                        <ul class="list">
                          <li>
                            <a href="#">
                              <div class="thumbnail-holder">
                                <img src="{{ asset('images/placeimg_128_64_arch.jpg') }}" alt="Thnumbnail">
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="thumbnail-holder">
                                <img src="{{ asset('images/placeimg_128_64_arch (2).jpg') }}" alt="Thnumbnail">
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="thumbnail-holder">
                                <img src="{{ asset('images/placeimg_128_64_arch.jpg') }}" alt="Thnumbnail">
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="thumbnail-holder">
                                <img src="{{ asset('images/placeimg_128_64_arch (2).jpg') }}" alt="Thnumbnail">
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="thumbnail-holder">
                                <img src="{{ asset('images/placeimg_128_64_arch (2).jpg') }}" alt="Thnumbnail">
                              </div>
                            </a>
                          </li>
                        </ul>
                      </marquee>
                    </div>
                  </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xm-12 col-sm-12 col-md-9 col-lg-9">
            <div class="card-box cat-box">
              <a class="link" href="#">
                <img src="{{ asset('images/mens-fashion.png') }}" alt="Thumbnail">
                <h3 class="title men">Men's Fashion</h3>
              </a>
            </div>
          </div>
          <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
            <div class="card-box">
              Hello
            </div>
          </div>
        </div>
        {{-- =======================./Men's-Fashion====================== --}}

        <div class="row">
          <div class="col-xm-12 col-sm-12 col-md-9 col-lg-9">
            <div class="card-box cat-box">
              <a class="link" href="#">
                <img src="{{ asset('images/fashion (2).jpg') }}" alt="Thumbnail">
                <h3 class="title women">Women's Fashion</h3>
              </a>
            </div>
          </div>
          <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
            <div class="card-box">
              Hello
            </div>
          </div>
        </div>
        {{-- =======================./Wommen's-Fashion====================== --}}

        <div class="row">
          <div class="col-xm-12 col-sm-12 col-md-9 col-lg-9">
            <div class="card-box cat-box">
              <a class="link" href="#">
                <img src="{{ asset('images/kids-fashion.jpg') }}" alt="Thumbnail">
                <h3 class="title kid">Kid's Fashion</h3>
              </a>
            </div>
          </div>
          <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
            <div class="card-box">
              Hello
            </div>
          </div>
        </div>
        {{-- =======================./Kid's-Fashion====================== --}}

        <div class="row">
          <div class="col-xm-12 col-sm-12 col-md-9 col-lg-9">
            <div class="card-box cat-box">
              <a class="link" href="#">
                <img src="{{ asset('images/girls-fashion.jpg') }}" alt="Thumbnail">
                <h3 class="title girl">Girl's Fashion</h3>
              </a>
            </div>
          </div>
          <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
            <div class="card-box">
              Hello
            </div>
          </div>
        </div>
        {{-- =======================./Kid's-Fashion====================== --}}

        <div class="row">
          <div class="col-xm-12 col-sm-12 col-md-9 col-lg-9">
            <div class="card-box cat-box">
              <a class="link" href="#">
                <img src="{{ asset('images/boys-fashion.jpg') }}" alt="Thumbnail">
                <h3 class="title boy">Boy's Fashion</h3>
              </a>
            </div>
          </div>
          <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
            <div class="card-box">
              Hello
            </div>
          </div>
        </div>
        {{-- =======================./Kid's-Fashion====================== --}}
    </div>
    @endsection
