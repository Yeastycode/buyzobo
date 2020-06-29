<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    public static function createNew($houseNumber, $streetName, $city, $state)
    {
        return new self([
            "house_number" => $houseNumber,
            "city" => $city,
            "state" => $state,
            "street_name" => $streetName
        ]);
    }
}
