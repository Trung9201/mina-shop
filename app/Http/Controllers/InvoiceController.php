<?php

namespace App\Http\Controllers;

use App\Models\DetailOder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {


        if ($request->ajax()) {
            $product = DB::table('detail_order')->join('users', 'users.id', '=', 'detail_order.user_id')->join('product', 'product.id', '=', 'detail_order.product_id')->select('detail_order.*', 'users.name as names', 'product.name')->get();

            return datatables()->of($product)

                ->addColumn('action', function ($row) {

                    $html = '<button data-rowid="' . $row->id . '" class="btn btn-xs btn-danger btn-deletein">Del</button>';
                    return $html;
                })->toJson();
        }
        return view('formadmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        DetailOder::find($id)->delete();
        return ['success' => true, 'message' => 'Deleted Successfully'];
        //
    }
}