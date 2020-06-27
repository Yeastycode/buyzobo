<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    function createNew($houseNumber, $streetName, $city, $state)
    {
        return new self([
            "house_number" => $houseNumber,
            "city" => $city,
            "state" => $state,
            "street_name" => $streetName
        ]);
    }
}
