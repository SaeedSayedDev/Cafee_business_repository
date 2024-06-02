<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'ofPeople',
        'message',
        'startDateTime',
        'endDateTime',
        'table_id', 'new'
    ];
    public function tables()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }
    public function items()
    {
       return  $this->belongsToMany(MenuItem::class, BookingItems::class);
    }
}
