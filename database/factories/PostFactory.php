<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Post::class;
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(10, 20)),
            'body' => $this->faker->paragraphs(mt_rand(10, 15), true),
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 2),
            'created_at' => $this->faker->dateTimeBetween('-3 months', '-2 months'),
            'updated_at' => $this->faker->dateTimeBetween('-2 months', '-1 months'),
            'published_at' => $this->faker->dateTimeBetween('-1 months', '-1 days'),
        ];
    }
}
