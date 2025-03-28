<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(3),
            'description' => fake()->text(200),
            "ends_at" => fake()->dateTimeBetween("now", "+3 days"),
            "status" => fake()->randomElement(["open", "closed"]),
            "tech_stack" => fake()->randomElements(["react", "php", "laravel", "vue", "javascript", "python"], random_int(1, 5)),
            "created_by" => User::factory(),
        ];
    }
}
