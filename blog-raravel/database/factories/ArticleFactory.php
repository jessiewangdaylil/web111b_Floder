<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return ['subject' => $this->faker->sentence,
            'content' => $this->faker->name,
            'enabled' => $this->faker->randomElement([true, false]),
            'cgy_id' => rand(0, 100),
            'sort' => $this->faker->unique()->randomnumber,
            'enabled_at' => Carbon::now()->addDay(rand(0, 10)),
            'pic' => 'https://images.unsplash.com/photo-' . rand(0, 10000) . '?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
        ];

    }
}