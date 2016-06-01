<?php

use Illuminate\Database\Seeder;

class AdvertisementsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('advertisements')->delete();
        factory(App\Advertisement::class, 10)->create();

        

        
    }
}
