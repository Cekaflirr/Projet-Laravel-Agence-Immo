<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public $timestamps = false;

    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = \App\Models\USers::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'identifiant' => $this->faker->name(),
            'password' => 'azerty',
            'role' => 'Utilisateur',
            'del' => '0',
        ];
    }
}
