<?php

namespace Database\Factories;


use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Factories\Factory;


class KategoriModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string  
     */
    protected $model = KategoriModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'kategori' => $this->faker->name(),
        ];
    }
}
