<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'lead' => $this->faker->paragraph(10),
            'content' => $this->faker->text(200),
            'author_id' => User::factory()->create()->id,
            'topic_id' => Topic::factory()->create()->id,
        ];
    }
}
