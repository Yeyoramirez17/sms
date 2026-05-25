<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Src\SMS\Students\Domain\ValueObjects\BloodType;
use Src\SMS\Students\Domain\ValueObjects\Gender;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'                => fake()->uuid(),
            'document_type'     => fake()->randomElement(['TI', 'CC', 'CE']),
            'document_number'   => fake()->unique()->numerify('##########'),
            'birth_date'        => $this->faker->dateTimeBetween('-18 years', '-5 years'),
            'gender'            => fake()->randomElement(Gender::cases()),
            'blood_type'        => fake()->randomElement(BloodType::VALID_TYPES),
            'eps_name'          => fake()->company() . ' EPS',
            'eps_code'          => 'EPS-' . fake()->numerify('###'),
            'address'           => fake()->address(),
            'phone'             => fake()->phoneNumber(),
            'student_code'      => 'EST-' . now()->year . '-' . fake()->unique()->numerify('####'),
            'photo_path'        => null,
            'attendant_name'    => fake()->name(),
            'attendant_relationship' => fake()->randomElement(['Padre', 'Madre', 'Tío/a', 'Abuelo/a']),
            'attendant_phone'   => fake()->phoneNumber(),
            'attendant_email'   => fake()->safeEmail(),
        ];
    }
}
