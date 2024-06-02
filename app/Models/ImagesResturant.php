<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesResturant extends Model
{
    protected $table = "images_resturant";
    protected $fillable = [
        "images"
    ];
    use HasFactory;
}
