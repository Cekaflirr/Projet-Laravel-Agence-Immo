<?php

namespace Database\Factories;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UtilisateurFactory extends Factory
{ 
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = \App\Models\Utilisateur::class;

    
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
            'id_roles' => '2',
        ];
    }
}
