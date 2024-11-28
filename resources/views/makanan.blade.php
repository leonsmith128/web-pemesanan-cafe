<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Makanan</title>
	@vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body>

<x-navbar />

<!-- resources/views/menu.blade.php -->
<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 p-4">
    @foreach ($makanan as $item)
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
            <!-- Gambar Produk -->
            <img class="w-full h-48 object-contain" src="{{ asset('storage/images/makanan/'.$item->gambar) }}" alt="{{ $item->nama_produk }}">

            <!-- Konten Card -->
            <div class="px-6 py-4">
                <!-- Nama Produk -->
                <h2 class="font-bold text-xl text-gray-800">{{ $item->nama_produk }}</h2>
                
                <!-- Harga Produk -->
                <p class="text-gray-600 mt-2">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
            </div>

            <!-- Ikon Keranjang -->
            <div class="px-6 py-4 flex justify-between items-center">
                <button class="text-indigo-600 hover:text-indigo-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 9h18M3 15h18M3 21h18"></path>
                    </svg>
                </button>
            </div>
        </div>
    @endforeach
</div>


</body>
</html>