<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class RentalFactory extends Factory
{
    protected $model = Rental::class;

    public function definition()
    {
        
        $user = User::inRandomOrder()->first();
        $car = Car::inRandomOrder()->first();
        
        
        $startDate = Carbon::now()->addDays($this->faker->numberBetween(-30, 30));  // Randomly 30 days in the past or future
        $endDate = (clone $startDate)->addDays($this->faker->numberBetween(1, 15)); // Random end date, 1 to 15 days after start
        
        
        $daysRented = $startDate->diffInDays($endDate);
        $totalCost = $daysRented * $car->daily_rent_price;

        return [
            'user_id' => $user->id,
            'car_id' => $car->id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'total_cost' => round($totalCost, 2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
