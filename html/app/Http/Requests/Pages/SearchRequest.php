<?php

namespace App\Http\Requests\Pages;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'nullable',
            'min_pieces' => 'nullable',
            'max_pieces' => 'nullable',
            'min_price' => 'nullable',
            'max_price' => 'nullable',
            'departement' => 'nullable',
            'fiscaux' => 'nullable',
            'order' => 'nullable',
            'livraison' => 'nullable',
        ];
    }
}
