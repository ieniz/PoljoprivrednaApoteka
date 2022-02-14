<?php

namespace Database\Factories;
use App\Models\Kupac;

use Illuminate\Database\Eloquent\Factories\Factory;

class KupacFactory extends Factory
{   /**
    *The name of the factory's corresponding model.
    *
    * @var string
    
    */
    protected $model = Kupac::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName,
            'prezime'=>$this->faker->lastName,
            'telefon'=>$this->faker->phoneNumber,
            'grad'=>$this->faker->randomElement(['Bužim','Cazin','Sarajevo','Tuzla','Sanski Most']),
        ];
    }
}
