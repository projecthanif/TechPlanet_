<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartSummary extends Model
{
    use HasFactory;
    public static function totalPrice(): array
    {
        $arr = [];
        $user = auth()->user()->id;
        $users_cart = Cart::where(['user_id' => $user])->get();
        $prices = [];
        foreach ($users_cart as $cart) {
            $prices[] = $cart->product_price;
        }
        $arr['prices'] = array_sum($prices);
        $arr['num'] = count($prices);
        return $arr;
    }
}
