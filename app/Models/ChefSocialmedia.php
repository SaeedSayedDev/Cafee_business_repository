<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChefSocialmedia extends Model
{
    protected $table = "chefs_socialmedia";
    protected $fillable=[
        'facebook' , 'instagram' , 'twitter' ,'tiktok', 'chef_id'
    ];
    use HasFactory;
    
}
