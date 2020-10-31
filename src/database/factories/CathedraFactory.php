<?php

namespace Database\Factories;

use App\Models\Faculty;
use App\Models\Cathedra;
use Illuminate\Database\Eloquent\Factories\Factory;

class CathedraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cathedra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'name' => $this->faker->sentence(3),
        //     'thumbnail' => 'http://placehold.it/350x200',
        //     'faculty_id' => $this->faker->randomElement(Faculty::get()->pluck('id')->toArray())
        // ];
    }
}
