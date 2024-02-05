<?php

namespace App\Http\Controllers\PaymentGateway;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Unicodeveloper\Paystack\Paystack;
use Illuminate\Support\Facades\Redirect;

class PaymentGateWayController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return \Url
     */
    public function redirectToGateway(Request $request)
    {
        $data = array(
            // "amount" => $request->amount,

            "amount" => 2000 * 100,
            "reference" => Paystack()->genTranxRef(),
            "email" => $request->email,
            "currency" => "NGN",
            "orderID" => auth()->user()->id,
        );

        try {
            return paystack()->getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = paystack()->getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
