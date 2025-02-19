<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Categories;
use App\Models\Recettes;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recettes>
 */
class RecettesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Recettes::class;

    public function definition(): array
    {


        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'ingredients' => $this->faker->text(200),
            'instructions' => $this->faker->text(300),
            'image_url' => $this->faker->imageUrl(),
            'user_id' => User::factory(),
            'categorie_id' => Categories::factory()
        ];
    }
}
