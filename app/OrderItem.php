<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    function getCost()
    {
        return $this->quantity * $this->price;
    }
}
