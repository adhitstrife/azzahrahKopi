<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public function imageNews()
    {
        return $this->hasOne('App\ImageNews','news_id');
    }
}
