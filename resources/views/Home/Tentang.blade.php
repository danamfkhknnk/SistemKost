<div class="pt-14 container">
    <section data-aos="fade-up" class="container ">
      <h1 class="pb-2 text-xl text-center font-bold">Tentang Kost Putra Tentrem Mulyo</h1>
      <div class="flex gap-2 justify-center flex-col text-justify pb-8">
        <h1>
          Kost Putra Tentrem Mulyo didirikan dengan tujuan memberikan solusi hunian nyaman dan terjangkau bagi para pelajar, mahasiswa, dan pekerja yang membutuhkan tempat tinggal di kawasan strategis. Terinspirasi oleh kebutuhan akan lingkungan yang aman, tenang, dan mendukung produktivitas, kost ini mulai beroperasi pada tahun 2015. Nama "Tentrem Mulyo" diambil dari filosofi Jawa yang berarti ketenangan dan kesejahteraan, mencerminkan harapan pemilik untuk menciptakan hunian yang tidak hanya menyediakan fasilitas fisik, tetapi juga suasana harmonis bagi para penghuninya.
        </h1>
        <h1>
          Seiring berjalannya waktu, Kost Putra Tentrem Mulyo terus berkembang dan beradaptasi dengan kebutuhan penghuninya. Dari fasilitas dasar, kini kost ini telah dilengkapi dengan berbagai layanan modern seperti akses internet cepat, sistem keamanan 24 jam, dan area bersama untuk membangun komunitas penghuni yang erat. Melalui dedikasi terhadap kenyamanan dan pelayanan berkualitas, Kost Putra Tentrem Mulyo telah menjadi pilihan utama bagi mereka yang mencari tempat tinggal yang mendukung gaya hidup produktif dan serba praktis.
        </h1>
      </div>
      <div class="grid grid-flow-row-dense lg:grid-cols-3 md:grid-cols-2 gap-6">
        @foreach ($poin as $poin)
        <div class="text-center h-auto bg-dark/5 rounded-md shadow-md hover:bg-primary hover:text-white">
          <p class=" font-semibold">{{$poin->poin}}</p>
          <h1 class="text-sm">{{$poin->desk}}</h1>
        </div>
        @endforeach
      </div>
    </section>
  </div>