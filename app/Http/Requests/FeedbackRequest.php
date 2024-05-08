<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FeedbackRequest extends FormRequest
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
            'IDUser' => 'required|exists:users,id',
            'IDStore' => 'required|exists:store,id',
            'IDItem' => 'required|exists:item,id',
            'comment' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'date' => 'required|date'
        ];
    }
}
