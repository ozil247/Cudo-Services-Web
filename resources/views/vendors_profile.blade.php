@extends('layouts.vendors')

@section('content')

<div class="aon-admin-heading">
    <h4>Edit Profile</h4>
</div>

<div class="card aon-card">
    <div class="card-header aon-card-header">
        <h4><i class="fa fa-user"></i> About me</h4>
    </div>
    <div class="card-body aon-card-body">
        <form method="POST" action="{{route('update_profile')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl-4">
                    <div class="aon-staff-avtar">
                        <div class="aon-staff-avtar-header">
                            <div class="aon-pro-avtar-pic ">
                                <img src="/storage/image/{{$profile->image}}" alt="">
                                <button class="admin-button has-toltip">
                                    <i class="fa fa-camera"></i>
                                    <span class="header-toltip">Upload Avtar</span>
                                    <input type="file" name="image">
                                </button>
                            </div>

                        </div>
                        <div class="aon-staff-avtar-footer">
                            <h4 class="aon-staff-avtar-title">Upload Your Avatar</h4>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-md-12" id="aon-adress-panel">
                            <div class="card-header aon-card-header">
                                <h4><i class="fa fa-address-card"></i> Your Profile</h4>
                            </div>


                            <div class="row">
                                <div class=" pt-1 col-md-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input  class="form-control sf-form-control" value="{{ Auth::user()->phone }}" name="phone" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <div class="aon-inputicon-box">
                                            <input class="form-control sf-form-control" value="{{$profile->address}}"
                                                name="address" type="text">
                                            <i class="aon-input-icon fa fa-globe"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <label>Service Category</label>
                                <div >Select your area of specialization</div>
                                <select name="jobcategory_id" class="selectpicker"
                                    data-live-search="true">
                                    @if ($profile->category)
                                    <option value="{{$profile->category->id}}">{{$profile->category->name}} </option>
                                    @endif
                                    @foreach ($categories as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6 breck-w1400">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Desired Service Location </label>
                                            <div class="aon-inputicon-box">
                                                <input class="form-control sf-form-control" value="{{$profile->location}}"
                                                    name="location" type="text">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">

                                <label >Gender</label>
                                <select  name="gender" class="selectpicker">
                                    <option value="{{$profile->gender}}">{{$profile->gender}}</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Biography</label>
                                <div class="editer-wrap">
                                    <div class="editer-textarea">
                                        <textarea name="bio"  class="form-control" rows="4">{{$profile->bio}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-success" style="background-color:rgb(13, 13, 125)" >Update Profile</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>


@endsection
