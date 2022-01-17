<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'payment_method_id', 'code', 'delivery_address', 'total', 'invoice'];

    // 
    public function getRouteKeyName()
    {
        return 'code';
    }

    // RELATIONSHIPS
    public function user( )
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function products()
    {
        return $this->belongsToMany(\App\Models\Products\Product::class)
        ->withPivot('quantity')
        ->withTimestamps();
    }

    public function states()
    {
        return $this->belongsToMany(State::class)->withTimestamps();
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
