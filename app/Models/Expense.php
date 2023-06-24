<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'amount', 'spended_by'];
    public function spender()
    {
        return $this->belongsTo(Employee::class, 'spended_by');
    }
}