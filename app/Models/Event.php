<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_name' , 'event_price' , 'event_image' , 'event_desc_top' , 'event_desc_bottom'
    ];
    use HasFactory;

    function event_feature(){
        return $this->hasMany(EventFeature::class , 'event_id' , 'id');
    }
    
}
