<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    public function orders() {
        return $this->hasManyThrough(Order::class, Delivery::class);
    }
}
