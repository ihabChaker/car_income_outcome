<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Car
 *
 * @property int $id
 * @property string $name
 * @property string $license_plate
 * @property int $car_buyer_id
 * @property int $buy_price
 * @property int $repair_parts
 * @property int $repair_parts_buyer_id
 * @property int $electricity
 * @property int $electricity_buyer_id
 * @property int $mechanism
 * @property int $mechanism_buyer_id
 * @property int $tole
 * @property int $tole_buyer_id
 * @property int $selling_price
 * @property int $payment_reciever_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CarFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereBuyPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCarBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereElectricity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereElectricityBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereLicensePlate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereMechanism($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereMechanismBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car wherePaymentRecieverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereRepairParts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereRepairPartsBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereSellingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereTole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereToleBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

    public function carbuyer()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'car_buyer_id');
    }
    public function repairpartsbuyer()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'repair_parts_buyer_id');
    }
    public function electricitybuyer()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'electricity_buyer_id');
    }
    public function mechanismbuyer()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'mechanism_buyer_id');
    }
    public function tolebuyer()
    {
        return $this->setConnection('mysql1')->belongsTo(Employee::class, 'tole_buyer_id');
    }
    public function paymentreciever()
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