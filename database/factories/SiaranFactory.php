<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Siaran;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siaran>
 */
class SiaranFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     *
     * @return array<string, mixed>
     */
    // protected $model = Siaran::class;


    public function definition()
    {
        return [
            'user_id' => mt_rand(1,20),
            'kategori_id' => mt_rand(1,2),
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(6,22)),
            //
        ];
   
        print("once");
     
    }

}