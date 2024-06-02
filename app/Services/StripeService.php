<?php

namespace App\Services;

use App\Models\setting\PaymentMethod;
use AmrShawky\LaravelCurrency\Facade\Currency;
use App\Models\PaymentInformation;
use App\Services\ConvertCurrencyService;
use Stripe\Charge;


class StripeService
{
    public $stripe;

    public function __construct()
    {
        $this->stripe = new \Stripe\StripeClient(getenv("STRIPE_SECRET"));
    }

    public function createTokenCard($dataCard)
    {

        return $this->stripe->tokens->create([
            'card' => [
                'number' => 4242424242424242,
                'exp_month' => 02,
                'exp_year' => 2024,
                'cvc' => 314,
            ],
        ]);
    }

    public function stripeCharge($token, $amount)
    {
        return $this->stripe->charges->create([
            "amount" => (int)$amount * 100,
            "currency" => 'USD',
            "source" => $token,
        ]);
    }



    public function stripeChargeRetrieve($charge_id)
    {
        return  $this->stripe->charges->retrieve(
            $charge_id,
            ["expand" => array("balance_transaction")]
        );
    }
}
