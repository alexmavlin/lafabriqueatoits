<?php

namespace App\Http\Requests\Admin\Blog;

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
            'h2_title_cards' => 'nullable|string',
            'url' => 'required|string',
            'en_savoir_cards' => 'nullable|string',
            'description_cards' => 'nullable|string',
            'title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'image' => 'nullable|image',
            'alt' => 'nullable|string',
            'h1_title' => 'nullable|string',
            'date' => 'nullable|string',
            'author' => 'nullable|string',
            'categorie' => 'nullable',
            'h2_title' => 'nullable|string',
            'h3_title' => 'nullable|string',
            'content' => 'nullable|string',
            'img_content' => 'nullable|image',
            'alt_content' => 'nullable|string',
            'is_selected' => 'nullable|boolean',
            'h3_title_2' => 'nullable|string',
            'h3_title_3' => 'nullable|string',
            'h3_title_4' => 'nullable|string',
            'h3_title_5' => 'nullable|string',
            'h3_title_6' => 'nullable|string',
            'h3_title_7' => 'nullable|string',
            'h3_title_8' => 'nullable|string',
            'h3_title_9' => 'nullable|string',
            'h3_title_10' => 'nullable|string',
            'h3_title_11' => 'nullable|string',
            'h3_title_12' => 'nullable|string',
            'h3_title_13' => 'nullable|string',
            'h3_title_14' => 'nullable|string',
            'h3_title_15' => 'nullable|string',
            'content_2' => 'nullable|string',
            'content_3' => 'nullable|string',
            'content_4' => 'nullable|string',
            'content_5' => 'nullable|string',
            'content_6' => 'nullable|string',
            'content_7' => 'nullable|string',
            'content_8' => 'nullable|string',
            'content_9' => 'nullable|string',
            'content_10' => 'nullable|string',
            'content_11' => 'nullable|string',
            'content_12' => 'nullable|string',
            'content_13' => 'nullable|string',
            'content_14' => 'nullable|string',
            'content_15' => 'nullable|string',
            'img_content_2' => 'nullable|image',
            'img_content_3' => 'nullable|image',
            'img_content_4' => 'nullable|image',
            'img_content_5' => 'nullable|image',
            'img_content_6' => 'nullable|image',
            'img_content_7' => 'nullable|image',
            'img_content_8' => 'nullable|image',
            'img_content_9' => 'nullable|image',
            'img_content_10' => 'nullable|image',
            'img_content_11' => 'nullable|image',
            'img_content_12' => 'nullable|image',
            'img_content_13' => 'nullable|image',
            'img_content_14' => 'nullable|image',
            'img_content_15' => 'nullable|image',
            'img_alt_2' => 'nullable|string',
            'img_alt_3' => 'nullable|string',
            'img_alt_4' => 'nullable|string',
            'img_alt_5' => 'nullable|string',
            'img_alt_6' => 'nullable|string',
            'img_alt_7' => 'nullable|string',
            'img_alt_8' => 'nullable|string',
            'img_alt_9' => 'nullable|string',
            'img_alt_10' => 'nullable|string',
            'img_alt_11' => 'nullable|string',
            'img_alt_12' => 'nullable|string',
            'img_alt_13' => 'nullable|string',
            'img_alt_14' => 'nullable|string',
            'img_alt_15' => 'nullable|string',
            'description_2' => 'nullable|string',
            'description_3' => 'nullable|string',
            'description_4' => 'nullable|string',
            'description_5' => 'nullable|string',
            'description_6' => 'nullable|string',
            'description_7' => 'nullable|string',
            'description_8' => 'nullable|string',
            'description_9' => 'nullable|string',
            'description_10' => 'nullable|string',
            'description_11' => 'nullable|string',
            'description_12' => 'nullable|string',
            'description_13' => 'nullable|string',
            'description_14' => 'nullable|string',
            'description_15' => 'nullable|string',
        ];
    }
}
