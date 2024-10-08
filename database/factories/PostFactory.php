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
            // 'judul'=>$this->faker->sentence(mt_rand(2,8)),
            // 'slug'=>$this->faker->slug()
            'isi'=>$this->faker->paragraphs(mt_rand(1,1),true),
            'user_id'=>mt_rand(1,5),
  
        ];
    }
}
