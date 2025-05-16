@extends('layouts.app')

    @section('title', 'Beranda')


    @section('content')

   <div class="flex-1 p-6">
    <img alt="Bowl of Indonesian beef soup with lime, vegetables, and side dishes including rice and chili sauce" class="mb-8 max-w-xs" height="150" src="https://storage.googleapis.com/a1aa/image/9727aa09-f7e1-4592-1abe-cb12225004f0.jpg" width="300"/>
    <div class="flex justify-between items-center mb-8 max-w-xs">
     <p class="font-semibold text-lg">
      Total bayar
     </p>
     <button class="bg-indigo-200 text-indigo-900 font-bold px-4 py-2 rounded">
      Cetak Nomor
     </button>
    </div>
    <p class="max-w-xs font-semibold text-xl bg-gray-300 inline-block px-3 py-1 mb-8">
     12.000
    </p>
    <p class="font-semibold text-lg max-w-xs">
     silahkan melakukan pembayaran di kasir
    </p>
   </div>
  </div>

  @endsection