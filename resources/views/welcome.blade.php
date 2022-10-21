@extends('layouts.app')

@section('content')


<!-- HEADER END -->

<!-- HEADER END -->

<!-- CONTENT START -->
<div class="page-content">


    <!-- BANNER SECTION START -->
    <section class="aon-banner-area2">
        <!--banner 2-->
        <div class="container">
            <div class="aone-banner-area2-inner">
                <div class="row d-flex align-items-center">
                    <!--Banner Left-->
                    <div class="col-lg-5 col-md-12">
                        <div class="aon-bnr2-content-wrap">
                            <!--Banner Text-->
                            <div class="aon-bnr-write">
                                <h2 class="text-top-line">Hire
                                    <span class="text-secondry">Experts</span> &amp;
                                </h2>
                                <h2 class="text-bot-line">Get Your Job Done</h2>
                            </div>
                            <!--Banner Text End-->
                            <!--Seach Bar-->
                            <div class="aon-bnr2-search-bar">
                                <form action="{{ route('search') }}" method="get">@csrf
                                    <div class="aon-bnr2-search-box">
                                        <!-- COLUMNS 1 -->
                                        <input name="search" class="col-md-12 form-control" type="text">
                                        <!-- COLUMNS 3 -->
                                        <div class="aon-search-btn-wrap">
                                            <button class="aon-search-btn" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--Seach Bar End-->
                        </div>
                    </div>
                    <!--Banner Right-->
                    <div class="col-lg-7 col-md-12">
                        <div class="aon-bnr2-media-wrap">
                            <!-- COLUMNS 1 -->
                            <div class="aon-bnr2-media">
                                <img src="images/cud1.png" alt="">
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="aon-bnr2-lines-left">
                                <div class="aon-bnr2-line-left-content">
                                    <img src="images/cudo.jpng" alt="">
                                    <span class="circle-l-1 slide-fwd-center"></span>
                                    <span class="circle-l-2 slide-fwd-center2"></span>
                                    <span class="circle-l-3 slide-fwd-center3"></span>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="aon-bnr2-lines-right">
                                <img src="images/banner2/line-right.png" alt="">
                                <span class="circle-r-1 slide-fwd-center3"></span>
                                <span class="circle-r-2 slide-fwd-center2"></span>
                                <span class="circle-r-3 slide-fwd-center"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--banner 2-->
    </section>
    <!-- BANNER SECTION END -->


    <!-- Services Finder categories -->
    <section class="bg-white aon-categories-area2">
        <div class="container">
            <!--Title Section Start-->
            <div class="section-head">
                <div class="row">
                    <!-- COLUMNS LEFT -->
                    <div class="col-lg-6 col-md-12">
                        <span class="aon-sub-title">categories</span>
                        <h2 class="sf-title">Popular Categories</h2>
                    </div>
                    <!-- COLUMNS RIGHT -->

                </div>
            </div>
            <!--Title Section End-->

            <div class="section-content">
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
                                                    href="{{ route('job.categories.detail', $data->id) }}">{{ $data->name }}</a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div class="aon-btn-pos-center">
                        <a class="site-button" href="{{ route('view_all_category') }}">View All</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Services Finder categories END -->

    <!-- How It Work -->
    <section class="aon-howit-area2">
        <div class="container">

            <div class="aon-howit-area2-section">
                <div class="aon-howit-area2-bg">
                    <!--Title Section Start-->
                    <div class="section-head aon-title-center white">
                        <span class="aon-sub-title">Steps</span>
                        <h2 class="sf-title">How It Work</h2>
                    </div>
                    <!--Title Section Start End-->
                    <div class="section-content">
                        <div class="aon-categories-area2-section">
                            <div class="row justify-content-center">
                                <!-- Block 1-->
                                <div class="col-lg-4 col-md-6">
                                    <div class="aon-howit-area2-iconbox aon-icon-effect">
                                        <div class="aone-howit-number">01</div>
                                        <div class="aon-howit-area2-icon">
                                            <span>
                                                <i class="aon-icon"><img src="images/step-icon/1.png" alt=""></i>
                                            </span>
                                        </div>
                                        <div class="aon-howit-area2-content">
                                            <h4 class="aon-tilte">Describe Your Task</h4>
                                            <p>let us know exactly what you want by
                                                describing the task well.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Block 2-->
                                <div class="col-lg-4 col-md-6">
                                    <div class="aon-howit-area2-iconbox aon-howit-arrow aon-icon-effect">
                                        <div class="aone-howit-number">02</div>
                                        <div class="aon-howit-area2-icon">
                                            <span>
                                                <i class="aon-icon"><img src="images/step-icon/2.png" alt=""></i>
                                            </span>
                                        </div>
                                        <div class="aon-howit-area2-content">
                                            <h4 class="aon-tilte">Choose a Tasker</h4>
                                            <p>
                                                This helps us determine which Taskers best for the job.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Block 3-->
                                <div class="col-lg-4 col-md-6">
                                    <div class="aon-howit-area2-iconbox aon-icon-effect">
                                        <div class="aone-howit-number">03</div>
                                        <div class="aon-howit-area2-icon">
                                            <span>
                                                <i class="aon-icon"><img src="images/step-icon/3.png" alt=""></i>
                                            </span>
                                        </div>
                                        <div class="aon-howit-area2-content">
                                            <h4 class="aon-tilte">Live Smarter</h4>
                                            <p>Cudo service agent delivers your job in a professional manner that
                                                gives you best feeling of satisfaction you can ever think of.</p>
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
    <!-- How It Work END -->


    <!-- Featued Vender -->
    <section class="section-full aon-feature-vender-area2">
        <div class="container">
            <!--Title Section Start-->
            <div class="section-head">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <span class="aon-sub-title">Vendor</span>
                        <h2 class="sf-title">Featured Providers</h2>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p>
                            <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt
                                ut labore et dolore magna aliqua-->
                        </p>
                    </div>
                </div>
            </div>
            <!--Title Section Start-->
            <div class="section-content">
                <div class="owl-carousel aon-vendor-provider-two-carousel aon-owl-arrow">

                    <!-- COLUMNS 1 -->
                    @foreach($users as $user)

                        <div class="item">
                            <a
                                href="{{ route('vendor.details', [\Str::slug($user->name), $user->id]) }}">
                            </a>

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
                                            <span>{{ $user->profile->categories }}</span>

                                        </div>
                                    </div>
                                    <div class="aon-ow-mid">
                                        <div class="aon-ow-media media-bg-animate">
                                            <a class="shine-box"
                                                href="{{ route('vendor.details', [\Str::slug($user->name), $user->id]) }}"><img
                                                    src="/storage/image/{{ $user->profile->image }}"  alt=""></a>
                                        </div>
                                        <p> {{ $user->profile->category->name }}</p>
                                        <p>{{ $user->profile->location }}
                                        </p>
                                        <!--<div class="aon-ow-pro-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star text-gray"></span>
                                            </div-->
                                        <div class="aon-ow-bottom">
                                            <a href="{{ route('vendor.details', [\Str::slug($user->name), $user->id]) }}"
                                                class="site-button">Request A Quote</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    @endforeach


                </div>
            </div>

        </div>
    </section>
    <!-- Featued Vender End -->


    <!-- Why Choose us -->
    <section class="aon-why-choose2-area">
        <div class="container">

            <div class="aon-why-choose2-box">
                <div class="row">
                    <!-- COLUMNS LEFT -->
                    <div class="col-lg-6 col-md-12">
                        <div class="aon-why-choose-info">
                            <!--Title Section Start-->
                            <div class="section-head">

                                <h2 class="aon-title">Why Choose us</h2>

                            </div>
                            <!--Title Section Start End-->

                            <ul class="aon-why-choose-steps list-unstyled">
                                <!-- COLUMNS 1 -->
                                <li class="d-flex">
                                    <div class="aon-w-choose-left aon-icon-effect">
                                        <div class="aon-w-choose-icon"><i class="aon-icon"><img
                                                    src="images/whychoose/7.png" alt=""></i></div>
                                    </div>
                                    <div class="aon-w-choose-right">
                                        <h4 class="aon-title">Meet Professional Vendors</h4>
                                        <p>We provide community of professional skill personels with many years of
                                            experience.</p>
                                    </div>
                                </li>
                                <!-- COLUMNS 2 -->
                                <li class="d-flex">
                                    <div class="aon-w-choose-left aon-icon-effect">
                                        <div class="aon-w-choose-icon"><i class="aon-icon"><img
                                                    src="images/whychoose/clk.png" alt=""></i></div>
                                    </div>
                                    <div class="aon-w-choose-right">
                                        <h4 class="aon-title">Time Management</h4>
                                        <p>Our vendors are always ready to get your job done </p>
                                    </div>
                                </li>
                                <!-- COLUMNS 3 -->
                                <li class="d-flex">
                                    <div class="aon-w-choose-left aon-icon-effect">
                                        <div class="aon-w-choose-icon"><i class="aon-icon"><img
                                                    src="images/whychoose/3.png" alt=""></i></div>
                                    </div>
                                    <div class="aon-w-choose-right">
                                        <h4 class="aon-title">Build your online reputation</h4>
                                        <p> Being reputable can distinguish one professional from another or influence
                                            customers and colleagues.</p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>




</div>
<!-- CONTENT END -->



@endsection
