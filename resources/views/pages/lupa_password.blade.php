@extends('layouts.cpp')

@section('title', 'Tambah Menu')

@section('content')

  <div
    class="min-h-screen flex items-center justify-center"
    style="background: linear-gradient(135deg, #7ad1ce 0%, #9bbde6 100%)"
  >
    <form
      class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md"
      autocomplete="off"
      novalidate
    >
      <h1 class="text-2xl font-extrabold text-gray-800 mb-8 text-center">
        Lupa Password
      </h1>

      <label
        for="email"
        class="block text-gray-800 font-semibold text-sm mb-2"
        >Alamat Email</label
      >
      <input
        id="email"
        type="email"
        placeholder="contoh@email.com"
        class="w-full border border-gray-300 rounded-lg px-4 py-3 mb-6 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
      />

      <label
        for="verification"
        class="block text-gray-800 font-semibold text-sm mb-2"
        >Kode Verifikasi</label
      >
      <input
        id="verification"
        type="text"
        placeholder="Masukkan kode Anda"
        class="w-full border border-gray-300 rounded-lg px-4 py-3 mb-8 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
      />

      <button
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg mb-6 transition-colors"
      >
        Kirim Kode Gmail
      </button>

      <div class="text-center">
        <a href="#" class="text-blue-600 font-medium text-sm hover:underline"
          >Kirim ulang kode</a
        >
      </div>
    </form>
  </div>
@endsection


