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
            'titleFromTablePost' => fake()->sentence(mt_rand(2,8)),
            'slugFromTablePost' => fake()->slug(mt_rand(4,5)),
            'excerptFromTablePost' => fake()->sentence(mt_rand(10,20)),
            // 'bodyFromTablePost' => '<p>'. implode('</p><p>',fake()->paragraphs(mt_rand(5,10))),'</p>',
            'bodyFromTablePost' => collect(fake()->paragraphs(mt_rand(5,10)))
                ->map(function($p){
                    return "<p>$p</p>";
                })
                ->implode(''),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,3    )
        ];
    }
}
