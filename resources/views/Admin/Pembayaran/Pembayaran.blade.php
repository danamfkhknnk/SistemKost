@extends('Component.LayoutAdmin')

@section('content')
    
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2">
    <div class="flex">
        <h2 class="uppercase text-xl p-2 font-bold">Data Pembayaran</h2> 
        <label for="table-search" class="sr-only">Search</label>
      <div class="relative mt-1">
        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-60 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
    </div>
    </div>
    <div class="flex gap-4">
      <div class="pt-2">
          <a href={{url('admin/pembayaran/tambah')}} class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  ID
              </th>
              <th scope="col" class="px-6 py-3">
                  Nama
              </th>
              <th scope="col" class="px-6 py-3">
                  Kamar
              </th>
              <th scope="col" class="px-6 py-3">
                  Status
              </th>
              <th scope="col" class="px-6 py-3">
                  Keperluan
              </th>
              <th scope="col" class="px-6 py-3">
                Pembuatan
              </th>
              <th scope="col" class="px-6 py-3">
                Berhasil
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
                 {{$pembayaran->id}}
              </th>
              <td class="px-6 py-4">
                  {{$pembayaran->user->nama}}
              </td>
              <td class="px-6 py-4">
                 {{$pembayaran->kamar->nokamar}}
              </td>
              <td class="px-6 py-4">
                  {{$pembayaran->status}}
              </td>
              <td class="px-6 py-4">
                Pembayaran {{$pembayaran->tipe}} {{$pembayaran->jatuhtempo}}
              </td>
              <td class="px-6 py-4">
                  {{$pembayaran->created_at->format('Y-m-d')}}
              </td>
              <td class="px-6 py-4">
                  {{$pembayaran->updated_at ?? 'Belum'}}
              </td>
              <td class="px-6 py-4">
                  @if($pembayaran->updated_at)
                  Tidak Dapat Dihapus
                  @else
                  <a href={{url('admin/pembayaran/'.$pembayaran->id.'/delete')}} class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                  </svg>
                  </a>
                  @endif
              </td>

          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection