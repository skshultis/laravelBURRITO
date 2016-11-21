<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function burrito()
    {
        return $this->belongsTo(Burrito::class);
    }
}
