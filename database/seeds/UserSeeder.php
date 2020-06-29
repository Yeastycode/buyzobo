<?php

use App\User;
use App\UserAddress;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $address = $address = UserAddress::createNew("26", "Baileys Street", "Lagos", "Lagos");
        $user = User::createNew("Popsana Barida", "popsyjunior@gmail.com", "timberland", "08059958585", $address);

        $user->save();
    }
}
