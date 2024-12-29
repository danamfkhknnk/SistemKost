@extends('Component.LayoutAdmin')

@section('content')
    
<div class="flex flex-column sm:flex-row flex-wrap items-center justify-between pb-2">
        <div class="div">
            <h2 class="uppercase text-xl p-2 font-bold">Laporan Uang Masuk Total </h2> 
        </div>
        <div class="flex gap-4">
            <div class="pt-2">
                <a href={{url('admin/laporan/tambah')}} class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                      </svg>
                </a>
            </div>
            <div class="pt-2">
                @if (Session::has('message'))
                <div class="flex items-center  p-2 mb-2 text-sm text-blue-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" >
                  <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  <p class="alert" {{Session::get('alert-class', 'alert-info')}}>{{Session::get('message')}}</p>
                </div>
                @endif
            </div>
            
          </div>
        {{-- <div class="flex gap-1 ">
            <div class="">
                <form action="{{url('admin/laporan')}}" method="GET" class="flex gap-1">
                  @csrf
                  <input type="month" value="{{ request('cari') }}" name="cari" id="cari" class="block w-full  text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                </form>
            </div>
            <a href="{{ route('admin.laporan.pdf', ['cari' => request('cari')]) }}" class="text-white px-3 py-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download PDF</a>
        </div>
         --}}
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Id
              </th>
              <th scope="col" class="px-6 py-3">
                  Pembayaran
              </th>
              <th scope="col" class="px-6 py-3">
                  Nilai
              </th>
              <th scope="col" class="px-6 py-3">
                  Tipe
              </th>
              <th scope="col" class="px-6 py-3">
                  Waktu
              </th>
          </tr>
      </thead>
      <tbody>
        @foreach ($laporan as $laporan)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$laporan->id}}
              </th>
              <td class="px-6 py-4">
                @if ($laporan->kamar_id)
                    Sewa Kamar Nomer {{$laporan->kamar->nokamar}}
                @else
                {{$laporan->item}}
                @endif
              </td>
              <td class="px-6 py-4">
                {{$laporan->harga}}
              </td>
              <td class="px-6 py-4">
                {{$laporan->tipe}}
              </td>
              <td class="px-6 py-4">
                {{$laporan->created_at->format('Y-m-d')}}
              </td>
              
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection