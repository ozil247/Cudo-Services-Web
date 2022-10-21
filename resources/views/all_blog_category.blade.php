@extends('layouts.admindash')

@section('content')
<div class="table-container">
    <div class="t-header">All Category</div>
    <div class="table-responsive">
        <table id="basicExample" class="table custom-table">
            <thead>
                <tr>
                    <th>Category Name</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($category as $category)

                <tr>
                    <td>{{$category->name}}</td>

                    <td>
                        <a href="{{route('edit.blog.category', $category->id)}}">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('delete.blog.category',$category->id)}}">Delete</a>
                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>

@endsection
