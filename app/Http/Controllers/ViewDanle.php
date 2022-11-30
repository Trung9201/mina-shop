<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewDanle extends Controller
{
    public function index()
    {

        $name = Auth::user()->name;
        return view('shop')->with('name', $name);
    }

}