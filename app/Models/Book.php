<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function package()
    {
        return $this->hasOne('App\Models\Package');
    }
}
