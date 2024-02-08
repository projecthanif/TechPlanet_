<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Policies\BasePolicy;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BasePolicy::viewAny(view('dashboard.customer-list', [
            'nav' => 'customer',
            'list' => 'list',
            'users' => User::all()
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
