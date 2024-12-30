<?php

namespace Database\Factories;
use App\Models\User ;
use App\Models\Category;
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
            "title"=>$this->faker->word(),
            "body"=>$this->faker->text(),
            "user_id"=>User::get('id')->random(),
            "category_id"=>Category::get('id')->random(),
        ];
    }
}
