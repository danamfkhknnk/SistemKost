<div class="pt-14 pb-10 container" id="paket">
    <section data-aos="fade-up" class="container">
      <div class="text-center mb-4 max-w-[700px] mx-auto">
        <h1 class="text-xl font-bold">Kamar Yang Tersedia</h1>
        <p class="pt-2 text-center text-sm">
          Nikmati kenyamanan tinggal di Kost Putra Tentrem Mulyo dengan fasilitas lengkap dan harga terjangkau. Tersedia pilihan kamar standar dan eksklusif yang siap mendukung kebutuhan Anda. Hubungi kami sekarang untuk informasi lebih lanjut dan reservasi!
        </p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 ">
        @foreach ($kamar as $kamar)
        <div class="bg-white rounded-lg shadow-md p-4">            
          @php
          // Mengambil gambar pertama dari kolom gambarkamar
          $firstImage = explode(',', $kamar->gambarkamar)[0] ?? null; // Mengambil gambar pertama, jika ada
      @endphp
      
      @if ($firstImage)
          <img class="w-full h-48 object-cover rounded-t-lg" height="200" src="{{ asset('gambarkamar/' . $firstImage) }}" width="300"/>
      @endif
          <div class="p-4">
           <h2 class="text-xl font-bold mb-2">
            No kamar : {{$kamar->nokamar}}
           </h2>
           <p class="text-gray-700 mb-2">
            Tipe: {{$kamar->tipe}}
           </p>
           <p class="text-gray-700 mb-2">
            Harga : Rp.{{$kamar->harga}} 
           </p>
           <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600">
            Pesan
           </button>
          </div>
         </div>
        @endforeach
      
    </section>
  </div>