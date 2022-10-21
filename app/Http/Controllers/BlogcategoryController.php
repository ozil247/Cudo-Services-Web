<?php

namespace App\Http\Controllers;

use App\blogcategory;
use Illuminate\Http\Request;

class BlogcategoryController extends Controller
{
    public function blogCategory()
   {
       return view('blog_category');
   }

   public function addBlogCategory(Request $request)
   {
       $category = new blogcategory();
       $category->name = $request->name;
       $category->save();

       return back();

   }

   public function allBlogCategory()
   {
       $category = Blogcategory::latest()->get();
       return view('all_blog_category',compact('category'));
   }

   public function editBlogCategory($id)
   {
       $category = blogcategory::find($id);
       return view('edit_blog_category',compact('category'));
   }

   public function updateBlogCategory(Request $request, $id)
   {
       $category = blogcategory::find($id);
       $category->name = $request->name;
       $category->save();

       return back();


   }
   public function deleteBlogCategory($id)
   {
       $category = blogcategory::find($id);
       $category->delete();
       return back();
   }
}
