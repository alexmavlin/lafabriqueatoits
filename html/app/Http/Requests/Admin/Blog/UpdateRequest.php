<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'h2_title_cards' => 'required|string',
            'url' => 'required|string',
            'en_savoir_cards' => 'required|string',
            'description_cards' => 'nullable|string',
            'title' => 'required|string',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_title' => 'required|string',
            'image' => 'nullable|image',
            'alt' => 'nullable|string',
            'h1_title' => 'required|string',
            'date' => 'required|string',
            'author' => 'required|string',
            'categorie' => 'required',
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
        ];
    }
}
