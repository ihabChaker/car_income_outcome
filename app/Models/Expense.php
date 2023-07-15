<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Expense
 *
 * @property int $id
 * @property string $name
 * @property int|null $car_id
 * @property int|null $house_expense_id
 * @property int|null $shop_expense_id
 * @property int|null $parent_id
 * @property int $spender_id
 * @property int $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee|null $spender
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereHouseExpenseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereShopExpenseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereSpenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expense whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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