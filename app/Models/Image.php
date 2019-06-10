<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Place;

class Image extends Model
{
    function place()
    {
        return $this->belongsTo(Place::class);
    }
}
