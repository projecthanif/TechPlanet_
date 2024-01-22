<?php

namespace App\Policies;

use App\Models\User;

class BasePolicy
{

    public static function viewAny($view): mixed
    {
        return (auth()->user()->user_type == 'admin') ?
            $view :
            redirect('/')->withErrors(['message' => 'fornidden']);
    }

    /**
     * Create a new policy instance.
     */
    public function view($view): mixed
    {
        return (auth()->user()->user_type == 'admin') ?
            $view :
            redirect('/')->withErrors(['message' => 'fornidden']);
    }
}
