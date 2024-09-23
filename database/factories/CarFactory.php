<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        $carNames = ['Toyota Camry', 'Honda Civic', 'Ford Mustang', 'Chevrolet Malibu', 'BMW X5', 'Audi Q7', 'Mercedes GLA', 'Nissan Altima', 'Jeep Wrangler', 'Kia Sorento'];
        $brands = ['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW', 'Audi', 'Mercedes', 'Nissan', 'Jeep', 'Kia'];
        $carTypes = ['Sedan', 'SUV', 'Hatchback', 'Convertible'];
        $years = range(2010, 2023);

        return [
            'name' => $this->faker->randomElement($carNames),
            'brand' => $this->faker->randomElement($brands),
            'model' => 'Model-' . $this->faker->numberBetween(1, 100),
            'year' => $this->faker->randomElement($years),
            'car_type' => $this->faker->randomElement($carTypes),
            'daily_rent_price' => $this->faker->randomFloat(2, 30, 200), 
            'availability' => $this->faker->boolean(),
            'image' => 'car_image_' . $this->faker->numberBetween(1, 100) . '.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
