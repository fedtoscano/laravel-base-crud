<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAnimalRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                //
                "Nome" => "min:3|max:15|required|string",
                "Specie" => "min:3|max:15|required|string",
                "Sesso" => "min:3|max:15|required|string",
                "Età" => "min:3|max:15|required|integer",
                "Data_di_Arrivo" => "required|string",
                "Peso"=> "required|integer|nullable",
                "Habitat"=>"min:3|max:15|string|nullable",
                "Salute"=>"min:3|max:15|required|string|nullable",
                "Note"=>"string|nullable"
        ];
    }
}
