@extends('Component.LayoutAdmin')

@section('content')

       <div class="grid lg:grid-cols-4 grid-cols-2 gap-4 mb-4">
          <div class="bg-white shadow-md rounded-lg p-2">
            <h2 class="text-xl font-semibold">Jumlah Kamar</h2>
            <p class="text-3xl font-bold text-blue-600">{{$jmlkamar}}</p>
            <p class="text-md font-sm">Terisi : {{$kmrterisi}}, Tersedia : {{$kmrtersedia}}</p>
          </div>
          <div class="bg-white shadow-md rounded-lg p-2">
            <h2 class="text-xl font-semibold">Jumlah Pembayaran</h2>
            <p class="text-3xl font-bold text-green-600">Rp{{$jmlselesai}}</p>
            <p class="text-md font-sm ">Dari {{$databyr}} Transaksi</p>
          </div>
          <div class="bg-white shadow-md rounded-lg p-2">
            <h2 class="text-xl font-semibold">Jumlah Keluhan</h2>
                <p class="text-3xl font-bold text-purple-600">{{$dtkeluhan}}</p>
                <p class="text-md font-sm">Selesai : {{$klhnselesai}}, Pending : {{$klhnpending}} </p>
          </div>
          <div class="bg-white shadow-md rounded-lg p-2">
            <h2 class="text-xl font-semibold">Jumlah Penghuni</h2>
            <p class="text-3xl font-bold text-red-600">{{$penghuni}}</p>
            <p class="text-md font-sm ">Dari {{$jmlakun}} Pengguna</p>
          </div>
       </div>
       <div class="grid md:grid-cols-2 grid-cols-1 gap-4 mb-4">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h2 class="uppercase text-xl p-2 font-bold">Tagihan Belum Bayar</h2> 
            <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($pembayaran as $pembayaran)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           {{$pembayaran->user->nama}}
                        </th>

                        <td class="flex px-6 py-4">
                            <a href={{'https://wa.me/'. $pembayaran->user->telepon. '?text=Mohon%20segera%20bayar'}} >
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                  <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                                </svg>                    
                              </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h2 class="uppercase text-xl p-2 font-bold">Kontak Penghuni Kost</h2> 
            <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($dtpenghuni as $dtpenghuni)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           {{$dtpenghuni->nama}}
                        </th>

                        <td class="flex px-6 py-4">
                            <a href={{'https://wa.me/'.$dtpenghuni->telepon}}>
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                  <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                                </svg>                    
                              </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
       </div>
@endsection