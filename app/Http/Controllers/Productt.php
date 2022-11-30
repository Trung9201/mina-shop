<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Yajra\DataTables\Utilities\Request;

class Productt extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $product = Product::all();
            return datatables()->of($product)

                ->addColumn('action', function ($row) {
                    $html = '<button  class="btn btn-xs btn-secondary btn-edit">Edit ';
                    $html .= '<button data-rowid="' . $row->id . '" class="btn btn-xs btn-danger btn-deletepr">Del</button>';
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
    public function create(Request $request)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $data = new Product();




        if (!$request->file('image')) {
            return "Mời chọn file cần upload";
        }
        $file = $request->file('image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('public/image'), $filename);
        $data['photo'] = $filename;
        $data['name'] = $request->input('name');
        $data['price'] = $request->input('price');
        $data['amount'] = $request->input('amount');

        $data->save();
        return redirect()->back();
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
     */
    public function update(Request $request, $id)
    {
        $product = Product::where('id', '=', $id);
        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'public/image/';
            $imageprofile = date('YmdHis') . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageprofile);
            $input['img'] = $imageprofile;
        } else {
            unset($input['img']);
        }
        $product->update(['name' => $input['name'], 'amount' => $input['amount'], 'price' => $input['price'], 'photo' => $input['img']]);
        return redirect()->back();
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return ['success' => true, 'message' => 'Deleted Successfully'];
    }
    /**
     */
    function __construct()
    {
    }
}