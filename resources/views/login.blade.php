<!DOCTYPE html>
<html class="h-full bg-white">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Selamat Datang</title>
	@vite('resources/css/app.css')
</head>
<body class="h-full">

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Selamat Datang !</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{ route('customer') }}" method="POST">
    @csrf
      <div>
        <label for="nomor-meja" class="block text-sm/6 font-medium text-gray-900">Nomor Meja</label>
        <div class="mt-2">
        	<!-- Nomor meja minimal 1 dan maksimal hingga 10 -->
          <input id="nomor-meja" name="nomor-meja" type="number" min="1" max="10" placeholder="Di meja mana anda akan duduk?" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="nama" class="block text-sm/6 font-medium text-gray-900">Nama</label>
        </div>
        <div class="mt-2">
          <input id="nama-customer" name="nama-customer" type="text" placeholder="Masukkan nama anda" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <label for="nomor-hp" class="block text-sm/6 font-medium text-gray-900">Nomor HP</label>
        <div class="mt-2">
          <input id="nomor-hp" name="nomor-hp" type="tel" placeholder="08xxxxxxxx" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Lanjut Pesan</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>