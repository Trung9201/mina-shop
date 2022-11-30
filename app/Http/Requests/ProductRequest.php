<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id;
        $status = DB::table('product')->select('amount')->where('id', '=', $id)->first();
        $st = json_decode(json_encode($status), true);
        $vali = $st['amount'];

        return [
            //
            'amountskin' => 'integer|max:' . $vali,
        ];

    }
    public function messages()
    {
        //
        return [
            'amountskin.max' => 'het roi3',
        ];
    }
}