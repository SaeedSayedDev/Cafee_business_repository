<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\BookingInterfce;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\Notification;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BookingController extends Controller
{
 

    private $BookingInterfce;

    public function __construct(BookingInterfce $BookingInterfce)

    {
        $this->BookingInterfce = $BookingInterfce;
    }
    public function booking(BookingRequest $request)
    {
       
        return $this->BookingInterfce->booking($request);
    }

    public function checkBooking($table_id , $startDateTime)
    {
        return $this->BookingInterfce->checkBooking($table_id , $startDateTime);
    }

    public function index()
    {
        return $this->BookingInterfce->index();
    }


    public function show($id)
    {
        return $this->BookingInterfce->show($id);
      
    }
  
    public function delete($tableId)
    {
        return $this->BookingInterfce->delete($tableId);
    }

  
}
