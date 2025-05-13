@extends('layouts.app')

    @section('title', 'Beranda')


    @section('content')

     <main class="flex-1 p-8 relative">
   <h2 class="text-black font-semibold text-lg mb-6">
    Pesanan
   </h2>
   <div class="flex flex-wrap items-center gap-8 max-w-xl">
    <div>
     <img alt="A bowl of yellow chicken soup with vegetables and herbs, accompanied by small bowls of sauce and pink flower garnishes on a white plate" class="rounded-lg" height="250" src="https://rinaresep.com/wp-content/uploads/2022/09/SOTO-AYAM.jpg"/>
     <h3 class="text-black font-semibold text-base mt-3">
      Soto Ayam
     </h3>
    </div>
    <button class="bg-green-600 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-green-700 transition">
     + Tambah Menu
    </button>
   </div>
   <button class="bg-green-600 text-white font-semibold px-8 py-4 rounded-lg shadow-md hover:bg-green-700 transition absolute bottom-8 right-8">
    Lanjut ke Pembayaran
   </button>
  </main>
        

    @endsection