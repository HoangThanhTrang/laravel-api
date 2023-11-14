<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['I','B']);
        $name = $type == 'I' ? $this->faker->name() : $this->faker->company(); // faker được hiểu như là thư viện tự fake data cho mình
        return [
            'name'=>$name,
            'type'=>$type,
            'email'=>$this->faker->email(),
            'address'=>$this->faker->address
        ];
    }
}
