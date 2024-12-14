@extends('Component.LayoutAdmin')

@section('content')
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
  <h2 class="uppercase text-xl p-2 font-bold">Selamat Datang {{$user_nama}} Di Dashboard</h2> 
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-6">

            <!-- Card Jumlah Kamar -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold">Jumlah Kamar</h2>
                <p class="text-3xl font-bold text-blue-600">{{$jmlkamar}}</p>
                <p class="text-md font-sm">Terisi : {{$kmrterisi}}, Tersedia : {{$kmrtersedia}}</p>
            </div>

            <!-- Card Jumlah Data Pembayaran -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold">Jumlah Pembayaran</h2>
                <p class="text-3xl font-bold text-green-600">{{$databyr}}</p>
                <p class="text-md font-sm">Uang Masuk : Dari {{$byrselesai}} Selesai</p>
            </div>

            <!-- Card Jumlah Uang -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold">Jumlah Penghuni</h2>
                <p class="text-3xl font-bold text-red-600">{{$dtpenghuni}}</p>
            </div>

            <!-- Card Jumlah Penghuni -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold">Jumlah Akun</h2>
                <p class="text-3xl font-bold text-purple-600">{{$dtuser}}</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold">Jumlah Keluhan</h2>
                <p class="text-3xl font-bold text-purple-600">{{$dtkeluhan}}</p>
                <p class="text-md font-sm">Selesai : {{$klhnselesai}}, Pending : {{$klhnpending}} </p>
            </div>

        </div>  
</div>

</div>
@endsection