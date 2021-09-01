<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateNewRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $isCategoryId = false;
        $categoryId = [];

        $rules = [
            'id' => ['required'],
            'title' => ['required', 'string', 'max:200'],
            'content' => ['required', 'string', 'max:500'],
        ];

        if ($request->input('load-image')) {
            $rules['load-image'] = ['sometimes', 'image'];
        }

        foreach ($request->all() as $key => $val) {

            if (strripos($key, 'category-id') === 0) {
                $isCategoryId = true;
                $rules[$key] = ['required'];
                $categoryId[] = $val;
            }
        }

        if (!$isCategoryId) {
            $rules['category-id'] = ['required'];
        }

        return $rules;
    }

}
