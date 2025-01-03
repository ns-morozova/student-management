<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'surname' => $this->faker->name,
            'group_id' => Group::inRandomOrder()->first()->id,
        ];
    }
}