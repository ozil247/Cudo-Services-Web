@extends('layouts.app')

@section('content')
<!-- Banner Area -->
<div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">
        <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
        <div class="sf-banner-heading-wrap">
            <div class="sf-banner-heading-area">
                <div class="sf-banner-heading-large">Vendors</div>
                <div class="sf-banner-breadcrumbs-nav">
                    <ul class="list-inline">
                        <li><a href="{{ route('welcome') }}"> Home </a></li>
                        <li>Vendors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<div class="owl-carousel aon-vendor-provider-two-carousel aon-owl-arrow">

    <!-- COLUMNS 1 -->
    @foreach($profiles as $profile)
    @php
        $user = $profile->user;
    @endphp
        <a
            href="{{ route('vendor.details', [\Str::slug($user->name), $user->id]) }}">
            <div class="item">
                <div class="aon-ow-provider-wrap2">
                    <div class="aon-ow-provider2 shine-hover">

                        <div class="aon-ow-top">
                            <div class="aon-pro-check"><span><i class="fa fa-check"></i></span>
                            </div>
                            <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <div class="aon-ow-info">
                                <h4 class="sf-title"><a
                                        href="{{ route('vendor.details', [\Str::slug($user->name), $user->id]) }}">{{ $user->name }}</a>
                                </h4>
                                {{-- <span>{{ $user->profile->categories }}</span> --}}

                            </div>
                        </div>
                        <div class="aon-ow-mid">
                            <div class="aon-ow-media media-bg-animate">
                                <a class="shine-box"
                                    href="{{ route('vendor.details', [\Str::slug($user->name), $user->id]) }}"><img
                                        src="/storage/image/{{ $user->profile->image }}" alt=""></a>
                            </div>
                            <p>Location:{{ $user->profile->location }}
                            </p>
                            <div class="aon-ow-pro-rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star text-gray"></span>
                            </div>
                            <div class="aon-ow-bottom">
                                <a href="{{ route('vendor.details', [\Str::slug($user->name), $user->id]) }}"
                                    class="site-button">Request A Quote</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </a>

    @endforeach


</div>

@endsection
