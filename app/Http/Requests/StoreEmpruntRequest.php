<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Contracts\Validation\Validator;
use \Illuminate\Http\Exceptions\HttpResponseException;

class StoreEmpruntRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "user_id"=>["required", "integer"],
            "livre_id"=>["required", "integer"],
            "quantite"=>["required"],
            "date_remise"=>["required", "date"],
            "status"=>["required", "in:0,1"]
        ];
    }

       /**
 * Failed validation disable redirect
 *
 * @param Validator $validator
 */
protected function failedValidation(Validator $validator)
{

    throw new HttpResponseException(response()->json($validator->errors(), 422));
}
}
