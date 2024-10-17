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
            'title' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3|max:4096',
            'event_type' => 'integer|in:event_types',
            'event_category' => 'integer|in:event_categories',
            'event_place' => 'required',
            'starts_at' => 'required|date',
            'ends_at' => 'date|after:starts_at',
        ];
    }
}
