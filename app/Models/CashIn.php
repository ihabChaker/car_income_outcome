<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CashIn
 *
 * @property int $id
 * @property int $amount
 * @property string $name
 * @property int|null $car_id
 * @property int|null $parent_id
 * @property int $reciever_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Car|null $car
 * @property-read \App\Models\Employee|null $reciever
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn query()
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn whereRecieverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashIn whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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