<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Contracts\Validation\Validator;
use \Illuminate\Http\Exceptions\HttpResponseException;

class UpdateCommandeRequest extends FormRequest
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
            "nom_utilisateur"=>["required", "max:25"],
            "intitule"=>["required", "max:25"],
            "maison_edition"=>["required", "max:25"],
            "description"=>["required", "max:90"]
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
