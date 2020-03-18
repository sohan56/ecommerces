<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use Cart;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
use Symfony\Component\HttpFoundation\File\File;
use Sentinel;
use Reminder;
use App\User;


class CheckoutController extends Controller
{
	public function show_cart()
	{

      return view('pages.show_cart');
  }
     
    public function add_to_cart($product_id)
    {
    	$productInfo = DB::table('tbl_product')
                ->select('*')
                ->where('product_id',$product_id)
                ->first();



         $data =array();
         $data['id'] = $productInfo->product_id;
         $data['name'] = $productInfo->product_name;
         $data['type'] = 'product';
         $data['qty'] = 1;
         $data['price'] = $productInfo->product_price;
         $data['weight'] = 0;
         $data['options']['image'] = $productInfo->product_img;

         Cart::add($data);
        return Redirect::to('/show-cart');

    }
    public function add_to_mcart($mproduct_id)
    {
      $productInfo = DB::table('mens_product')
                ->select('*')
                ->where('mproduct_id',$mproduct_id)
                ->first();



         $data =array();
         $data['id'] = $productInfo->mproduct_id;
         $data['name'] = $productInfo->mproduct_name;
         $data['type'] = 'mens';
         $data['qty'] = 1;
         $data['price'] = $productInfo->mproduct_price;
         $data['weight'] = 0;
         $data['options']['image'] = $productInfo->mproduct_img;

         Cart::add($data);
           return Redirect::to('/show-cart');

    }
    public function add_to_wcart($wproduct_id)
    {
      $productInfo = DB::table('womens_product')
                ->select('*')
                ->where('wproduct_id',$wproduct_id)
                ->first();



         $data =array();
         $data['id'] = $productInfo->wproduct_id;
         $data['name'] = $productInfo->wproduct_name;
         $data['type'] = 'womens';
         $data['qty'] = 1;
         $data['price'] = $productInfo->wproduct_price;
         $data['weight'] = 0;
         $data['options']['image'] = $productInfo->wproduct_img;

         Cart::add($data);
           return Redirect::to('/show-cart');

    }
    public function add_to_ecart($eproduct_id)
    {
      
        $productInfo = DB::table('tbl_electronics')
                        ->select('*')
                        ->where('eproduct_id',$eproduct_id)
                        ->first();

         $data =array();
         $data['id'] = $productInfo->eproduct_id;
         $data['name'] = $productInfo->eproduct_name;
         $data['type'] = 'electronics';
         $data['qty'] = 1;
         $data['price'] = $productInfo->eproduct_price;
         $data['weight'] = 0;
         $data['options']['image'] = $productInfo->eproduct_img;

         Cart::add($data);
           return Redirect::to('/show-cart');

    }
    public function remove_to_cart($rowId)
    {
      Cart::remove($rowId);
      return Redirect::to('/show-cart');

    }
    public function update_cart_qty(Request $request)
    {
        $qty = $request->qty;
        $rowId = $request->rowId;
        Cart::update($rowId, $qty);
        return Redirect::to('/show-cart');

    }
    public function empty_cart()
    {
        Cart::destroy();
        return Redirect::to('/');
    }
    public function checkout()
    {
        if(Session::get('coustomer_id') != ''){
         return Redirect::to('information');
        }
        return view('pages.checkout');
    }
    public function register_customer(Request $request)
    {
         $validatedData = $request->validate([
        'email_address' => 'required|unique:tbl_customer|max:255',
        'password' => 'required',
    ]);
        $data =array();
        $data ['customer_name'] = $request->customer_name;
        $data  ['email_address'] = $request->email_address;
        $data  ['password'] = $request->password;
        
      $customer_id = DB::table('tbl_customer')
                 ->insertGetId($data);

                 Session::put('coustomer_id',$customer_id);
                    Session::put('customer_name',$request->customer_name);

                  return back();


    }

     public function registration()
    {
        return view('pages.registration');
        

    }

     public function save_registretion(Request $request)
    {

         $validatedData = $request->validate([
        'email_address' => 'required|unique:tbl_customer|max:255',
        'password' => 'required',
    ]);
        $data =array();
        $data ['customer_name'] = $request->customer_name;
        $data  ['email_address'] = $request->email_address;
        $data  ['password'] = $request->password;
        
      $customer_id = DB::table('tbl_customer')
                 ->insertGetId($data);

                 Session::put('coustomer_id',$customer_id);
                    Session::put('customer_name',$request->customer_name);

                 // return back();
                   return Redirect::to('/');

    }

