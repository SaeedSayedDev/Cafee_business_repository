<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $table = "menu_item";
    protected $fillable = [
        'name', 'description','price' , 'category_id'
    ];

    function category()
    {
        return $this->belongsTo(MenuCategory::class,'category_id','id');
    }
}

