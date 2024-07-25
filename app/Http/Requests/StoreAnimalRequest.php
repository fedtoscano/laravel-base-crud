<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
            "Salute"=>"min:3|max:15|required|string",
            "Note"=>"string|nullable"
        ];
    }

    public function messages(): array
    {
        return [
            //
            "Nome.min"=>"Il nome deve essere di almeno 3 caratteri",
            "Nome.max"=>"Il nome deve essere lungo massimo 15 caratteri",
            "Nome.required"=>"Il nome è un campo obbligatorio",
            "Nome.string"=>"Il nome non può essere un numero",

            //
            "Specie.min"=>"La Specie deve essere di almeno 3 caratteri",
            "Specie.max"=>"La Specie deve essere lungo massimo 15 caratteri",
            "Specie.required"=>"La Specie è un campo obbligatorio",
            "Specie.string"=>"La Specie non può essere un numero",

            //
            "Sesso.min"=>"Il Sesso deve essere di almeno 3 caratteri",
            "Sesso.max"=>"Il Sesso deve essere lungo massimo 15 caratteri",
            "Sesso.required"=>"Il Sesso è un campo obbligatorio",
            "Sesso.string"=>"Il Sesso non può essere un numero",

            //
            "Età.min"=>"L'Età deve essere di almeno 3 caratteri",
            "Età.max"=>"L'Età deve essere lungo massimo 15 caratteri",
            "Età.required"=>"L'Età è un campo obbligatorio",
            "Età.string"=>"L'Età non può essere un numero",

            //
            "Data_di_Arrivo.required"=>"La Data di arrivo è un campo obbligatorio",
            "Data_di_Arrivo.string"=>"La Data di arrivo non può essere un numero",

            //
            "Peso.required"=>"Il Peso è un campo obbligatorio",
            "Peso.string"=>"Il Peso deve essere un numero",

            //
            "Habitat.min"=>"L'Habitat deve essere di almeno 3 caratteri",
            "Habitat.max"=>"L'Habitat deve essere lungo massimo 15 caratteri",
            "Habitat.string"=>"L'Habitat non può essere un numero",

            //
            "Salute.min"=>"Lo stato di salute deve essere di almeno 3 caratteri",
            "Salute.max"=>"Lo stato di salute deve essere lungo massimo 15 caratteri",
            "Salute.required"=>"Lo stato di salute è un campo obbligatorio",
            "Salute.string"=>"Lo stato di salute non può essere un numero",

            //
            "Note.string"=>"Le note aggiuntive non possono essere un numero"
        ];
    }
}
