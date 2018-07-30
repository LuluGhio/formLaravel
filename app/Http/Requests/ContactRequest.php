<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request
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
            'nom'       => 'required|between:6,60|alpha',
            'prenom'    => 'required|between:2,60|alpha',
            'email'     => 'required|email',
            'texte'     => 'required|min:50'
        ];
    }
}
