<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('frontend.index', [
            'products' => Product::take(8)->get(),
            'nav' => 'home'
        ]);
    }
}
