<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function  purchase_cart(){
        return $this->hasOne(Cart::class)->where('cart_type', Cart::typeIndex(Cart::PURCHASE));
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getPurchaseCartOrCreate(){
        $purchase_cart = $this->purchase_cart;

        if (!$purchase_cart){
            $purchase_cart = Cart::create([
               'user_id' => $this->id,
               'cart_type' => Cart::typeIndex(Cart::PURCHASE)
            ]);
        }
        return $purchase_cart;
    }
}
