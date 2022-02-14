<?php

namespace Database\Factories;
use App\Models\Brend;


use Illuminate\Database\Eloquent\Factories\Factory;

class BrendFactory extends Factory
{   /**
    *The name of the factory's corresponding model.
    *
    * @var string
    
    */
    protected $model = Brend::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this-> faker->randomElement(['AgroGold d.o.o','PoljoSement d.o.o','AppleBIH d.o.o','AgroSan d.o.o','BaštenNichols d.o.o','Ziegel d.o.o','Lasta d.o.o','Werštapen d.o.o','Bigšvajc d.o.o','Sana d.o.o']),
            'porijeklo' => $this-> faker->randomElement(['BH','DE','AU','CH','US','JP']),
        
        ];
    }
}
