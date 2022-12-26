<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id' => $this->faker->numberBetween(1, 10),
            'title' => $title = $this->faker->sentence,
            'slug' => Str::slug($title),
            'content' => $this->faker->text(500),
            'company' => $this->faker->company,
            'image' => $this->faker->imageUrl(640, 480, 'technics', true),
            'location' => $this->faker->city,
            'type' => $this->faker->randomElement(['Full-time', 'Part-time']),
            'salary' => $this->faker->randomElement(['$1000', '$2000', '$3000', '$4000', '$5000']),
            'category' => $this->faker->randomElement(['Frontend', 'Backend', 'Fullstack']),
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'deadline' => $this->faker->date(),
        ];
    }
}
