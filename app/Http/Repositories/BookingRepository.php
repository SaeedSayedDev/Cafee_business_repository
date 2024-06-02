<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\BookingInterfce;
use App\Models\Booking;
use App\Models\BookingItems;
use App\Models\MenuItem;
use App\Models\Notification;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Support\Carbon;


class BookingRepository implements BookingInterfce
{
    public function index()
    {
        $bookings = Booking::get();
        return view('aPanal/Booking/viewBookings', compact('bookings'));
    }


    public function show($id)
    {
        $booking = Booking::find($id);
        if (!$booking)
            return redirect('aPanal/dashboard');
        if ($booking->new == "new") {
            $booking->update([
                'new' => "not new"
            ]); 
        }
        return view('aPanal/Booking/viewBooking', compact('booking'));
    }


    function booking($request)
    {
        $data = request()->all();

        $checkBooking = $this->checkBooking($data['table_id'], $data['startDateTime']);

        if (count($checkBooking) != 0) {
            return redirect()->back()->withErrors(['error' => 'This Table is Not Avilable in this time']);
        }

        $data['endDateTime'] = Carbon::parse($request->startDateTime)->addHour(1);
        $data['new'] = "new";
        $booking = Booking::create($data);


        foreach ($data['menu_id'] as $item) {
            BookingItems::create([
                'booking_id' => $booking->id,
                'menu_item_id' => $item
            ]);
        }
        $items = MenuItem::whereIn('id', $data['menu_id'])->get();

        return redirect("/checkOut/ $booking->id");
    }


    function checkBooking($table_id, $startDateTime)
    {
        $checkBooking = Booking::where('table_id', $table_id)
            ->where('startDateTime', '<=', $startDateTime)
            ->where('endDateTime', '>=', $startDateTime)->get();
        return $checkBooking;
    }


    public function delete($id)
    {
        $booking = Booking::find($id);
        if (!$booking)
            return redirect('aPanal/dashboard');
        $booking->delete();
        return back();
    }
}
