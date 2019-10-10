<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    public function product()
    {
        return $this->BelongsTo('App\Product');
    }

    
}
