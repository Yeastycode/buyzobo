<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }
}
