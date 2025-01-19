@extends('layouts.main')
@section('content')
<section class="banner-section-wrapper">
    <div class="container-fluid p-0">
        <div class="banner-inner-wrap">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Single banner -->
                    <div class="swiper-slide">
                        <a href="{{route('blogDetails')}}" class="w-100" >
                            <div class="single-banner-layout w-100">
                                <div class="sbl-image">
                                    <img src="{{ asset('assets/images/banner/yasmin_mtn_default.jpg')}}" alt="" width="100%" height="auto" />
                                </div>
                                <div class="sbl-text mt-3">
                                    <h2>Upstate House – Christian Wassmann</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Single banner -->
                    <div class="swiper-slide">
                        <a href="" class="w-100">
                            <div class="single-banner-layout w-100">
                                <div class="sbl-image">
                                    <img src="{{ asset('assets/images/banner/Yamaguchi_HR.jpg')}}" alt="" width="100%" height="auto">
                                </div>
                                <div class="sbl-text mt-3">
                                    <h2>Upstate House – Christian Wassmann</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Single banner -->
                    <div class="swiper-slide">
                        <a href="" class="w-100">
                            <div class="single-banner-layout w-100">
                                <div class="sbl-image">
                                    <img src="{{ asset('assets/images/banner/upstate.jpg') }}" alt="" width="100%" height="auto">
                                </div>
                                <div class="sbl-text mt-3">
                                    <h2>Upstate House – Christian Wassmann</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
