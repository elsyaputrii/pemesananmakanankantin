@extends('layouts.app')

    @section('title', 'Beranda')


    @section('content')

     <!-- Main content -->
   <main class="flex-1 p-6 space-y-4">
    <!-- Top bar -->
    <div class="bg-gray-300 rounded-md flex items-center justify-between px-4 py-2">
     <div class="font-semibold text-gray-900 text-sm">
      Menu Yang Tersedia
     </div>
     <div class="flex items-center space-x-2">
      <i class="fas fa-bell text-gray-600 text-base">
      </i>
      <input class="rounded-full text-xs text-gray-700 placeholder-gray-400 px-3 py-1 w-36 focus:outline-none" placeholder="Cari ....." type="text"/>
     </div>
    </div>
    <!-- Subtitle bar -->
    <div class="bg-gray-300 rounded-md px-4 py-3 font-semibold text-gray-900 text-sm">
     Mau makan apa hari ini? Pilih dan Pesan Saja
    </div>
    <!-- Food grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
     <!-- Card 1 -->
     <div class="bg-white rounded-md shadow-sm p-4">
      <img alt="Nasi Goreng with egg, shrimp, crackers, tomato slice on banana leaf plate" class="rounded-md w-full h-40 object-cover mb-3" height="300" src="https://storage.googleapis.com/a1aa/image/c9aee703-3e9b-4ddb-3d8b-128988c98452.jpg" width="600"/>
      <h3 class="font-bold text-sm mb-1">
       Nasi Goreng
      </h3>
      <p class="text-xs text-gray-500 mb-2">
       Nasi Goreng dengan ayam suwir
      </p>
      <div class="text-blue-600 font-semibold text-xs mb-2">
       10.000
      </div>
      <button class="bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded">
       Order Now
      </button>
     </div>
     <!-- Card 2 -->
     <div class="bg-white rounded-md shadow-sm p-4">
      <img alt="Soto Ayam soup with lime slice and shredded chicken in white bowl" class="rounded-md w-full h-40 object-cover mb-3" height="300" src="https://storage.googleapis.com/a1aa/image/1515d179-bdd3-4d7a-452e-d330982feb6a.jpg" width="600"/>
      <h3 class="font-bold text-sm mb-1">
       Soto Ayam
      </h3>
      <p class="text-xs text-gray-500 mb-2">
       Soto Ayam dengan koya gurih
      </p>
      <div class="text-blue-600 font-semibold text-xs mb-2">
       12.000
      </div>
      <button class="bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded">
       Order Now
      </button>
     </div>
     <!-- Card 3 -->
     <div class="bg-white rounded-md shadow-sm p-4">
      <img alt="Ayam Geprek with rice, cucumber slices, tomato slices, and fried chicken in basket" class="rounded-md w-full h-40 object-cover mb-3" height="300" src="https://storage.googleapis.com/a1aa/image/ec6e9848-0438-4ae2-3a01-16143f032075.jpg" width="600"/>
      <h3 class="font-bold text-sm mb-1">
       Ayam Geprek
      </h3>
      <p class="text-xs text-gray-500 mb-2">
       Ayam Geprek dengan pilihan level pedas
      </p>
      <div class="text-blue-600 font-semibold text-xs mb-2">
       15.000
      </div>
      <button class="bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded">
       Order Now
      </button>
     </div>
     <!-- Card 4 -->
     <div class="bg-white rounded-md shadow-sm p-4">
      <img alt="Es Teh iced tea with lemon slices and ice cubes in glass" class="rounded-md w-full h-40 object-cover mb-3" height="300" src="https://storage.googleapis.com/a1aa/image/b1bf7de8-e138-4b5b-96ec-cadaff1eaec4.jpg" width="600"/>
      <h3 class="font-bold text-sm mb-1">
       Es Teh
      </h3>
      <p class="text-xs text-gray-500 mb-2">
       Segar dan dingin
      </p>
      <div class="text-blue-600 font-semibold text-xs mb-2">
       5.000
      </div>
      <button class="bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded">
       Order Now
      </button>
     </div>
     <!-- Card 5 -->
     <div class="bg-white rounded-md shadow-sm p-4">
      <img alt="Jus Jeruk orange juice with orange slices and ice cubes in glass" class="rounded-md w-full h-40 object-cover mb-3" height="300" src="https://storage.googleapis.com/a1aa/image/b75523ae-15c2-4113-bc1c-077448881030.jpg" width="600"/>
      <h3 class="font-bold text-sm mb-1">
       Jus Jeruk
      </h3>
      <p class="text-xs text-gray-500 mb-2">
       Manis dan segar
      </p>
      <div class="text-blue-600 font-semibold text-xs mb-2">
       8.000
      </div>
      <button class="bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded">
       Order Now
      </button>
     </div>
     <!-- Card 6 -->
     <div class="bg-white rounded-md shadow-sm p-4">
      <img alt="Kopi Susu coffee with milk in cup on wooden table" class="rounded-md w-full h-40 object-cover mb-3" height="300" src="https://storage.googleapis.com/a1aa/image/61e9fb07-5b1d-452c-345b-6dcbcf309295.jpg" width="600"/>
      <h3 class="font-bold text-sm mb-1">
       Kopi Susu
      </h3>
      <p class="text-xs text-gray-500 mb-2">
       Kopi dengan susu kental manis
      </p>
      <div class="text-blue-600 font-semibold text-xs mb-2">
       10.000
      </div>
      <button class="bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded">
       Order Now
      </button>
     </div>
    </div>
   </main>

    @endsection