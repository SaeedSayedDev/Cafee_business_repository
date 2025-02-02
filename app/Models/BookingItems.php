<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingItems extends Model
{
    use HasFactory;
   
    protected $fillable =[
        'booking_id','menu_item_id', 'quantity'
    ];
   
}
