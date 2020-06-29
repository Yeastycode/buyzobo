<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public function rider() {
        return $this->hasOne(Rider::class);
    }
}
