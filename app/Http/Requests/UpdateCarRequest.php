<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'car_buyer_id' => 'required|exists:mysql1.employees,id',
            'license_plate' => 'required|numeric',
            'buy_price' => 'required|numeric',
            'electricity' => 'required|numeric',
            'electricity_buyer_id' => 'required|exists:mysql1.employees,id',
            'mechanism' => 'required|numeric',
            'mechanism_buyer_id' => 'required|exists:mysql1.employees,id',
            'tole' => 'required|numeric',
            'tole_buyer_id' => 'required|exists:mysql1.employees,id',
            'repair_parts' => 'required|numeric',
            'repair_parts_buyer_id' => 'required|exists:mysql1.employees,id',
            'selling_price' => 'required|numeric',
            'payment_reciever_id' => 'required|exists:mysql1.employees,id',
        ];
    }
}