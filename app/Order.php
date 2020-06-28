<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getQuantityAttribute()
    {
        return $this->items()->sum('quantity');
    }

    public function getTotalCost()
    {
        return $this->items->reduce(function ($carriedCost, OrderItem $item) {
            return $carriedCost + $item->getCost();
        }, 0.00);
    }

    public function delivery() {
        return $this->hasOne(Delivery::class);
    }
}
