@extends('layouts.app')

@section('content')
<div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">
        <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
        <div class="sf-banner-heading-wrap">
            <div class="sf-banner-heading-area">
                <div class="sf-banner-heading-large">Service Categories</div>
                <div class="sf-banner-breadcrumbs-nav">
                    <ul class="list-inline">
                        <li><a href="{{route('welcome')}}"> Home </a></li>
                        <li>Available Service Categories </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-content sf-caty-listResult-wrap">
      <!-- Banner Area -->

    <div class="container">


            <div class="row">
                <!--BLock 1-->
                <div class="col-md-4">
                    <div class="sf-vender-list-wrap">
                        @foreach ($profiles as $profile)
                        <div class="sf-vender-list-box d-flex">
                            <div class="sf-vender-list-pic" style="background-image:url(/storage/image/{{$profile->image}})">
                                <a class="sf-vender-pic-link" href="{{ route('vendor.details', [\Str::slug($profile->user->name), $profile->user->id]) }}"></a>
                            </div>
                            <div class="sf-vender-list-info">
                                <h4 class="sf-venders-title"><a href="{{ route('vendor.details', [\Str::slug($profile->user->name), $profile->user->id]) }}">{{$profile->user->name}}</a></h4>
                                <p>{{ $profile->category->name }}</p>
                                <span class="sf-venders-address"><i class="fa fa-map-marker"></i>{{$profile->location}}</span>
                                <div class="sf-ow-pro-rating">

                                </div>

                                <div class="sf-pro-check"><span><i class="fa fa-check"></i></span></div>
                                <div class="sf-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>


                            </div>
                        </div>
                    </div>

                        @endforeach
                </div>



            </div>
        </div>

    </div>
</div>


@endsection
