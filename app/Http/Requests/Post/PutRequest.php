<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PutRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {

        return [

            "title" => "required|min:5|max:500",
            "content" => "required|min:7",
            "slug" => "required|min:5|max:500|unique:posts,slug,".$this->route("post")->id,
            "category_id" => "required",
            "description" => "required|min:7",
            "posted" => "required",
            "image" => "max:10240"

        ];
    }
}
