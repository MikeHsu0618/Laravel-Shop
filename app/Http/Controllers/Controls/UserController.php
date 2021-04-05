<?php

namespace App\Http\Controllers\Controls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return  view('controls.users.index');
    }


    public function create()
    {
        return  view('controls.users.create');
    }


    public function store(Request $request)
    {
        return redirect()->route('controls.users.index');
    }



    public function edit()
    {
        return  view('controls.users.edit');
    }


    public function update(Request $request, $id)
    {
        return redirect()->route('controls.users.index');

    }


    public function destroy($id)
    {
        return redirect()->route('controls.users.index');

    }
}
