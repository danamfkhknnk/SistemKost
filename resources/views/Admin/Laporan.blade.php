@extends('Component.LayoutAdmin')

@section('content')
    
<div class="flex flex-column sm:flex-row flex-wrap items-center justify-between pb-2">
        <div class="div">
            <h2 class="uppercase text-xl p-2 font-bold">Laporan Uang Masuk Total Rp.{{$jmlselesai}}</h2> 
        </div>
        <div class="flex gap-1 ">
            <div class="">
                <form action="{{url('admin/laporan')}}" method="GET" class="flex gap-1">
                  @csrf
                  <input type="month" value="{{ request('cari') }}" name="cari" id="cari" class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                </form>
            </div>
            <a href="{{ route('admin.laporan.pdf', ['cari' => request('cari')]) }}" class="text-white px-3 py-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download PDF</a>
        </div>
        
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Id Pembayaran
              </th>
              <th scope="col" class="px-6 py-3">
                  Nilai
              </th>
              <th scope="col" class="px-6 py-3">
                  Waktu
              </th>
              <th scope="col" class="px-6 py-3">
                  Keterangan
              </th>
          </tr>
      </thead>
      <tbody>
        @foreach ($pembayaran as $pembayaran)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 {{$pembayaran->id}}
              </th>
              <td class="px-6 py-4">
                  {{$pembayaran->kamar->harga}}
              </td>
              <td class="px-6 py-4">
                 {{$pembayaran->updated_at->format('d-m-Y H:i') }}
              </td>
              <td class="px-6 py-4">
                @if ($pembayaran->tipe == 'baru')
                Pembayaran Penghuni Baru Kamar {{ $pembayaran->kamar->nokamar }}
                @else
                Pembayaran Perpanjangan Sewa Kamar{{ $pembayaran->kamar->nokamar}}
                @endif
              </td>
              
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection