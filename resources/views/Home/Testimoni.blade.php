    <!-- Section Testimoni -->
    <section class="pt-14 bg-white">
      <div class="container h-[300px]">
        <div class="text-center mb-4 max-w-[700px] mx-auto">
          <h1 class="text-xl font-bold">Para Penghuni Mengatakan</h1>
          <p class="pt-2 text-center text-sm">
            Lihat pengalaman para penghuni kami tentang kenyamanan tinggal di Kost Putra Tentrem Mulyo. Temukan alasan mengapa kost ini jadi pilihan terbaik!
          </p>
        </div>
          <!-- Carousel Container -->
          <div id="testimonialCarousel" class="relative " data-carousel="slide">
              <div class="relative h-96 overflow-hidden rounded-lg">
                @foreach ($testi as $testi)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex items-center justify-center ">
                        <div class="text-center rounded-xl lg:px-40 px-10 py-10 bg-dark/5">
                            <h5 class="text-lg font-bold">{{$testi->user->nama}}</h5>
                            <p class="mt-2 text-gray-600">"{{$testi->testi}}"</p>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>
          </div>
      </div>
  </section>

  