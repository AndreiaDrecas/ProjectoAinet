<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
   

    public function run()
    {
        DB::table('users')->delete();
        factory(App\User::class, 10)->create();
    }
}
