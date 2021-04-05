<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    const PURCHASE = 'purchase';
    const NEXT_TIME = 'next_time';

    protected $fillable = [
        'cart_type',
        'user_id'
    ];
    public function cartItems (){
        return $this->hasMany(CartItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
