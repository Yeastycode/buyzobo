<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    function getCost()
    {
        return $this->quantity * $this->price;
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function product() {
        return $this->hasOne(Product::class);
    }
}
