<?php

namespace App;

use App\Itinerary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    
    public function itinerary()
    {
        return $this->belongsTo(Itinerary::class);
    }
}
