<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
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

        //array for cart
        $cart = [
            'product_id' => $product->product_id,
            'product_image' => $product->image_path,
            'product_price' => $product->price,
            'user_id' => auth()->user()->id,
            'quantity' => '1',
            'total_price' => $product->price
        ];
        //array for order
        $order = [
            'uuid' => uuid_create(),
            'product_id' => $product->product_id,
            'customer_id' => auth()->user()->id,
        ];

        if (Cart::create($cart)) {
            Order::create($order);
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
        ]);
    }

    public function showByCategory(Product $product, $category)
    {
        // dd(Product::where(['category' => $category])->get());
        return view('frontend.shop', [
            'products' => Product::where(['category' => $category])->get(),
            'categories' => Category::all(),
            'nav' => 'shop'
        ]);
    }
}
