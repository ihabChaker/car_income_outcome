<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
 */
	class Car extends \Eloquent {}
}

namespace App\Models{
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
 */
	class CashIn extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Expense extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

