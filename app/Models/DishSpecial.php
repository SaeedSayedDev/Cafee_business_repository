<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishSpecial extends Model
{
    protected $table = 'dish_specials';
    protected $fillable = [
        'dish_name' , 'dish_title', 'dish_desc_top'  , 'dish_desc_bottom' ,  'dish_image'
    ];
    use HasFactory;
}
