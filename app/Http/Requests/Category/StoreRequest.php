<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        $this-> merge([
            'slug' => Str::slug($this->title)
        ]);
        
    }

    static public function myRules()
    {
        return [

            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500|unique:posts",

        ];
    }


    public function authorize(): bool
    {
        return true;
    }


    public function rules()
    {
        return $this->myRules();
    }
}
