<?php

namespace App\Http\Interfaces;


interface BookingInterfce{
    public function index();
    public function booking($request);
    public function checkBooking($table_id , $startDateTime);

    public function show($bookingId);
    public function delete($bookingId);
}