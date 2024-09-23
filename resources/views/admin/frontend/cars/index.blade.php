<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Cars</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-gray-800 p-4 text-white">
        <h1 class="text-2xl">Car Rental Service</h1>
    </header>

    <div class="container mx-auto my-8">
        <h2 class="text-3xl font-semibold mb-6">Browse Available Cars</h2>

        <div class="grid grid-cols-3 gap-4">
            @foreach($cars as $car)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <img src="{{ asset('images/cars/' . $car->image) }}" alt="{{ $car->name }}" class="w-full h-40 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold">{{ $car->name }}</h3>
                    <p class="text-gray-700">{{ $car->brand }} - {{ $car->model }}</p>
                    <p class="text-gray-700">Daily Rent: ${{ $car->daily_rent_price }}</p>
                    <p class="text-gray-700">{{ $car->car_type }}</p>
                    <a href="{{ route('rentals.book', $car->id) }}" class="block mt-4 bg-green-500 text-white text-center py-2 rounded hover:bg-green-600">Book Now</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
