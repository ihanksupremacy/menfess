<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isicomment'=>$this->faker->paragraphs(mt_rand(1,1),true),
            'post_id'=>mt_rand(1,20),
            'user_id'=>mt_rand(1,30),
        ];
    }
}
