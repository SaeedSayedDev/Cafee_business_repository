<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    use HasFactory;
    protected $fillable = [
        'location' , "open_days" , "open_hours" , 'email1' , 'email2' , 'phone1', 'phone2'
    ];
}
