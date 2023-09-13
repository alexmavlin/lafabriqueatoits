<?php

namespace App\Http\Requests\Admin\Programme;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'link' => 'required|string',
            'title' => 'required|string',
            'meta_title' => 'required|string',
            'h1_title' => 'required|string',
            'h2_title' => 'required|string',
            'h3_title' => 'required|string',
            'description' => 'required|string',
            'mini_descreption' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
            'type' => 'required|string',
            'devices' => 'required',
            'address' => 'required|string',
            'department_id' => 'required',
            'lon' => 'required',
            'lat' => 'required',
            'city' => 'required|string',
            'delivery_date' => 'required',
            'trimester' => 'required',
            'city_info_title_1' => 'nullable|string',
            'city_info_title_2' => 'nullable|string',
            'city_info_title_3' => 'nullable|string',
            'city_info_title_4' => 'nullable|string',
            'city_info_1' => 'nullable|string',
            'city_info_2' => 'nullable|string',
            'city_info_3' => 'nullable|string',
            'city_info_4' => 'nullable|string',
            'is_new' => 'nullable|boolean',
            'breadcrumb' => 'required|string',
            'is_selected' => 'nullable|boolean',
            'image_1' => 'required|image',
            'alt_1' => 'nullable|string',
            'image_2' => 'nullable|image',
            'alt_2' => 'nullable|string',
            'image_3' => 'nullable|image',
            'alt_3' => 'nullable|string',
            'image_4' => 'nullable|image',
            'alt_4' => 'nullable|string',
            'image_5' => 'nullable|image',
            'alt_5' => 'nullable|string',
            'name_lot_1' => 'nullable|string',
            'name_lot_2' => 'nullable|string',
            'name_lot_3' => 'nullable|string',
            'name_lot_4' => 'nullable|string',
            'parts_1' => 'nullable',
            'parts_2' => 'nullable',
            'parts_3' => 'nullable',
            'parts_4' => 'nullable',
            'img_lot_1' => 'nullable|image',
            'img_lot_2' => 'nullable|image',
            'img_lot_3' => 'nullable|image',
            'img_lot_4' => 'nullable|image',
            'alt_img_1' => 'nullable|string',
            'alt_img_2' => 'nullable|string',
            'alt_img_3' => 'nullable|string',
            'alt_img_4' => 'nullable|string',
            'price_lot_1' => 'nullable|string',
            'price_lot_2' => 'nullable|string',
            'price_lot_3' => 'nullable|string',
            'price_lot_4' => 'nullable|string',
            'descreption_lot_1' => 'nullable|string',
            'descreption_lot_2' => 'nullable|string',
            'descreption_lot_3' => 'nullable|string',
            'descreption_lot_4' => 'nullable|string',
        ];
    }
}
