@extends('layouts.cpp')

@section('title', 'register')

@section('content')

  <div class="min-h-screen w-full bg-gradient-to-br from-sky-400 to-sky-300 flex items-center justify-center p-4">
  <form class="bg-white rounded-xl border border-blue-600 shadow-md p-8 w-full max-w-md">
    <h2 class="text-center font-semibold text-gray-900 mb-6 text-lg">Daftar Akun</h2>
    <div class="mb-5">
      <label for="nama" class="block font-semibold text-gray-900 mb-1 text-sm">Nama Lengkap</label>
      <input id="nama" type="text" placeholder="Masukan Nama" class="w-full border border-gray-200 rounded-md px-4 py-3 text-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
    </div>
    <div class="mb-5">
      <label for="alamat" class="block font-semibold text-gray-900 mb-1 text-sm">Alamat</label>
      <textarea id="alamat" rows="3" placeholder="Masukan Alamat" class="w-full border border-gray-200 rounded-md px-4 py-3 text-gray-600 text-sm placeholder-gray-400 resize-none focus:outline-none focus:ring-1 focus:ring-blue-600"></textarea>
    </div>
    <div class="mb-5">
      <label for="nohp" class="block font-semibold text-gray-900 mb-1 text-sm">No HP</label>
      <input id="nohp" type="text" placeholder="Masukan No HP" class="w-full border border-gray-200 rounded-md px-4 py-3 text-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
    </div>
    <div class="mb-5">
      <label for="email" class="block font-semibold text-gray-900 mb-1 text-sm">Email address</label>
      <input id="email" type="email" placeholder="contoh@email.com" class="w-full border border-gray-200 rounded-md px-4 py-3 text-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
    </div>
    <div class="mb-5">
      <div class="flex justify-between items-center mb-1">
        <label for="password" class="font-semibold text-gray-900 text-sm">Password</label>
        <a href="#" class="text-gray-400 text-xs">Lupa Password?</a>
      </div>
      <input id="password" type="password" placeholder="Masukan Password" class="w-full border border-gray-200 rounded-md px-4 py-3 text-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
    </div>
    <div class="mb-6 flex items-start space-x-2">
      <input id="agree" type="checkbox" class="mt-1 w-4 h-4 text-blue-600 border border-gray-300 rounded focus:ring-blue-500" />
      <label for="agree" class="text-gray-900 text-sm">Apakah Anda setuju dengan <a href="#" class="text-blue-600">Syarat & Ketentuan?</a></label>
    </div>
    <button type="submit" class="w-full bg-blue-600 text-white font-semibold rounded-md py-3 hover:bg-blue-700 transition-colors">Daftar</button>
  </form>
</div>
@endsection