<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashIn extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'name',
        'reciever_id',
    ];
    public function reciever()
    {
        return $this->belongsTo(Employee::class, 'reciever_id');
    }
}