<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Package;

class Place extends Model
{
    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }


    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
