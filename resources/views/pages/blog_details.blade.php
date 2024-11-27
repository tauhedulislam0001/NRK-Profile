@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Bannder section -->
    <section class="banner-section-wrapper mt-3 mt-md-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-inner-wrap">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <!-- Single banner -->
                                <div class="swiper-slide">
                                    <div class="single-banner-layout w-100">
                                        <div class="sbl-image d-flex gap-2">
                                            <img src="{{ asset('assets/images/banner/yasmin_mtn_default.jpg') }}" alt="" width="100%" height="auto">
                                            <div class="sbl-image-text text-start">
                                                <h2>Yashima Mountaintop Park – SUO</h2>

                                                <p class="sbl-i-year"><b>2024</b></p>

                                                <p class="sbl-i-text">
                                                    Yashima Mountaintop Park project is located on the mountain called Yashima which is a national landmark and a natural treasure in the Setonaikai National Park. This project was initiated to revitalize the entire mountain-top area and this mountain-top park is designed to actualize and maximize its potential.
                                                </p>
                                                <p class="sbl-i-text">
                                                    Yashima Mountaintop Park project is located on the mountain called Yashima which is a national landmark and a natural treasure in the Setonaikai National Park. This project was initiated to revitalize the entire mountain-top area and this mountain-top park is designed to actualize and maximize its potential.
                                                </p>
                                                <p class="sbl-i-text">
                                                    Yashima Mountaintop Park project is located on the mountain called Yashima which is a national landmark and a natural treasure in the Setonaikai National Park. This project was initiated to revitalize the entire mountain-top area and this mountain-top park is designed to actualize and maximize its potential.
                                                </p>
                                                <p class="sbl-i-text">
                                                    Yashima Mountaintop Park project is located on the mountain called Yashima which is a national landmark and a natural treasure in the Setonaikai National Park. This project was initiated to revitalize the entire mountain-top area and this mountain-top park is designed to actualize and maximize its potential.
                                                </p>
                                                <p class="sbl-i-text">
                                                    Yashima Mountaintop Park project is located on the mountain called Yashima which is a national landmark and a natural treasure in the Setonaikai National Park. This project was initiated to revitalize the entire mountain-top area and this mountain-top park is designed to actualize and maximize its potential.
                                                </p>
                                                <p class="sbl-i-text">
                                                    Yashima Mountaintop Park project is located on the mountain called Yashima which is a national landmark and a natural treasure in the Setonaikai National Park. This project was initiated to revitalize the entire mountain-top area and this mountain-top park is designed to actualize and maximize its potential.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-banner-layout w-100">
                                        <div class="sbl-image d-flex gap-2">
                                            <img src="{{ asset('assets/images/banner/Yamaguchi_HR.jpg') }}" alt="" width="100%" height="auto">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery section -->
    <section class="profile-gallary-wrapper mt-3 mt-md-5">
        <div class="container">
            <div class="row" data-masonry='{"percentPosition": true }'>
                <div class="col-sm-6 col-lg-4 mb-4">
                  <a href="">
                    <div class="card hover-animation-img-wrap">
                            <div class="image-wrap overflow-hidden">
                                <img src="{{ asset('assets/images/protfolio/Kawaguchi.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        <div class="card-body">
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                  </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="">
                      <div class="card hover-animation-img-wrap">
                            <div class="image-wrap overflow-hidden">
                                <img src="{{ asset('assets/images/protfolio/fujimori.jpg') }}" class="card-img-top" alt="...">
                            </div>
                          <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="">
                      <div class="card hover-animation-img-wrap">
                            <div class="image-wrap overflow-hidden">
                                <img src="{{ asset('assets/images/protfolio/Vijversburg.jpg') }}" class="card-img-top" alt="...">
                            </div>
                          <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="">
                      <div class="card hover-animation-img-wrap">
                            <div class="image-wrap overflow-hidden">
                                <img src="{{ asset('assets/images/protfolio/toyo_sumika.jpg') }}" class="card-img-top" alt="...">
                            </div>
                          <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="">
                      <div class="card hover-animation-img-wrap">
                            <div class="image-wrap overflow-hidden">
                                <img src="{{ asset('assets/images/protfolio/mikimoto.jpg') }}" class="card-img-top" alt="...">
                            </div>
                          <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="">
                      <div class="card hover-animation-img-wrap">
                            <div class="image-wrap overflow-hidden">
                                <img src="{{ asset('assets/images/protfolio/mikimoto.jpg') }}" class="card-img-top" alt="...">
                            </div>
                          <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="">
                      <div class="card hover-animation-img-wrap">
                            <div class="image-wrap overflow-hidden">
                                <img src="{{ asset('assets/images/protfolio/mikimoto.jpg') }}" class="card-img-top" alt="...">
                            </div>
                          <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
