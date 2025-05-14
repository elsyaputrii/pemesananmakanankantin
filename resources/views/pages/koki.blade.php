@extends('layouts.app')

@section('title', 'Tambah Menu')

@section('content')


<!-- Main content -->
<main class="flex-1 p-6">
      <div class="overflow-x-auto border border-gray-300 rounded-md max-w-4xl mx-auto">
        <table class="w-full border-collapse border border-gray-300">
          <thead>
            <tr class="bg-gray-200">
              <th class="border border-gray-300 text-center py-8 px-5 text-sm font-semibold w-32 align-top">ID</th>
              <th class="border border-gray-300 text-center py-8 px-5 text-lg font-semibold w-full align-top">Nama pesanan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-gray-300 text-center py-8 px-5 font-bold text-sm w-32 align-top">A013</td>
              <td class="border border-gray-300 py-8 px-5 text-lg w-full align-top">Ayam geprek + teh obeng</td>
            </tr>
            <tr>
              <td class="border border-gray-300 text-center py-8 px-5 font-bold text-sm w-32 align-top">A014</td>
              <td class="border border-gray-300 py-8 px-5 text-lg w-full align-top">Soto ayam + air putih</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
    @endsection