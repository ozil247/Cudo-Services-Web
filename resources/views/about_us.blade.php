@extends('layouts.app')

@section('content')

<!-- Content -->
<div class="page-content">

    <!-- Banner Area -->
    <div class="aon-page-benner-area">
        <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">
            <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
            <div class="sf-banner-heading-wrap">
                <div class="sf-banner-heading-area">
                    <div class="sf-banner-heading-large">About Us</div>
                    <div class="sf-banner-breadcrumbs-nav">
                        <ul class="list-inline">
                            <li><a href="{{ route('welcome') }}"> Home </a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->



    <!-- About Area -->
    <div class="aon-about-area">
        <div class="container">

            <div class="row">
                <div class="row d-flex flex-wrap align-items-center a-b-none">


                    <!--Title Section Start-->
                    <div class="section-head">
                        <span class="aon-sub-title">About</span>
                        <h2 class="sf-title">Grow Your Business With Cudo Services</h2>
                        <p>Getting qualified professionals to do your jobs no longer requires you to break a neck.
                            Cudo service is a work marketplace. We connect people with different skills to clients/employers
                            who is in need of their services.We help employers grow their business by connecting them to best skills and qualified professionals.

                        </p>
                        <h2 class="sf-title">Our Story</h2>
                        <p>
                            OUR STORY
                            We created CUDO because we believe connecting with nearby service providers should be as
                            easy as putting A PHONE CALL across.
                            The platform helps customers book reliable and quality services - delivered by trained
                            professionals conveniently at home.


                           <h3> How do we achieve this?</h3>
                            Once on our platform, our match-making algorithm identifies professionals who are closest to
                            the users' requirements and available at the requested time and date. And once booked, we
                            ensure quality delivery, from the assignment to the job completion.


                        </p>
                    </div>
                    <!--Title Section End-->

                </div>
            </div>

        </div>
    </div>
    <!-- About Area END -->

    <!-- How it Work -->
    <section class="bg-white aon-how-service-area">
        <div class="container">

            <div class="section-content">
                <div class="row">
                    <!--Title Section Start-->
                    <div class="col-lg-4 col-md-12">
                        <span class="aon-sub-title">Steps</span>
                        <h2 class="sf-title">How Cudo Services Work</h2>
                    </div>
                    <!--Title Section End-->

                    <div class="col-lg-8 col-md-12">
                        <!-- Steps Block Start-->
                        <div class="aon-step-blocks">
                            <div class="row">
                                <!-- COLUMNS 1 -->
                                <div class="col-md-4 col-sm-4 m-b30">
                                    <div class="aon-step-section step-position-1 aon-icon-effect">
                                        <div class="aon-step-icon aon-icon-box">
                                            <span>
                                                <i class="aon-icon"><img src="images/step-icon/1.png" alt=""></i>
                                            </span>
                                        </div>
                                        <div class="aon-step-info">
                                            <h4 class="aon-title">Describe Your Task</h4>

                                        </div>
                                    </div>
                                </div>

                                <!-- COLUMNS 2 -->
                                <div class="col-md-4 col-sm-4 m-b30">
                                    <div class="aon-step-section step-position-2 aon-icon-effect">
                                        <div class="aon-step-icon">
                                            <span>
                                                <i class="aon-icon"><img src="images/step-icon/2.png" alt=""></i>
                                            </span>
                                        </div>
                                        <div class="aon-step-info">
                                            <h4 class="aon-title">Choose a Tasker</h4>

                                        </div>
                                    </div>
                                </div>

                                <!-- COLUMNS 3 -->
                                <div class="col-md-4 col-sm-4 m-b30">
                                    <div class="aon-step-section  step-position-3  aon-icon-effect">
                                        <div class="aon-step-icon">
                                            <span>
                                                <i class="aon-icon"><img src="images/step-icon/3.png" alt=""></i>
                                            </span>
                                        </div>
                                        <div class="aon-step-info">
                                            <h4 class="aon-title">Live Smarter</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Steps Block End-->
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- Statics -->
    <section class="aon-statics-area2">
        <div class="container">

            <div class="aon-statics-area2-section">
                <div class="aon-statics-area2-bg">
                    <!--Title Section Start-->
                    <div class="section-head aon-title-center white">

                        <h2 class="sf-title">Trusted by thousands of people all over the world</h2>
                        <h3 class="sf-title">Our mission to create economic opportunities so people have better lives
                        </h3>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Statics END -->


    <!--Newsletter Start-->>

</div>
<!-- Content END-->

@endsection
