<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
         'title' => 'required|string|max:255',
        'description' => 'required|string',
        'date' => 'required',
        'duration_hours' => 'required|integer|min:0|max:24',
        'duration_minutes' => 'required|integer|min:0|max:59',
        'acceptance' => 'required',
        'numplaces_available' => 'required|integer|min:0',
        'user_id' => 'required|exists:users,id',
        'place_id' => 'required|exists:places,id',
        'category_id' => 'required|exists:categories,id'
        ];
    }
}
