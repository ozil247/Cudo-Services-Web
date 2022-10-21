@extends('layouts.app')

@section('content')
<div id="Upcoming" class=" container tab-pane active">
    <div class="sf-tabs-content">
        <form method="POST" action="{{route('login')}}" class="aon-login-form">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="aon-inputicon-box">
                            <input class="form-control sf-form-control" name="email" type="text" placeholder="Email"
                                required>
                            <i class="aon-input-icon fa fa-user"></i>
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
                    <div class="form-group d-flex aon-login-option justify-content-between">
                        <div class="aon-login-opleft">
                            <div class="checkbox sf-radio-checkbox">
                                <input id="td2_2" name="abc" value="five" type="checkbox">
                                <label for="td2_2">Keep me logged</label>
                            </div>
                        </div>
                        <div class="aon-login-opright">
                            <a href="{{ route('forgot_password') }}">Forgot Password</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="site-button w-100">Login <i class="feather-arrow-right"></i> </button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
