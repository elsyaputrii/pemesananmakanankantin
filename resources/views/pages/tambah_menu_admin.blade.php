@extends('layouts.mpp')

@section('title', 'Tambah Menu')

@section('content')

<!-- Main content -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
    <h2 class="text-xl font-normal mb-4 md:mb-0">
      Tambah Menu
    </h2>
    <div class="flex gap-4">
      <button class="bg-[#3fc36e] text-white rounded-md px-5 py-2 flex items-center gap-2 font-normal text-sm">
        <i class="fas fa-plus"></i>
        Tambah Menu
      </button>
      <button class="bg-[#3b8ad8] text-white rounded-md px-5 py-2 flex items-center gap-2 font-normal text-sm">
        <i class="fas fa-file-pdf"></i>
        Export PDF
      </button>
    </div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-5xl">
    {{-- Contoh Menu --}}
    <!-- Card Menu 1 -->
    <article class="bg-white rounded-lg shadow-sm overflow-hidden">
      <img src="https://i2.wp.com/resepkoki.id/wp-content/uploads/2017/07/Resep-Ayam-geprek-jogja.jpg?fit=2322%2C2167&ssl=1" class="w-full object-cover h-48 rounded-t-lg" alt="..." />
      <div class="p-4">
        <h3 class="font-semibold text-lg mb-1">AYAM GEPREK</h3>
        <p class="text-[#3a8a3a] font-semibold text-sm mb-3">Rp 15.000</p>
        <div class="flex gap-2">
          <button class="bg-[#2f6b3f] text-white rounded px-3 py-1 text-xs flex items-center gap-1">
            <i class="fas fa-edit"></i> Edit
          </button>
          <button class="bg-[#dc3545] text-white rounded px-3 py-1 text-xs flex items-center gap-1">
            <i class="fas fa-trash-alt"></i> Hapus
          </button>
        </div>
      </div>
    </article>
    <!-- Tambah menu lainnya di sini -->
  </div>
@endsection
