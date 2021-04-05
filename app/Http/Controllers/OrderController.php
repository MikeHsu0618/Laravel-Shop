<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request){
        $current_user = $request->user();
        $orders = $current_user->orders()->orderBy('id', 'desc')->get();
        return view('orders.index',[
            'orders' => $orders
        ]);
    }

    public function show($id , Request $request){
        $current_user = $request->user();
        $order = $current_user->orders()->where('order_number', $id)->first();
        return $order?view('orders.show',['order'=>$order]):
            redirect()->route('orders.index')->withErrors("沒有這訂單");
    }
}
