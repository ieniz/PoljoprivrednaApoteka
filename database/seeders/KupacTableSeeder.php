<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kupac;

class KupacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kupac::factory()->count(20)->create();
    }
}
