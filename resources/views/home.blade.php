<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
	@vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container mx-auto p-4">
    <!-- Title -->
    <h2 class="text-2xl font-bold text-center mb-6">Menu</h2>
    
    <!-- Menu Cards -->
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-xl transition-shadow">
            <img src="https://via.placeholder.com/150" alt="Makanan 1" class="w-full h-32 object-cover rounded-t-lg mb-4">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-md font-semibold">Makanan 1</h3>
                    <p class="text-gray-500">Rp 25.000</p>
                </div>
                <button class="text-xl text-gray-600 hover:text-gray-800">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-xl transition-shadow">
            <img src="https://via.placeholder.com/150" alt="Makanan 2" class="w-full h-32 object-cover rounded-t-lg mb-4">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-md font-semibold">Makanan 2</h3>
                    <p class="text-gray-500">Rp 30.000</p>
                </div>
                <button class="text-xl text-gray-600 hover:text-gray-800">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-xl transition-shadow">
            <img src="https://via.placeholder.com/150" alt="Makanan 3" class="w-full h-32 object-cover rounded-t-lg mb-4">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-md font-semibold">Makanan 3</h3>
                    <p class="text-gray-500">Rp 20.000</p>
                </div>
                <button class="text-xl text-gray-600 hover:text-gray-800">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-xl transition-shadow">
            <img src="https://via.placeholder.com/150" alt="Minuman 1" class="w-full h-32 object-cover rounded-t-lg mb-4">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-md font-semibold">Minuman 1</h3>
                    <p class="text-gray-500">Rp 15.000</p>
                </div>
                <button class="text-xl text-gray-600 hover:text-gray-800">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-xl transition-shadow">
            <img src="https://via.placeholder.com/150" alt="Minuman 2" class="w-full h-32 object-cover rounded-t-lg mb-4">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-md font-semibold">Minuman 2</h3>
                    <p class="text-gray-500">Rp 18.000</p>
                </div>
                <button class="text-xl text-gray-600 hover:text-gray-800">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-xl transition-shadow">
            <img src="https://via.placeholder.com/150" alt="Minuman 3" class="w-full h-32 object-cover rounded-t-lg mb-4">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-md font-semibold">Minuman 3</h3>
                    <p class="text-gray-500">Rp 12.000</p>
                </div>
                <button class="text-xl text-gray-600 hover:text-gray-800">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>
    </div>
</div>



</body>
</html>