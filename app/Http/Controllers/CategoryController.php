<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\File\File;

class CategoryController extends Controller
{
     public function add_mens_category()
    {
        return view('admin.pages.add_mens_category');
        

    }
     public function save_mens_category(Request $request)
    {
        /*
        dd($request->all());
        browser a data dekhar jonno ai code gulo use kora hoi
        */

        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        DB::table('mens_category')
                  ->insert($data);
        Session::put('message','Save category information successfully !');
        return Redirect::to('/add-mens-category');
          // function for save category
    }

    public function manage_mens_category()
    {
        $all_category = DB::table('mens_category')
                         ->get();
        return view('admin.pages.manage_mens_category')
                         ->with('all_category',$all_category);
        
          // function for manage category

    }
     public function unpublish_mens_category($category_id)
    {
        DB::table('mens_category')
             ->where('category_id',$category_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-mens-category');
       

    }
    public function publish_mens_category($category_id)
    {
        DB::table('mens_category')
             ->where('category_id',$category_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-mens-category');
       

    }
    public function delete_mens_category($category_id)
    {
        DB::table('mens_category')
             ->where('category_id',$category_id)
             ->delete();
              return Redirect::to('/manage-mens-category');
       

    }
    public function edit_mens_category($category_id)
    {
       $category_info = DB::table('mens_category')
             ->where('category_id',$category_id)
             ->first();
              return view('admin.pages.edit_mens_category')
                         ->with('category_info', $category_info);
    }
     public function update_mens_category(Request $request)
    {
        $data = array();
        $category_id=$request->category_id;
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['updated_at'] = Carbon::now();
        DB::table('mens_category')
                  ->where('category_id',$category_id)
                  ->update($data);

        return Redirect::to('/update-mens-category');

    }

    public function show_mcategory($category_id)
    {
                $category_mproduct = DB::table('mens_product')
                         ->where('category_id' ,$category_id)
                         ->where('publication_status',1)
                         ->get();

        return view('mens.show_category')
                         ->with('category_mproduct',$category_mproduct);
    }

    public function add_womens_category()
    {
        return view('admin.pages.add_womens_category');
        
          // function for Add category

    }
     public function save_womens_category(Request $request)
    {
        /*
        dd($request->all());
        browser a data dekhar jonno ai code gulo use kora hoi
        */

        $data = array();
        $data['wcategory_name'] = $request->wcategory_name;
        $data['wcategory_description'] = $request->wcategory_description;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        DB::table('womens_category')
                  ->insert($data);
        Session::put('message','Save category information successfully !');
        return Redirect::to('/add-womens-category');
          // function for save category
    }

    public function manage_womens_category()
    {
        $all_wcategory = DB::table('womens_category')
                         ->get();
        return view('admin.pages.manage_womens_category')
                         ->with('all_wcategory',$all_wcategory);
        
          // function for manage category

    }
     public function unpublish_womens_category($wcategory_id)
    {
        DB::table('womens_category')
             ->where('wcategory_id',$wcategory_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-womens-category');
       

    }
    public function publish_womens_category($wcategory_id)
    {
        DB::table('womens_category')
             ->where('wcategory_id',$wcategory_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-womens-category');
       

    }
    public function delete_womens_category($wcategory_id)
    {
        DB::table('womens_category')
             ->where('wcategory_id',$wcategory_id)
             ->delete();
              return Redirect::to('/manage-womens-category');
       

    }
    public function edit_womens_category($wcategory_id)
    {
       $wcategory_info = DB::table('womens_category')
             ->where('wcategory_id',$wcategory_id)
             ->first();
              return view('admin.pages.edit_womens_category')
                         ->with('wcategory_info', $wcategory_info);
    }
     public function update_womens_category(Request $request)
    {
        $data = array();
        $wcategory_id=$request->wcategory_id;
        $data['wcategory_name'] = $request->wcategory_name;
        $data['wcategory_description'] = $request->wcategory_description;
        $data['updated_at'] = Carbon::now();
        DB::table('womens_category')
                  ->where('wcategory_id',$wcategory_id)
                  ->update($data);

        return Redirect::to('/manage-womens-category');

    }
    public function show_wcategory($wcategory_id)
    {
                $category_wproduct = DB::table('womens_product')
                         ->where('wcategory_id' ,$wcategory_id)
                         ->where('publication_status',1)
                         ->get();

        return view('womens.show_wcategory')
                         ->with('category_wproduct',$category_wproduct);
    }
}
