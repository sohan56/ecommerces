<?php

namespace App\Http\Controllers;

use App\Order;
use Session;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::get('admin_id') == '') {
            return redirect('admin');
        }
        $orders = Order::select('*', 'orders.id AS id')
                            ->join('tbl_customer', 'coustomer_id', 'customer_id')
                            ->orderBy('orders.id', 'DESC')
                            ->get();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $order = Order::select('*', 'orders.id AS id', 'orders.created_at AS created_at')
                            ->join('tbl_customer', 'coustomer_id', 'customer_id')
                            ->where('orders.id', $id)
                            ->first();

        $pdf = PDF::loadView('admin.orders.show', compact('order'));
        // return $pdf->stream();
        // return $pdf->download('invoice.pdf');

        return view('admin.orders.show', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function status($status = '', $id)
    {
        $order = Order::find($id);
        if($status == 'paid'){
            $order->status = 1;
        }elseif($status == 'cancel'){
            $order->status = 2;
        }
        $order->save();
        return back()->with('success', _lang('info has successfully update.'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function export($type)
    {
        $orders = Order::select('orders.id AS id', 'customer_name', 'total_amount As amount', 'payment_type', 'status')
                            ->join('tbl_customer', 'coustomer_id', 'customer_id')
                            ->orderBy('orders.id', 'DESC')
                            ->get();
        $data = array();
        foreach ($orders as $key => $order) {
            $data[$key]['id'] = $order->id;
            $data[$key]['customer_name'] = $order->customer_name;
            $data[$key]['amount'] = $order->amount;
            $data[$key]['payment_type'] = $order->payment_type;
            if($order->status == 0){
                $data[$key]['status'] = 'Unpaid';
            }elseif ($order->status == 1) {
                $data[$key]['status'] = 'Paid';
            }elseif ($order->status == 2) {
                $data[$key]['status'] = 'Cancel';
            }
        }

        return (new FastExcel(collect($data)))->download('orders.xlsx');
    }
}
