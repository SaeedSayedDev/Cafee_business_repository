<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\checkouInterface;
use App\Models\Booking;
use App\Services\StripeService;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class checkoutRepository implements checkouInterface
{
    private $stripeService;
 
    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
       
    }
    public function checkOut($id)
    {
        $booking = Booking::with('items')->find($id);
        return view('aPanal/Booking/checkOut', ['booking' => $booking]);
    }
    public function paiding($request, $booking_id)
    {
        $data = request()->all();
        $booking = Booking::with('items')->find($booking_id);
        //    return $booking;
        $total_vlaue = 0;
        foreach ($booking->items as $index => $item) {
            $total_vlaue += (int)$item->price * $data['quantity'][$index];
        }


        $cardData = $this->stripeService->createTokenCard($request->all());
        // return $cardData;
        $charge = $this->stripeService->stripeCharge($cardData->id, $total_vlaue);

        return $charge;
    }
}
