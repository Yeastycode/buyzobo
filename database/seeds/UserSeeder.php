<?php

use App\User;
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
        new User::createNew("Popsana Barida", "popsyjunior@gmail.com", "timberland", "08059958585", "No 7 Bailey street, yaba");
    }
}
