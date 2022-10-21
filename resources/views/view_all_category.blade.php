@extends('layouts.app')

@section('content')

<div class="section-content">
    <!-- Banner Area -->
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

    <div class="aon-categories-area2-section">
        <div class="row justify-content-center">
            <!-- COLUMNS 1 -->
            @foreach($categories as $data)
                <div class="col-lg-4 col-md-6">
                    <div class="media-bg-animate mba-bdr-15">
                        <div class="aon-categories-area2-iconbox aon-icon-effect">
                            <div class="aon-cate-area2-icon">
                                <span>
                                    <i class="aon-icon"><img src="/storage/image/{{ $data->image }}"
                                            alt=""></i>
                                </span>
                            </div>
                            <div class="aon-cate-area2-content">
                                <h4 class="aon-tilte"><a
                                        href="{{route('job.categories.detail', $data->id)}}">{{ $data->name }}</a>
                                </h4>

                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

            {{$categories->links()}}


        </div>
    </div>
</div>

@endsection
