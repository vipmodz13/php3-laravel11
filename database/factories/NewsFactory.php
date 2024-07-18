<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\News;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, // Tạo title ngẫu nhiên
            'content' => $this->faker->sentence, // Tạo content ngẫu nhiên
            'view' => $this->faker->numberBetween(1, 100), // Tạo số ngẫu nhiên từ 1 đến 100 cho view
            'img' => $this->faker->imageUrl(640, 480), // Tạo URL ảnh ngẫu nhiên
            'new_category_id' => $this->faker->numberBetween(1, 4), // Tạo số ngẫu nhiên từ 1 đến 100 cho view
        ];
    }
}
