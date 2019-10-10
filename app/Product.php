<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'price'
    ];

    public function image()
    {
        return $this->hasOne('App\images');
    }
}
