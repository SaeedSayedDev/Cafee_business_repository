<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $table = "chefs";
    protected $fillable =[
        'image' ,'name' , 'job_title'
    ];
    use HasFactory;
    function chef_social(){
        return $this->hasMany(ChefSocialmedia::class , 'chef_id' , 'id');
    }
}
