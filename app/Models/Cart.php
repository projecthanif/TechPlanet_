<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function totalPrice($id): array
    {
        $prices = [];
        $users_cart = Cart::where(['user_id' => $id])->get();
        foreach ($users_cart as $cart) {
            $prices[] = $cart->product_price;
        }
        return $prices;
    }
}
