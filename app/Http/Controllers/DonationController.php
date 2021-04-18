<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;

class DonationController extends Controller
{
    public $payPalGateway;

    public function __construct()
    {
        $this->payPalGateway = Omnipay::create('PayPal_Rest');
        $this->payPalGateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->payPalGateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->payPalGateway->setTestMode(env('IS_PAYPAL_LOCALHOST')); //set it to 'false' when go live
    }

    public function donateSubmit(Request $request)
    {
 

        if ($request->payment == "PayPal") {

            try {
                $response = $this->payPalGateway->purchase(array(
                    'amount' => $request->amount,
                    'currency' => 'USD',
                    'returnUrl' => route('paypalSuccess'),
                    'cancelUrl' => route('paypalFailed'),

                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    Toastr::error($response->getMessage(), trans('common.Failed'));
                    return \redirect()->back();
                }
            } catch (\Exception $e) {
                Toastr::error("Something Went Wrong", 'Failed');
                return \redirect()->back();
            }

        }


        $request->validate([
            'stripeToken' => 'required'
        ]);
        $token = $request->stripeToken ?? '';
        $gatewayStripe = Omnipay::create('Stripe');
        $gatewayStripe->setApiKey(env('STRIPE_SECRET'));

//            $formData = array('number' => '4242424242424242', 'expiryMonth' => '6', 'expiryYear' => '2030', 'cvv' => '123');
        $response = $gatewayStripe->purchase(array(
            'amount' => convertCurrency(getSetting()->currency->code ?? 'BDT', 'USD', $checkout_info->purchase_price),
            'currency' => 'USD',
            'token' => $token,
        ))->send();

        if ($response->isRedirect()) {
            // redirect to offsite payment gateway
            $response->redirect();
        } elseif ($response->isSuccessful()) {
            // payment was successful: update database
            dd($response->getData());
            if ($payWithStripe) {
//                Payment done successfully
            } else {

                return \redirect()->back();
            }
        } else {

            if ($response->getCode() == "amount_too_small") {

            } else {

            }
            return redirect()->back();
        }
    }


    public function paypalSuccess(Request $request)
    {

        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->payPalGateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {
                // The customer has successfully paid.
                $arr_body = $response->getData();
                dd($arr_body);
//                $payWithPapal = $this->payWithGateWay($arr_body, "PayPal");
//                if ($payWithPapal) {
                    dd('ok');
//                    Toastr::success('Payment done successfully', 'Success');
//                    return redirect(route('studentDashboard'));
//                } else {
//                    Toastr::error('Something Went Wrong', 'Error');
//                    return redirect(route('studentDashboard'));
//                }

            } else {
//                $msg = str_replace("'", " ", $response->getMessage());
//                Toastr::error($msg, 'Failed');
//                return redirect()->back();
            }
        } else {
//            Toastr::error('Transaction is declined');
//            return redirect()->back();
        }


    }

    public function paypalFailed()
    {
       dd('failed');
    }
}
