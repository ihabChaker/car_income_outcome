<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashIn extends Model
{
    use HasFactory;
    protected $connection = 'mysql1';
    protected $fillable = [
        'amount',
        'name',
        'reciever_id',
        'car_id'
    ];
    public function reciever()
    {
        return $this->belongsTo(Employee::class, 'reciever_id');
    }
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}