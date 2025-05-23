@extends('layouts.mpp')

@section('title', 'qriss')

@section('content')

 <main class="flex-1 flex flex-col justify-center items-center px-4">
   <img alt="Black and white QR code with square patterns" class="mb-20" height="200" src="https://storage.googleapis.com/a1aa/image/edb26c76-ae3c-425e-a968-9ff00d745c3f.jpg" width="200"/>
   <div class="w-full max-w-md flex justify-between px-8">
    <button class="bg-[#3B5FC4] text-white font-semibold text-sm rounded-xl px-8 py-3 flex items-center justify-center gap-2 shadow-md" type="button">
     <i class="fas fa-money-bill-wave">
     </i>
     Cash
    </button>
    <button class="bg-[#3B5FC4] text-white font-semibold text-sm rounded-xl px-8 py-3 flex items-center justify-center gap-2 shadow-md" type="button">
     <i class="fas fa-print">
     </i>
     Cetak Nomor
    </button>
   </div>
  </main>

   @endsection


