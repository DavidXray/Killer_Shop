<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'name', 'categories_id', 'price', 'qty', 'description'
    ];

    protected $hidden = [

    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
    
}
