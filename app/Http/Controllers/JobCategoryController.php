<?php

namespace App\Http\Controllers;

use App\categories;
use App\JobCategory;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function category()
    {
        return view('category');
    }

    public function addCategory(Request $request)
    {
        $category = new categories();
        $category->name = $request->name;
        $category->save();

        return back();

    }


    public function allJobCategory()
    {
        $categories = categories::latest()->get();
        return view('all_job_categories',compact('categories'));
    }

    public function vendorDetails($name, $id)
    {

        $user = User::find($id);
        $categories = categories::all();  //showing the booking page

        return view('category_page', compact('categories','user'));
    }



    public function viewAllCategory()
    {
        $categories = categories::latest()->paginate(9); //this is all registered categories by the vendors
        return view('view_all_category', compact('categories'));
    }

    public function jobCategoriesDetail($id)
    {
        $category = categories::find($id);
        $profiles = Profile::where('jobcategory_id', $id)->latest()->with('user')->get();
        return view('job_categories_detail',compact('category','profiles'));
    }


}
