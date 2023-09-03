<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            //ダミー画像を生成して、storage/app/public/imagesに保存
            'path' => $this->faker->image('storage/app/public/images', 640, 480, null, false),
            'type' => $this->faker->mimeType(),
            //\App\Models\Userからランダムに1つ取得
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
