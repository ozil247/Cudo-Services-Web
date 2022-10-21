@extends('layouts.admindash')

@section('content')

<div class="row">
    <form method="POST" action="{{route('update.blog.category',$category->id)}}">@csrf
        <input  name="vendor_id" type="hidden">
        <div class="col-md-12">
            <div class="form-group">

                <input  placeholder="{{$category->name}}" name="name" type="text" required class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button style="background-color:rgb(13, 13, 125)"  class="btn text-white ">Update</button>
            </div>
        </div>

    </form>
</div>

@endsection
