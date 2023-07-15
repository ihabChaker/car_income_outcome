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

    public function messages(): array
    {
        return [
            'car_buyer_id' => ' لي شرا الطاكسي',
            'license_plate' => 'لوحة الترقيم',
            'buy_price' => 'سعرالشراء',
            'electricity' => 'الكهرباء',
            'electricity_buyer_id' => ' لي صرف على الكهرباء',
            'mechanism' => 'الميكانيك',
            'mechanism_buyer_id' => ' لي صرف على الميكانيك',
            'tole' => 'الهيكل',
            'tole_buyer_id' => ' لي صرف على الهيكل',
            'repair_parts' => 'قطع الغيار',
            'repair_parts_buyer_id' => ' لي شرا قطع الغيار',
            'selling_price' => 'سعر البيع',
            'payment_reciever_id' => ' لي قبض الدراهم',
        ];
    }
}