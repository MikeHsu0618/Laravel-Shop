<?php

namespace App\Http\Controllers\Controls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return  view('controls.orders.index');
    }


    public function edit()
    {
        return  view('controls.orders.edit');
    }


    public function update(Request $request, $id)
    {
        return redirect()->route('controls.orders.index');

    }


    public function destroy($id)
    {
        return redirect()->route('controls.orders.index');

    }
}
