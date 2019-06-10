<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Place;
use App\Models\Book;

class Package extends Model
{
    public function places()
    {
        return $this->belongsToMany(Place::class);
    }


    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
