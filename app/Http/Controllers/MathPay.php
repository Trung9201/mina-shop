<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\DetailOder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;


class MathPay extends Controller
{
    public function payment($id, ProductRequest $request)
    {

        $price = DB::table('product')->select('price')->where('id', '=', $id)->first();
        $pri = json_decode(json_encode($price), true);

        $amountskin = $request->amountskin;

        $status = DB::table('product')->select('amount')->where('id', '=', $id)->first();
        $st = json_decode(json_encode($status), true);
        $total =  $pri['price'] * $amountskin;

        
    
$price = DB::table('product')->select('price')->where('id', '=', $id)->first();
        $pri = json_decode(json_encode($price), true);

        $amountskin = $request->amountskin;

        $phone = $request->phone;
        $address= $request->address;

        $status = DB::table('product')->select('amount')->where('id', '=', $id)->first();
        $st = json_decode(json_encode($status), true);
       
        $invoice = (['amount' => $amountskin, 'phone' => $phone, 'address' => $address, 'total' => $total, 'priceskin' => $pri['price'], 'product_id' => $id, 'user_id' => Auth::user()->id]);
        $product = Product::find($id);
        $pass = $st['amount'] - $amountskin;
        $product->detail()->create($invoice);

        $product->fill(array('amount' => $pass));
        $product->push();
        return redirect()->back();
    }
}
