<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/dashboard/product-lists', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboard/product-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formInputs = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'discount' => 'numeric',
            'category' => 'required',
            'description' => 'required',
            'qty' => 'required|numeric'
        ]);


        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('productImage', 'public');
            $formInputs['image_path'] = $filePath;
        }

        Product::create($formInputs);
        return redirect('/product/lists')->with('message', 'created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd(Product::find($id));
    }
}
