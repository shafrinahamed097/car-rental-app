<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Sidebar -->
    <div class="flex flex-no-wrap">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 shadow-lg h-screen">
            <div class="p-4 text-white">
                <h1 class="text-xl font-bold">Admin Dashboard</h1>
            </div>
            <ul class="mt-6">
                <li>
                    <a href="{{ route('admin.cars.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Manage Cars</a>
                </li>
                <li>
                    <a href="{{ route('admin.rentals.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Manage Rentals</a>
                </li>
                <li>
                    <a href="{{ route('admin.customers.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Manage Customers</a>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="flex-1 bg-gray-100 p-6">
            <div class="container mx-auto">
                <h1 class="text-2xl font-semibold mb-6">Dashboard Overview</h1>
                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-gray-700 text-lg font-bold">Total Cars</h2>
                        <p class="mt-4 text-2xl">{{ $totalCars }}</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-gray-700 text-lg font-bold">Available Cars</h2>
                        <p class="mt-4 text-2xl">{{ $availableCars }}</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-gray-700 text-lg font-bold">Total Rentals</h2>
                        <p class="mt-4 text-2xl">{{ $totalRentals }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
