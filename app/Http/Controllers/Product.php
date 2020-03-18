<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\File\File;
session_start();

class Product extends Controller
{
    public function add_product()
    {
     /*   $category_info=DB::table('tbl_category')
                                ->get();*/
       /* $manufacturer_info = DB::table('tbl_manufacturer')
                         ->get();*/
        return view('admin.pages.add_product')
            /* ->with('category_info',$category_info)
             ->with('manufacturer_info', $manufacturer_info); */    
    }
    public function save_product(Request $request)
    {
        
        //dd($request->all());
        //browser a data dekhar jonno ai code gulo use kora hoi
     /*  echo'<pre>';
       print_r($_POST);
        print_r($_FILES);
        exit();
    */
        $data = array();
        $data['product_name'] = $request->product_name;
      /*  $data['category_id'] = $request->category_id;
        $data['manufacturer_id'] = $request->manufacturer_id;*/
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_qty'] = $request->product_qty;
        $data['product_price'] = $request->product_price;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('product_img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/product_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/product_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['product_img'] = $image_url;
            DB::table('tbl_product')
                  ->insert($data);
        }
       
        Session::put('message','Save product information successfully !');
        return Redirect::to('/add-product');    
    }
     public function manage_product()
    {
        $all_product = DB::table('tbl_product')
                         ->get();
        return view('admin.pages.manage_product')
                         ->with('all_product',$all_product);
        
       

    }
     public function unpublish_product($product_id)
    {
        DB::table('tbl_product')
             ->where('product_id',$product_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-product');
       

    }
    public function publish_product($product_id)
    {
        DB::table('tbl_product')
             ->where('product_id',$product_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-product');
       

    }
    public function delete_product($product_id)
    {
        DB::table('tbl_product')
             ->where('product_id',$product_id)
             ->delete();
              return Redirect::to('/manage-product');
       

    }
    public function edit_product($product_id)
    {
        $product_info = DB::table('tbl_product')
             ->where('product_id',$product_id)
             ->first();


             

              return view('admin.pages.edit_product')
                         ->with('product_info', $product_info);
                        
    }
   public function update_product(Request $request)
   {
        $data = array();
        $product_id=$request->product_id;
        $data['product_name'] = $request->product_name;
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_qty'] = $request->product_qty;
        $data['product_price'] = $request->product_price;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('product_img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['product_img'] = $request->old_product_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/product_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/product_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['product_img'] = $image_url;
            DB::table('tbl_product')
                  ->where('product_id',$product_id)
                  ->update($data);
                  unlink($request->old_product_img);
                  return Redirect::to('/manage-product');
        }
      }
      else{
        DB::table('tbl_product')
                  ->where('product_id',$product_id)
                  ->update($data);

        
        return Redirect::to('/manage-product');

        }

       


   }
    public function product_details($product_id)
    {
    	$product_info = DB::table('tbl_product')
                   ->where('product_id',$product_id)
                   ->first();



        $product_details = view('pages.product_details')
                    ->with('product_info',$product_info);
         return view('home')
                  ->with('product_details',$product_details);
    }
     public function search_product(Request $request)
    {
      $search_text = $request->search_text;
      $search_product=DB::table('tbl_product')
          ->where('publication_status',1)
          ->where('product_name','like','%'.$search_text.'%')
          ->orderBy('product_id','desc')
          ->get();
         /* echo'<pre>';
          print_r( $search_product);
          exit();*/

           $product = view('pages.search_product')
                        ->with('search_product' ,$search_product);
                        return view('home')
                       ->with('product',$product);

    }

     public function search_mproduct(Request $request)
    {
      $search_text = $request->search_text;
      $search_mmproduct=DB::table('mens_product')
          ->where('publication_status',1)
          ->where('mproduct_name','like','%'.$search_text.'%')
          ->orderBy('mproduct_id','desc')
          ->get();
         /* echo'<pre>';
          print_r( $search_mmproduct);
          exit();

*/

           $mproduct = view('mens.search_mmproduct')
                        ->with('search_mmproduct' ,$search_mmproduct);
                        return view('home')
                       ->with('mproduct',$mproduct);

    }

     public function add_mens_product()
    {
        $category_info=DB::table('mens_category')
                                ->get();
       
        return view('admin.pages.add_mens_product')
             ->with('category_info',$category_info);
                 
    }
    public function save_mens_product(Request $request)
    {
        
        //dd($request->all());
        //browser a data dekhar jonno ai code gulo use kora hoi
     /*  echo'<pre>';
       print_r($_POST);
        print_r($_FILES);
        exit();
    */
        $data = array();
        $data['mproduct_name'] = $request->mproduct_name;
        $data['category_id'] = $request->category_id;
        $data['mproduct_short_description'] = $request->mproduct_short_description;
        $data['mproduct_long_description'] = $request->mproduct_long_description;
        $data['mproduct_qty'] = $request->mproduct_qty;
        $data['mproduct_price'] = $request->mproduct_price;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('mproduct_img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/mens_product_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/mens_product_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['mproduct_img'] = $image_url;
            DB::table('mens_product')
                  ->insert($data);
        }
       
        Session::put('message','Save product information successfully !');
        return Redirect::to('/add-mens-product');    
    }
     public function manage_mens_product()
    {
        $all_mproduct = DB::table('mens_product')
                         ->get();
        return view('admin.pages.manage_mens_product')
                         ->with('all_mproduct',$all_mproduct);
        
       

    }
     public function unpublish_mens_product($mproduct_id)
    {
        DB::table('mens_product')
             ->where('mproduct_id',$mproduct_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-mens-product');
       

    }
    public function publish_mens_product($mproduct_id)
    {
        DB::table('mens_product')
             ->where('mproduct_id',$mproduct_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-mens-product');
       

    }
    public function delete_mens_product($mproduct_id)
    {
        DB::table('mens_product')
             ->where('mproduct_id',$mproduct_id)
             ->delete();
              return Redirect::to('/manage-mens-product');
       

    }
    public function edit_mens_product($mproduct_id)
    {
        $mproduct_info = DB::table('mens_product')
             ->where('mproduct_id',$mproduct_id)
             ->first();


              $category_info = DB::table('mens_category')
                         ->get();

              return view('admin.pages.edit_mens_product')
                         ->with('mproduct_info', $mproduct_info)
                         ->with('category_info', $category_info);
                        
    }
    public function product_mens_details($mproduct_id)
    {
        $mproduct_info = DB::table('mens_product')
                   ->where('mproduct_id',$mproduct_id)
                   ->first();



        $mproduct_details = view('mens.product_mens_details')
                    ->with('mproduct_info',$mproduct_info);
         return view('home')
                  ->with('mproduct_details',$mproduct_details);
    }

    public function update_mens_product(Request $request)
    {
        $data = array();
        $mproduct_id=$request->mproduct_id;
        $data['mproduct_name'] = $request->mproduct_name;
        $data['category_id'] = $request->category_id;
        $data['mproduct_short_description'] = $request->mproduct_short_description;
        $data['mproduct_long_description'] = $request->mproduct_long_description;
        $data['mproduct_qty'] = $request->mproduct_qty;
        $data['mproduct_price'] = $request->mproduct_price;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('mproduct_img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['mproduct_img'] = $request->old_mproduct_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/mens_product_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/mens_product_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['mproduct_img'] = $image_url;
            DB::table('mens_product')
                  ->where('mproduct_id',$mproduct_id)
                  ->update($data);
                  unlink($request->old_mproduct_img);
                  return Redirect::to('/manage-mens-product');
        }
      }
      else{
        DB::table('mens_product')
                  ->where('mproduct_id',$mproduct_id)
                  ->update($data);

        
        return Redirect::to('/manage-mens-product');

        }

       
    
    }

    public function search_wproduct(Request $request)
    {
      $search_text = $request->search_text;
      $search_wproduct=DB::table('womens_product')
          ->where('publication_status',1)
          ->where('wproduct_name','like','%'.$search_text.'%')
          ->orderBy('wproduct_id','desc')
          ->get();
         /* echo'<pre>';
          print_r( $search_mmproduct);
          exit();

*/

           $wproduct = view('womens.search_wproduct')
                        ->with('search_wproduct' ,$search_wproduct);
                        return view('home')
                       ->with('wproduct',$wproduct);

    }

    public function add_womens_product()
    {
        $wcategory_info=DB::table('womens_category')
                                ->get();
       
        return view('admin.pages.add_womens_product')
             ->with('wcategory_info',$wcategory_info);
                 
    }
    public function save_womens_product(Request $request)
    {
        
        //dd($request->all());
        //browser a data dekhar jonno ai code gulo use kora hoi
     /*  echo'<pre>';
       print_r($_POST);
        print_r($_FILES);
        exit();
    */
        $data = array();
        $data['wproduct_name'] = $request->wproduct_name;
        $data['wcategory_id'] = $request->wcategory_id;
        $data['wproduct_short_description'] = $request->wproduct_short_description;
        $data['wproduct_long_description'] = $request->wproduct_long_description;
        $data['wproduct_qty'] = $request->wproduct_qty;
        $data['wproduct_price'] = $request->wproduct_price;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('wproduct_img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/womens_product_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/womens_product_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['wproduct_img'] = $image_url;
            DB::table('womens_product')
                  ->insert($data);
        }
       
        Session::put('message','Save product information successfully !');
        return Redirect::to('/add-womens-product');    
    }
     public function manage_womens_product()
    {
        $all_wproduct = DB::table('womens_product')
                         ->get();
        return view('admin.pages.manage_womens_product')
                         ->with('all_wproduct',$all_wproduct);
        
       

    }
     public function unpublish_womens_product($wproduct_id)
    {
        DB::table('womens_product')
             ->where('wproduct_id',$wproduct_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-womens-product');
       

    }
    public function publish_womens_product($wproduct_id)
    {
        DB::table('womens_product')
             ->where('wproduct_id',$wproduct_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-womens-product');
       

    }
    public function delete_womens_product($wproduct_id)
    {
        DB::table('womens_product')
             ->where('wproduct_id',$wproduct_id)
             ->delete();
              return Redirect::to('/manage-womens-product');
       

    }
    public function edit_womens_product($wproduct_id)
    {
        $wproduct_info = DB::table('womens_product')
             ->where('wproduct_id',$wproduct_id)
             ->first();


              $wcategory_info = DB::table('womens_category')
                         ->get();

              return view('admin.pages.edit_womens_product')
                         ->with('wproduct_info', $wproduct_info)
                         ->with('wcategory_info', $wcategory_info);
                        
    }
     public function product_womens_details($wproduct_id)
    {
        $wproduct_info = DB::table('womens_product')
                   ->where('wproduct_id',$wproduct_id)
                   ->first();



        $wproduct_details = view('womens.product_womens_details')
                    ->with('wproduct_info',$wproduct_info);
         return view('home')
                  ->with('wproduct_details',$wproduct_details);
    }


     public function update_womens_product(Request $request)
    {
        $data = array();
        $wproduct_id=$request->wproduct_id;
        $data['wproduct_name'] = $request->wproduct_name;
        $data['wcategory_id'] = $request->wcategory_id;
        $data['wproduct_short_description'] = $request->wproduct_short_description;
        $data['wproduct_long_description'] = $request->wproduct_long_description;
        $data['wproduct_qty'] = $request->wproduct_qty;
        $data['wproduct_price'] = $request->wproduct_price;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('wproduct_img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['wproduct_img'] = $request->old_wproduct_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/womens_product_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/womens_product_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['wproduct_img'] = $image_url;
            DB::table('womens_product')
                  ->where('wproduct_id',$wproduct_id)
                  ->update($data);
                  unlink($request->old_wproduct_img);
                  return Redirect::to('/manage-womens-product');
        }
      }
      else{
        DB::table('womens_product')
                  ->where('wproduct_id',$wproduct_id)
                  ->update($data);

        
        return Redirect::to('/manage-womens-product');

        }

       
    
    }

        public function search_eproduct(Request $request)
    {
      $search_text = $request->search_text;
      $search_eproduct=DB::table('tbl_electronics')
          ->where('publication_status',1)
          ->where('eproduct_name','like','%'.$search_text.'%')
          ->orderBy('eproduct_id','desc')
          ->get();
         /* echo'<pre>';
          print_r( $search_mmproduct);
          exit();

*/

           $eproduct = view('electronics.search_eproduct')
                        ->with('search_eproduct' ,$search_eproduct);
                        return view('home')
                       ->with('eproduct',$eproduct);

    }

    public function add_e_product()
    {
        
       
        return view('admin.pages.add_e_product');
    
                 
    }
    public function save_e_product(Request $request)
    {
        
        //dd($request->all());
        //browser a data dekhar jonno ai code gulo use kora hoi
     /*  echo'<pre>';
       print_r($_POST);
        print_r($_FILES);
        exit();
    */
        $data = array();
        $data['eproduct_name'] = $request->eproduct_name;
        $data['eproduct_short_description'] = $request->eproduct_short_description;
        $data['eproduct_long_description'] = $request->eproduct_long_description;
        $data['eproduct_qty'] = $request->eproduct_qty;
        $data['eproduct_price'] = $request->eproduct_price;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('eproduct_img'); //form fild name
        $filename = $files->getClientOriginalName();
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/electronics_product_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/electronics_product_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['eproduct_img'] = $image_url;
            DB::table('tbl_electronics')
                  ->insert($data);
        }
       
        Session::put('message','Save product information successfully !');
        return Redirect::to('/add-e-product');    
    }
     public function manage_e_product()
    {
        $all_eproduct = DB::table('tbl_electronics')
                         ->get();
        return view('admin.pages.manage_e_product')
                         ->with('all_eproduct',$all_eproduct);
        
       

    }
     public function unpublish_e_product($eproduct_id)
    {
        DB::table('tbl_electronics')
             ->where('eproduct_id',$eproduct_id)
             ->update(['publication_status'=>0]);
              return Redirect::to('/manage-e-product');
       

    }
    public function publish_e_product($eproduct_id)
    {
        DB::table('tbl_electronics')
             ->where('eproduct_id',$eproduct_id)
             ->update(['publication_status'=>1]);
              return Redirect::to('/manage-e-product');
       

    }
    public function delete_e_product($eproduct_id)
    {
        DB::table('tbl_electronics')
             ->where('eproduct_id',$eproduct_id)
             ->delete();
              return Redirect::to('/manage-e-product');
       

    }
    public function edit_e_product($eproduct_id)
    {
        $eproduct_info = DB::table('tbl_electronics')
             ->where('eproduct_id',$eproduct_id)
             ->first();



              return view('admin.pages.edit_e_product')
                         ->with('eproduct_info', $eproduct_info);
                        
                        
    }


    public function update_e_product(Request $request)
    {
        $data = array();
        $eproduct_id=$request->eproduct_id;
        $data['eproduct_name'] = $request->eproduct_name;
        $data['eproduct_short_description'] = $request->eproduct_short_description;
        $data['eproduct_long_description'] = $request->eproduct_long_description;
        $data['eproduct_qty'] = $request->eproduct_qty;
        $data['eproduct_price'] = $request->eproduct_price;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = Carbon::now();

        //image uploading code s

        $files = $request->file('eproduct_img'); //form fild name
        
        if ( $files)
         {
        $filename = $files->getClientOriginalName();
        $data['eproduct_img'] = $request->old_eproduct_img;
        $extension = $files->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url = 'public/electronics_product_image/'.$picture; //for DB table
        $destinationPath = base_path() .'/public/electronics_product_image'; //for server image upload
        $success = $files->move($destinationPath,$picture);

        if ($success) {
            $data['eproduct_img'] = $image_url;
            DB::table('tbl_electronics')
                  ->where('eproduct_id',$eproduct_id)
                  ->update($data);
                  unlink($request->old_eproduct_img);
                  return Redirect::to('/manage-e-product');
        }
      }
      else{
        DB::table('tbl_electronics')
                  ->where('eproduct_id',$eproduct_id)
                  ->update($data);

        
        return Redirect::to('/manage-e-product');

        }

       
    
    }
     public function peoduct_e_details($eproduct_id)
    {
        $eproduct_info = DB::table('tbl_electronics')
                   ->where('eproduct_id',$eproduct_id)
                   ->first();



        $eproduct_details = view('electronics.peoduct_e_details')
                    ->with('eproduct_info',$eproduct_info);
         return view('home')
                  ->with('eproduct_details',$eproduct_details);
    }
     
}
