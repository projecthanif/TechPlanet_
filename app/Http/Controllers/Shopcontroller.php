<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Shopcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.shop', [
            'products' => Product::where(['availability' => 1])->latest()->paginate(12),
            'categories' => Category::all(),
            'nav' => 'shop'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * Stores a new order from customer
     */
    public function store(Request $request, $product_id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $product = Product::find($product_id);
        $cart = [
            'product_id' => $product->id,
            'user_id' => auth()->user()->id,
            'quantity' => '1',
            'total_price' => $product->price
        ];

        if (Cart::create($cart)) {
            $product->update(['qty' => ($product->qty - 1)]);
            if ($product->qty <= 0) {
                $product->update(['availability' => 0]);
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, $product_id)
    {
        return view('frontend.product-details', [
            'product' => Product::find($product_id),
            // 'similar' => Product::all()->where('category', )
        ]);
    }
}
