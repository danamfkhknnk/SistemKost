@extends('Component.LayoutPenyewa')

@section('content')

<div class="flex rounded ">
  <h2 class="uppercase text-xl pl-2 mb-2 font-bold">Selamat Datang, {{$user_nama}}</h2>
</div>
<div class="rounded">
  <h2 class="uppercase text-md pl-2 mb-2 font-bold">Mohon Dibaca Peraturan Kost Tentrem Mulyo</h2>
  <p class="pl-2 mb-2 text-justify text-md">
    #Jangan lupa setiap keluar atau masuk gerbang kos agar ditutup kembali dan digrendel (tidak hanya penghuni kos, tetapi juga tamu penghuni kos) untuk menghindari pemulung masuk.
  </p>
  <p class="pl-2 mb-2 text-justify text-md">
    #Jangan lupa mematikan kipas, AC, lampu, TV, atau air bila tidak digunakan.
  </p>
  <p class="pl-2 mb-2 text-justify text-md">
    #Tidak diperbolehkan membawa hewan peliharaan ke dalam kamar atau area kos (untuk menghindari bulu dan bau kotorannya).
  </p>
  <p class="pl-2 mb-2 text-justify text-md">
    #Boleh menerima tamu, tetapi tamu dilarang menginap (kecuali ada keperluan tertentu, harap menghubungi Ibu Kos terlebih dahulu).
  </p>
  <p class="pl-2 mb-2 text-justify text-md">
    #Harap membersihkan dapur setelah selesai digunakan.
  </p>
  <p class="pl-2 mb-2 text-justify text-md">
    #Jaga kebersihan kamar mandi.
  </p>
  <p class="pl-2 mb-2 text-justify text-md">
    #Tidak diperbolehkan mengotori atau memaku tembok kos.
  </p>
  <p class="pl-2 mb-2 text-justify text-md">
    #Area kos dan sampah harus dibersihkan setiap dua hari sekali.
  </p>
  <p class="pl-2 mb-2 text-justify text-md">
    #Sprei akan diganti dengan yang bersih setiap bulan atau ketika ada penghuni baru.
  </p>
  <p class="pl-2 mb-2 text-justify text-md">
    #Kebersihan kamar kos adalah tanggung jawab masing-masing penghuni (alat kebersihan sudah tersedia di kos).
  </p>
</div>
@endsection