<?php

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name' => 'Karachi',
        ]);
        Location::create([
            'name' => 'Lahore',
        ]);
    }
}
