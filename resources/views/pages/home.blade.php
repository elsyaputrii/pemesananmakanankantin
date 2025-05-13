@extends('layouts.app')

@section('title', 'Beranda')


@section('content')

     <!-- Main content -->
  <main class="flex-1 p-6 md:p-10 flex flex-col gap-6">
    <!-- Top bar -->
    <div class="bg-[#90eecc] rounded-lg px-6 py-4 max-w-7xl w-full">
      <h2 class="font-extrabold text-[#1f2937] text-lg md:text-xl">DASHBOARD</h2>
    </div>

    <!-- Buttons -->
    <div class="flex gap-4 max-w-7xl w-full">
      <button
        class="border border-[#27ae60] text-[#27ae60] font-semibold rounded-md px-6 py-2 flex items-center gap-2 text-xs md:text-sm"
      >
        <i class="fas fa-receipt"></i> PESANAN
      </button>
      <button
        class="border border-[#27ae60] text-[#27ae60] font-semibold rounded-md px-6 py-2 flex items-center gap-2 text-xs md:text-sm"
      >
        <i class="fas fa-utensils"></i> MENU
      </button>
      <button
        class="border border-[#27ae60] text-[#27ae60] font-semibold rounded-md px-6 py-2 flex items-center gap-2 text-xs md:text-sm"
      >
        <i class="fas fa-chart-line"></i> PENDAPATAN
      </button>
    </div>

    <!-- Chart card -->
    <section
      class="bg-white rounded-xl p-6 max-w-7xl w-full shadow-md"
      aria-label="Pendapatan Penjualan per Bulan Chart"
    >
      <h3 class="font-extrabold text-[#1f2937] text-sm md:text-base mb-2">FOODERS | ADMIN</h3>
      <h4 class="font-semibold text-[#1f2937] text-base md:text-lg mb-6">
        Jumlah Pendapatan Penjualan per Bulan
      </h4>

      <!-- Chart -->
      <div class="overflow-x-auto">
        <svg
          width="100%"
          height="300"
          viewBox="0 0 700 300"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          role="img"
          aria-label="Bar chart showing monthly sales revenue in Indonesian Rupiah"
        >
          <!-- Y axis labels -->
          <text x="40" y="280" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="end">Rp 0</text>
          <text x="40" y="230" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="end">Rp 500.000</text>
          <text x="40" y="180" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="end">Rp 1.000.000</text>
          <text x="40" y="130" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="end">Rp 1.500.000</text>
          <text x="40" y="80" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="end">Rp 2.000.000</text>
          <text x="40" y="30" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="end">Rp 2.500.000</text>

          <!-- Grid lines -->
          <line x1="60" y1="280" x2="680" y2="280" stroke="#e5e7eb" stroke-width="1" />
          <line x1="60" y1="230" x2="680" y2="230" stroke="#e5e7eb" stroke-width="1" />
          <line x1="60" y1="180" x2="680" y2="180" stroke="#e5e7eb" stroke-width="1" />
          <line x1="60" y1="130" x2="680" y2="130" stroke="#e5e7eb" stroke-width="1" />
          <line x1="60" y1="80" x2="680" y2="80" stroke="#e5e7eb" stroke-width="1" />
          <line x1="60" y1="30" x2="680" y2="30" stroke="#e5e7eb" stroke-width="1" />

          <!-- Bars with consistent width and spacing -->
          <rect x="80" y="130" width="50" height="150" fill="#2ecc71" rx="8" ry="8" />
          <rect x="150" y="80" width="50" height="200" fill="#2ecc71" rx="8" ry="8" />
          <rect x="220" y="110" width="50" height="170" fill="#2ecc71" rx="8" ry="8" />
          <rect x="290" y="60" width="50" height="220" fill="#2ecc71" rx="8" ry="8" />
          <rect x="360" y="100" width="50" height="180" fill="#2ecc71" rx="8" ry="8" />
          <rect x="430" y="30" width="50" height="250" fill="#2ecc71" rx="8" ry="8" />

          <!-- X axis labels centered under bars -->
          <text x="105" y="295" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="middle">Jan</text>
          <text x="175" y="295" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="middle">Feb</text>
          <text x="245" y="295" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="middle">Mar</text>
          <text x="315" y="295" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="middle">Apr</text>
          <text x="385" y="295" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="middle">May</text>
          <text x="455" y="295" fill="#6b7280" font-size="12" font-family="Inter, sans-serif" text-anchor="middle">Jun</text>

          <!-- Legend -->
          <rect x="580" y="20" width="40" height="10" fill="#2ecc71" rx="2" ry="2" />
          <text x="625" y="30" fill="#6b7280" font-size="10" font-family="Inter, sans-serif" dominant-baseline="middle">Pendapatan (Rp)</text>
        </svg>
      </div>
    </section>
  </main>

@endsection