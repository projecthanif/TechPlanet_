<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BasePolicy
{

    public static function viewAny($view): mixed
    {
        return (Auth::check() && auth()->user()->role == 'admin') ?
            $view :
            redirect('/',)->withErrors(
                ['message' => 'forbidden']
            );
    }

    /**
     * Create a new policy instance.
     */
    public function view($view): mixed
    {
        return (Auth::check() && auth()->user()->user_type == 'admin') ?
            $view :
            redirect('/', status: 404)->withErrors(
                ['message' => 'forbidden']
            );
    }
}
