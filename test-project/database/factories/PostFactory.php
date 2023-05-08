<?php

namespace Database\Factories;

use App\Models\MyPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyPost>
 */
class PostFactory extends Factory
{
    protected $model = MyPost::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'status' => rand(0,1),
            'published_at' => fake()->date(),
            'userid' => 1,
            'category_id' => rand(1, 4)
        ];
    }
}
