@extends('layouts.app')

@section('content')
<div id="Past" class="tab-pane">
    <div class="sf-tabs-content">
        <form method="POST" action="{{route('register')}}" class="aon-login-form">
            @csrf
            @foreach ($errors->all() as $error)
            <p class="text-danger text-center">{{$error}}</p>
            @endforeach

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="First_Name" type="text"
                                placeholder="First Name" required>
                            <i class="aon-input-icon fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="Last_Name" type="text"
                                placeholder="Last Name" required>
                            <i class="aon-input-icon fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="Phone" type="number" placeholder="Phone"
                                required>
                            <i class="aon-input-icon fa fa-phone"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="email" type="password" placeholder="Email"
                                required>
                            <i class="aon-input-icon fa fa-envelope-o"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="password" type="password"
                                placeholder="Password" required>
                            <i class="aon-input-icon fa fa-lock"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="password_confirmation" type="password"
                                placeholder="Confirm Password" required>
                            <i class="aon-input-icon fa fa-lock"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group sign-term-con">
                        <div class="checkbox sf-radio-checkbox">
                            <input id="td33" name="abc" value="five" type="checkbox">
                            <label for="td33">I've read and agree with your <a href="#">Privacy Policy</a> and <a
                                    href="#">Terms &
                                    Conditions</a> </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i> </button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
