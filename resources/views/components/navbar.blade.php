<nav class="bg-gray-800 text-white p-4 shadow-md">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo (kiri) -->
        <div class="text-2xl font-bold">
            <a href="/" class="text-white">Logo</a>
        </div>

        <!-- Link Navigasi (tengah) -->
        <div class="hidden md:flex space-x-6">
            <a href="/makanan" class="{{ Request::is('makanan') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 hover:text-white' }} px-4 py-2 rounded">Makanan</a>
            <a href="/minuman" class="{{ Request::is('minuman') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 hover:text-white' }} px-4 py-2 rounded">Minuman</a>
            <a href="/about" class="{{ Request::is('about') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 hover:text-white' }} px-4 py-2 rounded">About Us</a>
        </div>

        <!-- Ikon Keranjang (kanan) -->
        <div class="hidden md:flex items-center">
            <a href="/keranjang" class="text-xl text-white hover:bg-gray-700 p-2 rounded">
                <i class="fas fa-shopping-cart"></i> <!-- Gunakan font awesome untuk ikon keranjang -->
            </a>
        </div>

        <!-- Ikon Hamburger untuk tampilan mobile -->
        <div class="md:hidden flex items-center">
            <button id="hamburger-icon" class="text-2xl text-white">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Menu Dropdown untuk Tampilan Mobile -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-800 text-white w-full shadow-md">
        <div class="flex flex-col items-center py-4">
            <a href="/makanan" class="{{ Request::is('makanan') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 hover:text-white' }} py-2">Makanan</a>
            <a href="/minuman" class="{{ Request::is('minuman') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 hover:text-white' }} py-2">Minuman</a>
            <a href="/about" class="{{ Request::is('about') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 hover:text-white' }} py-2">About Us</a>
            <a href="/keranjang" class="py-2 hover:bg-gray-700 hover:text-white">
                <i class="fas fa-shopping-cart"></i> Keranjang
            </a>
        </div>
    </div>
</nav>

<script>
    // JavaScript untuk toggle menu hamburger
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburgerIcon.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>