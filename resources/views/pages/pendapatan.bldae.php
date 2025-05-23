@extends('layouts.app')

@section('title', 'pendapatan')

@section('content')

<!-- Main content vertical -->
    <main class="flex-1 p-12">
      <table class="w-full border border-black border-collapse text-[18px] font-sans">
        <thead>
          <tr class="bg-gray-400 border border-black">
            <th class="border border-black px-8 py-5 text-left w-[20%]">Id</th>
            <th class="border border-black px-8 py-5 text-left w-[80%]">Pemesan</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border border-black bg-white">
            <td class="border border-black px-8 py-8 font-bold text-center align-top">A013</td>
            <td class="border border-black px-8 py-8 align-top leading-relaxed">
              <div class="mb-4">Ayam Geprek + Teh Obeng</div>
              <div class="text-center font-bold mb-4">18:00 pm</div>
              <div class="text-right">Rp.13.000,-</div>
            </td>
          </tr>
          <tr class="border border-black bg-white">
            <td class="border border-black px-8 py-8 font-bold text-center align-top">A014</td>
            <td class="border border-black px-8 py-8 align-top leading-relaxed">
              <div class="mb-4">Soto Ayam + Air Mineral</div>
              <div class="text-center font-bold mb-4">18:49 pm</div>
              <div class="text-right cursor-default">Rp 23.000,-</div>
            </td>
          </tr>
          <tr class="bg-gray-400 border border-black font-bold text-[18px]">
            <td class="border border-black px-8 py-6 text-center" colspan="2">Pendapatan Saat Ini: Rp.36.000,-</td>
          </tr>
        </tbody>
      </table>
    </main>
    @endsection