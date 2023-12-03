<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>$this->faker->sentence(),
            "slug"=>$this->faker->slug(),
            "image"=>$this->faker->imageUrl(1280,720),
            "description"=>$this->faker->text(800),

            "user_id"=>rand(1,5),
            "category_id"=>rand(1,3),
        ];
    }
}
