<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * User
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Creates a new user
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @param string $phone
     * @param UserAddress $address
     * @return User
     */
    public static function createNew($name, $email, $password, $phone, UserAddress $address)
    {
        return new self([
            "name" => $name,
            "password" => $password,
            "phone" => $phone,
            "address" => $address,
            "email" => $email
        ]);
    }

    /**
     * Save the address
     *
     * @param UserAddress $address
     * @return void
     */
    public function setAddressAttribute(UserAddress $address)
    {
        $address->save();
        $this->address_id = $address->id;
    }
}
