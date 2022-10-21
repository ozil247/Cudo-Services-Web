@extends('layouts.admindash')

@section('content')


<div class="row">
    <form method="POST" action="{{route('add.blog.category')}}">@csrf
        <input  name="vendor_id" type="hidden">
        <div class="col-md-12">
            <div class="form-group">

                <input  placeholder="Category Name" name="name" type="text" required class="form-control">
            </div>
            <div class="form-group">
                <button  style="background-color:rgb(13, 13, 125)" class="btn text-white ">Add Category</button>
            </div>
        </div>

    </form>
</div>


@endsection
