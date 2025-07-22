<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'title'=>'required|string|max:255',
            'content'=>'required|string',
            'image'=>'image|mimes:jpg,jpeg,png|max:4096'
        ];
    }
    public function messages(): array
    {
       return [
            'title.required'=>'Titolo è un campo obbligatorio',
            'title.string'=>'Puoi inserire solo una stringa',
            'title.max:255'=>'lunghezza massima 255 caratteri',
            'content.required'=>'Descrizione è un campo obbligatorio',
            'content.string'=>'Puoi inserire solo una stringa',
            'image.image'=>'Puoi allegare solo un dato di tipo file',
            'image.mimes'=>'Formati ammessi:jpeg,jpg,png',
            'image.max'=>'L\immagine è troppo grande max 4Mb',

        ];
    }
}
