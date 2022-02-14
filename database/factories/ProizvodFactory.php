<?php

namespace Database\Factories;
use App\Models\Proizvod;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProizvodFactory extends Factory
{   /**
    *The name of the factory's corresponding model.
    *
    * @var string
    
    */
    protected $model = Proizvod::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this-> faker->randomElement(['Sjeme ljubičice','Lopata','Šlauf','Motorka','Pumpa za vodu','Insekticid 1L','Makaze za voće','Sjeme lavande','Vosak za voće','Pogače za pčele','Pčelarsko odjelo','Varolik','Otrov za štetočine','Metla','Hranilica za ptice',]),
            'kod' => $this-> faker->unique()->numberBetween(1 , 1000),
            'proizvodnja' => Carbon::now(),
            'cjena' => $this->faker->randomDigit(),
            'brend'=>$this->faker->numberBetween(1,20),
            
            
        ];
    }
}
