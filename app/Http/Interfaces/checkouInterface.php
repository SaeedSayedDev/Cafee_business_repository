<?php

namespace App\Http\Interfaces;


interface checkouInterface{
    public function checkOut($booking_id);
    public function paiding($request ,$booking_id);
    
   
}