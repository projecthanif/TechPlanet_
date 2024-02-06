<?php

namespace App\Http\Controllers;

use App\Policies\BasePolicy;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BasePolicy::viewAny((view('dashboard.index', [
            'nav' => 'dashboard'
        ])));
    }
}
