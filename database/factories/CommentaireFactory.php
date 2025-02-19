<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commentaire;
use App\Models\Publication;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Commentaire::class;

    public function definition(): array
    {
        return [
            'content' => $this->faker->paragraph(),
            'pub_id' => Publication::factory(),
            'user_id' => User::factory(),
        ];
    }
}
