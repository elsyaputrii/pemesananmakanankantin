@extends('layouts.app')

    @section('title', 'Beranda')


    @section('content')

     <main class="flex-1 p-8">
   <h2 class="text-gray-900 font-semibold text-lg mb-6">
    Pesanan
   </h2>
   <img alt="Chicken soup with rice and green leaf on white plate" class="rounded-lg mb-6 max-w-[300px]" height="160" src="https://rinaresep.com/wp-content/uploads/2022/09/SOTO-AYAM.jpg" width="300"/>
   <form class="space-y-6 max-w-4xl">
    <input class="w-full border border-blue-600 rounded-full px-4 py-2 text-gray-900 focus:outline-none focus:ring-1 focus:ring-blue-600" type="text" value="Soto ayam"/>
    <div>
     <label class="block text-xs font-semibold mb-1 text-gray-900" for="jumlah">
      Jumlah Pesanan
     </label>
     <select class="w-full border border-blue-600 rounded-full px-4 py-2 text-gray-900 focus:outline-none focus:ring-1 focus:ring-blue-600" id="jumlah">
      <option>
       1
      </option>
     </select>
    </div>
    <div>
     <label class="block text-xs font-semibold mb-1 text-gray-900" for="total">
      Total Pembayaran
     </label>
     <input class="w-full border border-blue-600 rounded-full px-4 py-2 text-gray-900 focus:outline-none focus:ring-1 focus:ring-blue-600" id="total" type="text" value="12.000"/>
    </div>
    <div class="flex gap-4">
     <button class="bg-green-700 text-white font-bold rounded-lg px-6 py-2 uppercase" type="submit">
      Bayar
     </button>
     <button class="bg-green-700 text-white font-bold rounded-lg px-6 py-2 uppercase" type="button">
      Cancel
     </button>
     <button
  class="bg-green-600 hover:bg-green-700 text-white text-lg font-extrabold rounded-xl px-8 py-3 shadow-md transition duration-200"
  type="button">
  TAMBAH PESANAN?
</button>
    </div>
   </form>
  </main>

    @endsection