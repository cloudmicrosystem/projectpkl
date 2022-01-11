<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArsipRequest extends FormRequest
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
            'noArsip' => ['required', 'string'],
            'namaArsip' => ['required', 'string'],
            'fileArsip' => ['mimes:png,jpg,jpeg,txt,pdf,doc,docx|max:6144']
        ];
    }
}
