<?php

namespace App\Http\Controllers;

use App\Models\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::where('availability', true)->get();
        return view('frontend.cars.index', compact('cars'));
    }
    
}
