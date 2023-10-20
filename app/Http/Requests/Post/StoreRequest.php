<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    static public function myRules()
    {
        return [

            "title" => "required|min:5|max:500",
            "content" => "required|min:7",
            "slug" => "required|min:5|max:500",
            "category_id" => "required",
            "description" => "required|min:7",

        ];
    }


    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return $this->myRules();
    }
}
