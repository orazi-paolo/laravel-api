<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAndUpdateProjectRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'required|url',
            'type_id' => 'required|numeric|exists:types,id',
            'technologies' => 'required|array|exists:technologies,id',
            'image_url' => 'nullable|image|max:250'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.string' => 'Il nome deve essere una stringa',
            'name.max' => 'Il nome può contenere al massimo 255 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.string' => 'La descrizione deve essere una stringa',
            'url.required' => "L'URL è obbligatorio",
            'url.url' => 'Il campo "url" deve contenere un URL valido',
            'type_id.required' => 'Il tipo di progetto è obbligatorio',
            'type_id.numeric' => 'Il tipo di progetto deve essere un numero',
            'type_id.exists' => 'Il tipo di progetto selezionato non esiste',
            'technologies.required' => 'Almeno una tecnologia è obbligatoria',
            'technologies.array' => 'Vi è un errore nella gestione delle tecnologie risolveremo a breve, si prega di segnalare il problema (non sapevo cosa scrivere haha)',
            'technologies.exists' => 'Una delle tecnologie selezionate non esiste',
            'image_url.image' => 'Il file caricato non è un\'immagine',
            'image_url.max' => 'L\'immagine non può superare i 250KB'
        ];
    }
}