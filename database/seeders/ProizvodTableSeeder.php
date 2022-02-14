<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proizvod;

class ProizvodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proizvod::factory()->count(20)->create();
    }
}
