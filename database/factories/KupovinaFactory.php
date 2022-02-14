<?php

namespace Database\Factories;
use App\Models\Kupovina;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

class KupovinaFactory extends Factory
{   /**
    *The name of the factory's corresponding model.
    *
    * @var string
    
    */
    protected $model = Kupovina::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
           
            'datumkupovine' => Carbon::now(),
            'kupac' =>$this->faker->numberBetween(1,20),
            'proizvod'=>$this->faker->numberBetween(1,20),
            
        ];
    }
}
