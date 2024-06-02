<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
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
            'title'=>fake()->sentence(),
            'slug'=>Str::slug(fake()->sentence()),
            'id_author'=>User::factory(),
            'body'=>fake()->text(300),
            //
        ];
    }
}

/**
 * Running the factory :
 * App\Models\Post::factory(x)->create();
 *
 * Recycle Data :
 * App\Models\Post::factory(x)->recycle(User::factory(x))->create();
 *
 */
