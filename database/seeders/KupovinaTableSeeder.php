<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kupovina;

class KupovinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kupovina::factory()->count(20)->create();
    }
}
