<?php

namespace App\Http\Controllers;

use App\blog;
use App\blogcategory;
use App\categories;
use Illuminate\Http\Request;

class BlogController extends Controller
{

   public function createBlog()
   {
       $categories =  blogcategory::all();
       return view('create_blog',compact('categories'));
   }

   public function storeBlog(Request $request)
   {
       $blog = new blog();
       $blog->title = $request->title;
       $blog->intro = $request->intro;
       $blog->body = $request->body;
       $blog->clossing = $request->clossing;
       $blog->views = 0;
       $blog->blogcategory_id = $request->blogcategory_id;


        $image = $request->image;
        $extension = $image->getClientOriginalExtension();
        $filename = $request->title . uniqid() . '.' . $extension;
        $request->file('image')->storePubliclyAs('public/image', $filename);
        $blog->image = $filename;

    $blog->save();

    return back();
   }

   public function blog()
   {
    $categories = blogcategory::all();
       $blogs = blog::latest()->get();
       return view('blog',compact('blogs','categories'));
   }

   public function blogDetail($id)
   {
       $categories = blogcategory::all();
       $blog = blog::find($id);
       $blog->views +=1;
       $blog->save();
       return view('blog_detail',compact('blog','categories'));
   }

}
