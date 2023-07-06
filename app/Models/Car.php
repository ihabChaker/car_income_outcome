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
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'car_buyer_id');
    }
    public function repairPartsBuyer()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'repair_parts_buyer_id');
    }
    public function electricityBuyer()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'electricity_buyer_id');
    }
    public function mechanismBuyer()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'mechanism_buyer_id');
    }
    public function toleBuyer()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'tole_buyer_id');
    }
    public function paymentReciever()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'payment_reciever_id');
    }
    public function expenses()
    {
        return $this->setConnection('mysql1')->hasMany(Expense::class, 'car_id');
    }
    public function cashIn()
    {
        return $this->setConnection('mysql1')->hasOne(CashIn::class, 'car_id');
    }
}