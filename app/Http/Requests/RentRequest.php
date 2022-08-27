<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentRequest extends FormRequest
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
            'initial_date' => 'date|required',
            'final_date' => 'date|required',
            'daily_price' => 'numeric|required',
            'cleaning_price' => 'numeric|required',
            'discount' => 'numeric|required'
        ];
    }
}
