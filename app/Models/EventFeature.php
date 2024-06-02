<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventFeature extends Model
{
    protected $table = 'events_feature';
    protected $fillable = [
        'ourFeatures' , "event_id"
    ];
    use HasFactory;
    function event(){
        return $this->belongsTo(Event::class ,'event_id' , 'id');
    }
}
