<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="relative w-full h-screen">
   <div class="absolute inset-0 flex flex-col justify-center text-center items-center text-white z-20">
    <p class="lg:text-5xl text-md md:text-3xl font-bold text-uppercase" data-aos="fade-up">
     KOST MODERN, FASILITAS LENGKAP, HARGA BERSAHABAT
    </p>
    <p class="font-bold text-lg md:text-5xl lg:text-7xl" data-aos="fade-up" data-aos-delay="300">
     KOST PUTRA TENTREM MULYO
    </p>
   </div>
   <div class="relative w-full h-full z-[-99]" data-carousel="slide" id="testimonialCarousel">
    <div class="relative h-full overflow-hidden rounded-lg ">
     @foreach (explode(',', $info->galeri) as $image)
     <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
      <img src="{{ asset('home/' . $image) }}" class="absolute right-0 top-0 w-full object-cover h-full " alt="">
     </div>
     @endforeach
    </div>
  </div>
  </div>
 </body>


