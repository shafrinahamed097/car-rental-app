<?php

namespace App\Http\Controllers;
use App\Models\Rental;
use App\Models\Car;

use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function book(Request $request) {
        $car = Car::find($request->car_id);
        
        $rental = Rental::create([
            // 'user_id' => auth()->id(),
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $car->daily_rent_price * $request->days,
        ]);
        return redirect()->route('rentals.history');
    }
    
}


