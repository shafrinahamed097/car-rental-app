<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rental;

class RentalSeeder extends Seeder
{
    public function run()
    {
        
        Rental::factory()->count(28)->create();
    }
}
