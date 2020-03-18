<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use PDF;

class CustomerController extends Controller
{
    
     public function view_customer()
    {
        $all_customer = DB::table('tbl_customer')
                         ->get();
         return view('admin.pages.view_customer')
             ->with('all_customer',$all_customer);
        
    }
    public function delete_customer($coustomer_id)
    {
        DB::table('tbl_customer')
             ->where('coustomer_id',$coustomer_id)
             ->delete();
              return Redirect::to('/view-customer');
       

    }
    public function customer_profile()
    {
        
        return view('customer_profile');
    }
    public function edit_profile()
    {
        if(Session::get('coustomer_id') == ''){
         return Redirect::to('/login');
        }
        $coustomer_id=Session::get('coustomer_id');
        $customer_info=DB::table('tbl_customer')
                      ->where('coustomer_id',$coustomer_id)
                      ->first();
        return view('edit_profile')
                   ->with('customer_info',$customer_info);
    }
    public function update_profile(Request $request)
    {
        if(Session::get('coustomer_id') == ''){
         return Redirect::to('/login');
        }
        $data = array();
        $data ['customer_name'] = $request->customer_name;
        $data  ['email_address'] = $request->email_address;
        $data  ['mobile_number'] = $request->mobile_number;
        $data  ['address'] = $request->address;
        $data  ['city'] = $request->city;
        $data  ['country'] = $request->country;
        $data  ['zip_code'] = $request->zip_code;

        DB::table('tbl_customer')
               ->where('coustomer_id',Session::get('coustomer_id'))
               ->update($data);

       return Redirect::to('/customer-profile');
        

    }
    //PDF function Start

    function get_customer_data()
    {
     $all_customer = DB::table('tbl_customer')
         ->limit(10)
         ->get();
     return $all_customer;
    }

    public function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    public function convert_customer_data_to_html()
    {
     $all_customer = $this->get_customer_data();
     $output = '
     <h3 align="center">Customer Information</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Customer No :</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Customer Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Customer Email</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Mobile No</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Country</th>
    <th style="border: 1px solid; padding:12px;" width="20%">City</th>
   </tr>
     ';  
     foreach($all_customer as $v_customer)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$v_customer->coustomer_id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$v_customer->customer_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$v_customer->email_address.'</td>
       <td style="border: 1px solid; padding:12px;">'.$v_customer->mobile_number.'</td>
       <td style="border: 1px solid; padding:12px;">'.$v_customer->country.'</td>
       <td style="border: 1px solid; padding:12px;">'.$v_customer->city.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }

    //Pdf Function End
}
