@extends('layouts.cpp')

@section('title', 'Login')

@section('content')
<div class="min-h-screen w-full bg-gradient-to-br from-sky-400 to-sky-300 flex items-center justify-center p-4">
  <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-8 text-center">Halaman Login</h2>
    <form>
      <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
      <input
        id="username"
        type="text"
        placeholder="Masukkan Username"
        class="w-full border border-gray-300 rounded-lg px-4 py-3 mb-6 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400"
      />
      <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
      <input
        id="password"
        type="password"
        placeholder="Masukkan Password"
        class="w-full border border-gray-300 rounded-lg px-4 py-3 mb-6 text-gray-700 focus:outline-none focus:ring-2 focus:ring-sky-400"
      />
      <button
        type="submit"
        class="w-full bg-sky-600 hover:bg-sky-700 text-white font-semibold rounded-lg py-3 mb-4 transition-colors"
      >
        Login
      </button>
    </form>
    <div class="text-center">
      <a href="#" class="text-sky-600 font-medium text-sm hover:underline">Lupa Password?</a>
    </div>
  </div>
</div>

@endsection
