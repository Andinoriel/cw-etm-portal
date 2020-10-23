<?php

namespace Database\Factories;

use App\Models\Cathedra;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'mid_name' => $this->faker->name(),
            'degree' => $this->faker->sentence(2),
            'about' => $this->faker->sentence(50),
            'thumbnail' => 'http://placehold.it/350x200',
            'cathedra_id' => $this->faker->randomElement(Cathedra::get()->pluck('id')->toArray())
        ];
    }
}
