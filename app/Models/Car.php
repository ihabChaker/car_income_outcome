<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'license_plate',
        'buy_price',
        'repair_parts',
        'mechanism',
        'tole',
        'electricity',
        'selling_price',
        'car_buyer_id',
        'repair_parts_buyer_id',
        'electricity_buyer_id',
        'mechanism_buyer_id',
        'tole_buyer_id',
        'payment_reciever_id',
    ];
    public function carBuyer()
    {
        return $this->belongsTo(Employee::class, 'car_buyer_id');
    }
    public function repairPartsBuyer()
    {
        return $this->belongsTo(Employee::class, 'repair_parts_buyer_id');
    }
    public function electricityBuyer()
    {
        return $this->belongsTo(Employee::class, 'electricity_buyer_id');
    }
    public function mechanismBuyer()
    {
        return $this->belongsTo(Employee::class, 'mechanism_buyer_id');
    }
    public function toleBuyer()
    {
        return $this->belongsTo(Employee::class, 'tole_buyer_id');
    }
    public function paymentReciever()
    {
        return $this->belongsTo(Employee::class, 'payment_reciever_id');
    }
    public function expenses()
    {
        return $this->hasMany(Expense::class, 'car_id')->connection('mysql1');
    }
    public function cashIns()
    {
        return $this->hasMany(CashIn::class, 'car_id')->connection('mysql1');
    }
}