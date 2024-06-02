<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\checkouInterface;
use App\Http\Requests\CheckoutRequest;
use App\Models\Booking;
use Illuminate\Http\Request;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

class checkOutController extends Controller
{

    private $checkouInterface;

    public function __construct(checkouInterface $checkouInterface)

    {
        $this->checkouInterface = $checkouInterface;
    }
    public function checkOut($booking_id)
    {

        return $this->checkouInterface->checkOut($booking_id);
    }

    public function paiding(CheckoutRequest $request, $booking_id)
    {

        return $this->checkouInterface->paiding($request, $booking_id);
    }


    public function createTransaction()
    {
        return view('transaction');
    }
    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => 'http://127.0.0.1:8000/',
                "cancel_url" => 'http://127.0.0.1:8000/test',
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "10.00"
                    ]
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return dd('Something went wrong 1');
            // redirect()
            //     ->route('createTransaction')
            //     ->with('error', 'Something went wrong.');
        } else {
            return dd('Something went wrong 2');

            // return redirect()
            //     ->route('createTransaction')
            //     ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        dd($response);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return dd('Transaction complete');

            // return redirect()
            //     ->route('createTransaction')
            //     ->with('success', 'Transaction complete.');
        } else {

            return dd('Something went wrong 3');
            
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return dd('You have canceled the transaction');

        return redirect()

            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}
