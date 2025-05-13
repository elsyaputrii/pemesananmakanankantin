 @extends('layouts.app')

    @section('title', 'Beranda')


    @section('content')
 
 <main class="flex-1 border border-[#3498db] p-8">
    <div class="max-w-md">
     <img alt="Fried chicken pieces with lime slices in an orange bowl on a wooden table with a spoon and a small plate with sauce" class="mb-10" height="400" src="https://storage.googleapis.com/a1aa/image/5b6dfb40-874d-4808-0f24-231d4501d724.jpg" width="400"/>
     <div class="flex items-center gap-10">
      <div>
       <h2 class="text-[#2ecc71] font-bold mb-2">
        Total bayar
       </h2>
       <div class="bg-[#2ecc71] text-white font-extrabold text-xl rounded-md px-4 py-2 w-max">
        12.000
       </div>
      </div>
      <button class="bg-[#3498db] text-white font-bold rounded-md px-6 py-3" type="button">
       Cetak Nomor
      </button>
     </div>
     <p class="text-center text-gray-700 font-semibold mt-20">
      silahkan melakukan pembayaran di kasir
     </p>
    </div>
   </main>

    @endsection
