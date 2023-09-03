<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug(),
            'title' => $this->faker->name(),
            'contents' => $this->faker->text(),
            //\App\Models\Categoryからランダムに1つ取得
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            //\App\Models\Userからランダムに1つ取得
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
