<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\StoreProductRequest;
use App\Http\Requests\Dashboard\UpdateProductRequest;
use App\Policies\BasePolicy;
use Database\Seeders\ProductSeeder;
use DateTime;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BasePolicy::viewAny(view('dashboard.product-lists', [
            'products' => Product::all(),
            'nav' => 'product',
            'list' => 'list',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product-create', [
            'categories' => Category::all(),
            'nav' => 'product',
            'list' => 'add' //change to create
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();


        if ($request->hasFile('image')) {
            $validated['image_url'] = $request->file('image')->store('productImage', 'public');
        }
        $date =  "P" . date('Ymd');
        $validated['product_id'] = $date;

        Product::create($validated);

        return redirect('/product/lists')->with('message', 'Product created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $product_id)
    {
        dd($product, $product_id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $product_id)
    {
        $item = $product::find($product_id);
        if ($item->image_path && Storage::disk('public')->exists($item->image_path)) {
            Storage::disk('public')->delete($item->image_path);
        }

        $item->delete();

        return redirect('/product/lists')->with('message', 'Product deleted Sucessfully');
    }
}
