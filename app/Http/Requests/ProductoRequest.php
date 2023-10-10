<?php

namespace App\Http\Requests;

use App\Models\Producto;
use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (auth()->user()->rol== 1) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sku'           => 'required|unique:productos,sku|max:4'.$this->id,
            'titulo'        => 'required',
            'cantidad'      => 'required',
            'precio'        => 'required',
            'proveedor'     => 'required'

        ];
    }
}
