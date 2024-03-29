<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'titre' => 'required|min:3',
            'description' => 'required|min:20',
            'lieu' => 'required',
            'date' => 'required|date',
            'image' => 'image',
            'places_number' => 'required|numeric',
            'category' => 'required',
            'status' => 'required',
            
        ];
    }
}
