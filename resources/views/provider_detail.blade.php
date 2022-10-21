@extends('layouts.app')


@section('content')
   <!-- Banner Area -->
   <div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">
        <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
        <div class="sf-banner-heading-wrap">
            <div class="sf-banner-heading-area">
                <div class="sf-banner-heading-large">Vendor's Detail</div>
                <div class="sf-banner-breadcrumbs-nav">
                    <ul class="list-inline">
                        <li><a href="{{route('welcome')}}"> Home </a></li>
                        <li>Vendor's Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->




<div class="sf-provi-bio-right">

    <div class="sf-provi-bio-left">
        <div class="sf-provi-bio-info">

            <div class="sf-provi-pic"><img src="/storage/image/{{ $user->profile->image }}" alt=""></div>

            <div class="sf-provi-title"><strong>{{ $user->name }}</strong></div>

        </div>

    </div>
    <div class="container  ml-5">
        <div class="" >

            <h3 class="sf-provi-title">About Provider</h3>
            <div class="sf-provi-cat"><strong>Categories:</strong> {{ $user->profile->category->name }}</div>
            <div class="sf-provi-cat"><strong>Phone:</strong> {{ $user->phone }}</div>
            <div class="sf-provi-cat"><strong>Service Location:</strong> {{ $user->profile->location }}</div>

        </div>

    </div>


</div>

@endsection
