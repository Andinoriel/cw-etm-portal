<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'short_description' => $this->faker->sentence(10),
            'description' => $this->faker->sentence(50),
            'thumbnail' => 'http://placehold.it/350x200',
            'url_download' => 'https://www.google.com/intl/en_US/drive/',
            'created_at' => now(),
            'updated_at' => now(),
            'teacher_id' => $this->faker->randomElement(Teacher::get()->pluck('id')->toArray())
        ];
    }
}
