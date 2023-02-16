<?php

namespace App\Http\Controllers;
use Mollie\Laravel\Facades\Mollie;
use DB;

class MollieController extends Controller
{   

    public function  __construct() {
        Mollie::api()->setApiKey('test_FbVACj7UbsdkHtAUWnCnmSNGFWMuuA'); // your mollie test api key
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment()
    {   
        // new payment set-up
        $payment = Mollie::api()->payments()->create([
        'amount' => [
            'currency' => 'EUR', // Type of currency you want to send
            'value' => '15.00', // You must send the correct number of decimals, thus we enforce the use of strings
        ],
        'description' => 'Payment By codehunger', 
        'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
        ]);
    
        $payment = Mollie::api()->payments()->get($payment->id);
    
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * Page redirection to welcome page after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess() {
        echo 'payment has been received';
        return redirect('/');
    }
}