     public function login()
    {
        return view('pages.customer_login');
        

    }
    public function customer_login(Request $request)
    {
       
        
        if(Session::get('coustomer_id') != ''){
         return Redirect::to('/');
        }
        $email_address = $request->email_address;
        $password = $request->password;

       $result = DB::table('tbl_customer')
                ->select('*')
                ->where('email_address',$email_address)
                ->where('password',$password)
                ->first();

                if ($result) {

                    Session::put('coustomer_id',$result->coustomer_id);
                    Session::put('customer_name',$result->customer_name);
                    return Redirect::to('/');
                    return back();
                }
                else{

                    Session::put('exception','Your User Email Or Password Invalide !');
                    return Redirect::to('/login');
                }
    }
     public function customer_logins(Request $request)
    {
       
        
        if(Session::get('coustomer_id') != ''){
         return Redirect::to('/');
        }
        $email_address = $request->email_address;
        $password = $request->password;

       $result = DB::table('tbl_customer')
                ->select('*')
                ->where('email_address',$email_address)
                ->where('password',$password)
                ->first();

                if ($result) {

                    Session::put('coustomer_id',$result->coustomer_id);
                    Session::put('customer_name',$result->customer_name);
                    return Redirect::to('/checkout');
                    return back();
                }
                else{

                    Session::put('exception','Your User Email Or Password Invalide !');
                    return Redirect::to('/checkout');
                }
    }

    public function customer_logout()
    {
        if(Session::get('coustomer_id') == ''){
         return Redirect::to('/login');
        }
         Session::put('coustomer_id','');
         Session::put('customer_name','');

         return Redirect::to('/');
    }

   

    public function billing_info()
    {

        if(Session::get('coustomer_id') == ''){
         return Redirect::to('/login');
        }
        $coustomer_id=Session::get('coustomer_id');
        $customerinfo=DB::table('tbl_customer')
                      ->where('coustomer_id',$coustomer_id)
                      ->first();
        return view('pages.billing')
                   ->with('customerinfo',$customerinfo);
    }
    public function update_billing(Request $request)
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

       return Redirect::to('/payment');
        

    }
    public function payment()
    {
        if(Session::get('coustomer_id') == ''){
         return Redirect::to('/login');
        }
         return view('pages.payment');
    }

    public function save_order(Request $request)
    {
        if(Session::get('coustomer_id') == ''){
         return Redirect::to('/login');
        }
        $order = new Order();
        $order->customer_id = Session::get('coustomer_id');
        $order->sub_total = Cart::subtotal();
        $order->tax = Cart::tax();
        $order->total_amount = Cart::total();
        $order->payment_type = $request->payment_type;
        $order->save();

        foreach (Cart::content() as $key => $data) {
            $order_item = new OrderItem();
            $order_item->order_id = $order->id;
            $order_item->product_id = $data->id;
            $order_item->qty = $data->qty;
            $order_item->product_name = $data->name;
            $order_item->price = $data->price;
            $order_item->save();
        }
        Cart::destroy();
        //order email
        $this->send_mail();
        return redirect('/')->with('success', _lang('your order successfully done.'));
    }

    public function payment_with_card(Request $request)
    {
        if(Session::get('coustomer_id') == ''){
         return Redirect::to('/login');
        }
        
        Stripe::setApiKey(get_option('stripe_secret_key'));
 
        $token = request('stripeToken');
 
        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => get_option('stripe_currency'),
            'description' => 'Payment',
            'source' => $token,
        ]);

        $order = new Order();
        $order->customer_id = Session::get('coustomer_id');
        $order->sub_total = Cart::subtotal();
        $order->tax = Cart::tax();
        $order->total_amount = Cart::total();
        $order->payment_type = 'Card';
        $order->status = 1;
        $order->save();

        foreach (Cart::content() as $key => $data) {
            $order_item = new OrderItem();
            $order_item->order_id = $order->id;
            $order_item->product_id = $data->id;
            $order_item->qty = $data->qty;
            $order_item->product_name = $data->name;
            $order_item->price = $data->price;
            $order_item->save();
        }
        
        Cart::destroy();
        //order email
        $this->send_mail();
        return redirect('/')->with('success', _lang('payment successfully done.'));
    }

    public function send_mail()
    {
        $data = array(
            'name' =>'Shopify',
            'email' => 'shopifys2019@gmail.com',
        );
        Mail::send('pages.email',$data,function($message)use ($data){
            $message->to('shopifys2019@gmail.com');
            $message->subject('You got an order.');
        });
    }
}
