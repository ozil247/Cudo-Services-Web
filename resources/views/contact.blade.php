@extends('layouts.app')

@section('content')
  <!-- Banner Area -->
  <div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">
      <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
      <div class="sf-banner-heading-wrap">
        <div class="sf-banner-heading-area">
          <div class="sf-banner-heading-large">Contact Us</div>
          <div class="sf-banner-breadcrumbs-nav">
            <ul class="list-inline">
              <li><a href="{{route('welcome')}}"> Home </a></li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Area End -->


<div class="sf-contact-form">

    <div class="sf-con-form-title text-center">

        <h2 class="m-b30">Contact Information</h2>

    </div>

    <form action="{{route('contact_message')}}" method="POST">@csrf

        <div class="row">



            <!-- COLUMNS 1 -->

            <div class="col-md-6">

                <div class="form-group">

                    <input type="text" name="name" placeholder="Name" class="form-control" required>

                </div>

            </div>

            <!-- COLUMNS 2 -->

            <div class="col-md-6">

                <div class="form-group">

                    <input type="text" name="email" placeholder="Email" class="form-control" required>

                </div>

            </div>

            <!-- COLUMNS 3 -->

            <div class="col-md-6">

                <div class="form-group">

                    <input type="tell" name="phone" placeholder="Phone" class="form-control">

                </div>

            </div>

            <!-- COLUMNS 4 -->

            <div class="col-md-6">

                <div class="form-group">

                    <input type="text" name="subject" placeholder="Subject" class="form-control" required>

                </div>

            </div>
            <!-- COLUMNS 5 -->

            <div class="col-md-12">

                <div class="form-group">

                    <textarea name="message" placeholder="Message" class="form-control" required></textarea>

                </div>

            </div>

        </div>

        <div class="sf-contact-submit-btn">

            <button class="site-button" type="submit">Submit</button>

        </div>

    </form>

</div>

@endsection
