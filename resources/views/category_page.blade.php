@extends('layouts.app')

@section('content')
   <!-- Banner Area -->
   <div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">
        <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
        <div class="sf-banner-heading-wrap">
            <div class="sf-banner-heading-area">
                <div class="sf-banner-heading-large">Booking</div>
                <div class="sf-banner-breadcrumbs-nav">
                    <ul class="list-inline">
                        <li><a href="{{route('welcome')}}"> Home </a></li>
                        <li> Booking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->


<div class="container">

    <div id="aon-provider-Req-quote" class="sf-provi-qoute-box cleafix m-b50 sf-provi-fullBox">
        <h3 class="sf-provi-title">Client Detail</h3>
        <div class="sf-divider-line"></div>
        <div class="sf-provi-qform">
            <form action="{{ route('booking') }}" method="POST">@csrf
                <div class="row">
                <input value="{{ $user->id }}" name="vendor_id" type="hidden">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" required class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input name="phone" type="tell" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" rows="8" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn text-white" style="background-color:rgb(13, 13, 125)">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>

</div>


@endsection
