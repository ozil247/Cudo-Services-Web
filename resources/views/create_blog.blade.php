@extends('layouts.admindash')

@section('content')

<div class="card aon-card">
    <div class="card-header aon-card-header">
        <h4><i class="fa fa-comments-o"></i> Create Blog</h4>
    </div>
    <div class="card-body aon-card-body">
        <form action="{{route('store_blog_post')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="row">
                <div class="col-md-12">

                    <label>Title</label>
                    <div   class="editer-wrap">
                        <div  class="editer-textarea">
                            <textarea name="title" class="form-control" rows="2"></textarea>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Intro</label>
                        <div class="editer-wrap">
                            <div class="editer-textarea">
                                <textarea name="intro" class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Body</label>
                        <div class="editer-wrap">
                            <div class="editer-textarea">
                                <textarea name="body" class="form-control" rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Closing</label>
                        <div class="editer-wrap">
                            <div class="editer-textarea">
                                <textarea name="clossing" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4 col-md-12">
                    <div class="form-group">
                        <label for="disabledInput">Categories</label>
                       <select name="blogcategory_id" id="">
                           <option value="">Select Category</option>
                           @foreach ($categories as $c)

                           <option value="{{$c->id}}">{{$c->name}}</option>

                           @endforeach

                       </select>
                    </div>
                </div>
                <div class="pt-4">

                    <button class="admin-button has-toltip">
                        <i class="fa fa-camera"></i>
                        <input type="file" name="image">
                    </button>
                </div>

                <div class=" pt-4 col-md-12">
                    <div class="form-group">
                        <button class="btn btn-success" style="background-color:rgb(13, 13, 125)" >Post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>

@endsection
