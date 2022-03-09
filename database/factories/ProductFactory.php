<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(),
            'gambar' =>$this->faker-imageUrl(230, 140, 'products', true),
            'deskripsi' => $this->faker->realText(),
            'status' => random_int(0, 1),
        ];
    }
}
