<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\File\File;
session_start();

class SuperAdminController extends Controller
{
    public function index()
    {
        $this->authCheck();
    	return view('admin.pages.deshboard');
    	
    	//function for Super Admin

    }

     public function logout()
    {
        Session::put('admin_name','');
        Session::put('admin_id','');
        Session::put('message','You are successfully Logout !');
        return Redirect::to('/admin');
        
        //function for  Admin logout

    }
    public function authCheck()
    {
        $admin_id=Session::get('admin_id');
        if ($admin_id ==NULL)
         {
             return Redirect::to('/admin')->send();
        }
    }

     public function add_new_admin()
    {
    	//return view('admin.pages.add_new_admin');
        
    }
    public function save_new_admin(Request $request)
    {
    	/*
    	dd($request->all());
    	browser a data dekhar jonno ai code gulo use kora hoi
    	*/

    	//$data = array();
    	//$data['admin_name'] = $request->admin_name;
    	//$data['admin_email'] = $request->admin_email;
    	//$data['Admin_password'] = $request->Admin_password;
    	//$data['access_label'] = $request->access_label;
    	//$data['publication_status'] = $request->publication_status;
    	//$data['created_at'] = Carbon::now();

    	//DB::table('admin')
         //         ->insert($data);
        //Session::put('message','Save admin information successfully !');
      //  return Redirect::to('/add-new-admin');
    	  
    }
     /*public function manage_new_admin()
    {
        $all_admin = DB::table('admin')
                         ->get();
        return view('admin.pages.manage_new_admin')
                         ->with('all_admin',$all_admin);
        
          // function for manage category

    }
     public function unpublish_admin($admin_id)
    {
        DB::table('admin')
             ->where('admin_id',$admin_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-new-admin');
       

    }
    public function publish_admin($admin_id)
    {
        DB::table('admin')
             ->where('admin_id',$admin_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-new-admin');
       

    }
    public function delete_admin($admin_id)
    {
        DB::table('admin')
             ->where('admin_id',$admin_id)
             ->delete();
              return Redirect::to('/manage-new-admin');
       

    }
    public function edit_admin($admin_id)
    {
       $admin_info = DB::table('admin')
             ->where('admin_id',$admin_id)
             ->first();
              return view('admin.pages.edit_admin')
                         ->with('admin_info', $admin_info);
    }
     public function update_admin(Request $request)
    {
        $data = array();
        $admin_id=$request->admin_id;
        $data['admin_name'] = $request->admin_name;
        $data['admin_email'] = $request->admin_email;
        $data['Admin_password'] = $request->Admin_password;
        $data['access_label'] = $request->access_label;
        $data['updated_at'] = Carbon::now();
        DB::table('admin')
                  ->where('admin_id',$admin_id)
                  ->update($data);

        return Redirect::to('/manage-new-admin');

    }*/
    public function add_category()
    {
        return view('admin.pages.add_category');
        
          // function for Add category

    }
     public function save_category(Request $request)
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

        DB::table('tbl_category')
                  ->insert($data);
        Session::put('message','Save category information successfully !');
        return Redirect::to('/add-category');
          // function for save category
    }

    public function manage_category()
    {
        $all_category = DB::table('tbl_category')
                         ->get();
        return view('admin.pages.manage_category')
                         ->with('all_category',$all_category);
        
          // function for manage category

    }
     public function unpublish_category($category_id)
    {
        DB::table('tbl_category')
             ->where('category_id',$category_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-category');
       

    }
    public function publish_category($category_id)
    {
        DB::table('tbl_category')
             ->where('category_id',$category_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-category');
       

    }
    public function delete_category($category_id)
    {
        DB::table('tbl_category')
             ->where('category_id',$category_id)
             ->delete();
              return Redirect::to('/manage-category');
       

    }
    public function edit_category($category_id)
    {
       $category_info = DB::table('tbl_category')
             ->where('category_id',$category_id)
             ->first();
              return view('admin.pages.edit_category')
                         ->with('category_info', $category_info);
    }
     public function update_category(Request $request)
    {
        $data = array();
        $category_id=$request->category_id;
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['updated_at'] = Carbon::now();
        DB::table('tbl_category')
                  ->where('category_id',$category_id)
                  ->update($data);

        return Redirect::to('/manage-category');

    }
}
