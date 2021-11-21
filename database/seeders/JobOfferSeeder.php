<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$ownerExists = Owner::where('email', '=', $email)->first();

        //if(!$ownerExists) {
            $owner = new Owner();
            $owner->owner = "Peter " . mt_rand(1, 2);
            $owner->email = $email;
            $owner->save();
        //}
    }
}
