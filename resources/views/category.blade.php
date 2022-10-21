@extends('layouts.admindash')

@section('content')


<div class="main-container">
    <div class="row gutters">
        <div class="col-md-6">
            <div class="card">
                <form action="{{route('add_category')}}" method="POST">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="disabledInput">Name</label>
                            <input type="text" id="disabledInput" name="name" class="form-control" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success ">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
