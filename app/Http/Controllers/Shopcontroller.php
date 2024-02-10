<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use GuzzleHttp\Cookie\SetCookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

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
        // dd($request);

        $product = Product::find($product_id);

        $cartId = "C" . date('Ymdh');
        $shippingId = "S" . date('Ymhs');

        //array for cart
        $cart = [
            'product_id' => $product->product_id,
            'cart_id' => $cartId,
            'img_url' => $product->image_url,
            'product_price' => $product->price,
            'user_id' => auth()->user()->user_id,
            'quantity' => '1',
            'shipping_id' => $shippingId,
            'total_price' => $product->price
        ];
        //array for order
        $order = [
            'product_id' => $product->product_id,
            'customer_id' => auth()->user()->id,
        ];

        if (Cart::create($cart)) {
            // Order::create($order);
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
