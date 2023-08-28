<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilyRequest extends FormRequest
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
        $id = $this->route('id');
        if ($id) {
            $code = "required|unique:family,code, $id";
        } else {
            $code = "required|unique:family,code";
        }
        return [
            'sectors_id' => 'required',
            'type' => 'required',
            'code' => $code
        ];
    }
}
