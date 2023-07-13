<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $connection = 'mysql1';

    protected $fillable = ['name', 'amount', 'car_id', 'spender_id'];
    public function spender()
    {
        return $this->belongsTo(Employee::class, 'spender_id');
    }
}