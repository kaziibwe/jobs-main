<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class listingfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>$this->faker->sentence(),
            'tags' =>'laravel,api,backend',
            'company' =>$this->faker->company(),
            'email' =>$this->faker->companyEmail(),
            'description' =>$this->faker->paragraph(5)
        ];
    }
}
