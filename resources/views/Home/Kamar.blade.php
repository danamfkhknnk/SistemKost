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
           <p class="text-gray-700 mb-4">
            Harga : Rp.{{$kamar->harga}}/Bulan 
           </p>
           @if (Auth::check())
           @if (Auth::user()->role == 'publik')
           <button data-modal-target="large-modal-{{ $kamar->id }}" data-modal-toggle="large-modal-{{ $kamar->id }}" type="button" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600">
               Pemesanan
           </button>
           <div id="large-modal-{{ $kamar->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-md dark:bg-gray-800">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">
                      Detail Kamar {{$kamar->nokamar}}
                    </h2>
                    <button type="button" class="text-gray-500 hover:text-gray-700 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center" data-modal-hide="large-modal-{{ $kamar->id }}">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-3">
                    <div class="grid lg:grid-cols-2 gap-2">
                      @foreach (explode(',', $kamar->gambarkamar) as $image)
                        <img src="{{ asset('gambarkamar/' . $image) }}" alt="Gambar kamar" class="rounded-md">
                      @endforeach
                    </div>
                    <h2 class="font-bold text-xl">Fasilitas Kamar</h2>                    
                    <p class="font-semibold text-sm">{{$kamar->tipe}}</p>
                    <p class="font-semibold text-sm">Wifi</p>
                    <p class="font-semibold text-sm">Listrik</p>
                    <p class="font-semibold text-sm">Air</p>
                    <p class="font-semibold text-sm">CCTV</p>
                    <p class="font-semibold text-sm">Sprei Baru Setiap Bulan</p>
                    <p class="font-semibold text-sm">Akses 24 Jam</p>
                    <p class="font-semibold text-sm">Dapur Umum</p>
                    <p class="font-semibold text-sm">Kasur</p>
                    <p class="font-semibold text-sm">Lemari</p>
                    <div class="border-t-2 border-secondary/50 py-3">
                      <div class="md:flex justify-between">
                        <p class="text-xl font-bold"> Rp.{{$kamar->harga}}/Bulan</p>
                        <form action="{{ route('pesanKamar', $kamar->id ) }}" method="POST">
                          @csrf
                          <input type="hidden" name="kamar_id" value="{{ $kamar->id }}">
                          <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                          <input type="hidden" name="tipe" value="baru"> <!-- Atau sesuaikan dengan logika Anda -->
                          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                              Pesan Sekarang
                          </button>
                      </form>
                      </div>
                    </div>
                  </div>                  
                </div>
            </div>
        </div>
        @elseif (Auth::user()->role == 'penyewa' || Auth::user()->role == 'admin')
        <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600" disabled>
          Pemesanan
      </button>
      @endif
            @else
            <a href="{{url('/login')}}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
              Silahkan Login
            </a>
            @endif
          </div>
         </div>
        @endforeach
      </div>

      
      
    </section>
  </div>