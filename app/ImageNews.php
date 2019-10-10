<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageNews extends Model
{
    public function news()
    {
        return $this->belongsTo('App\news');
    }
}
