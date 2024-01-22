<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Policies\BasePolicy;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(User $user, $id)
    {
        return view('/dashboard/user-profile', [
            'user' => User::find($id)
        ]);
        // return BasePolicy::viewAny(view('/dashboard/user-profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
