@extends('Component.LayoutPenyewa')

@section('content')
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Mengirim Keluhan</h2>    
  </div>  
</div>
<form class="mx-auto pl-2" method="POST" action="{{url('/penyewa/keluhan')}}" enctype="multipart/form-data">
  @csrf
  <div class="relative z-0 w-full mb-5 group">
    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan</label>
    <input type="text" name="judul" id="judul" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('judul')
    <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">{{$message}}</span>
      </div>
    </div>
    @enderror
  </div>
  <div class="relative z-0 w-full mb-5 group">
    <label for="keluhan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
    <input type="text" id="keluhan" name="keluhan" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('keluhan')
    <div class="flex items-center p-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">{{$message}}</span>
      </div>
    </div>
    @enderror
  </div>
  <div class="relative z-0 w-full mb-5 group">
    <label for="gambarbukti" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Gambar</label>
    <input id="gambarbukti" name="gambarbukti[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" multiple>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pt-8">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Riwayat Keluhan</h2>    
  </div>  
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  No Keluhan
              </th>
              <th scope="col" class="px-6 py-3">
                  Judul
              </th>
              <th scope="col" class="px-6 py-3">
                  Keluhan
              </th>
              <th scope="col" class="px-6 py-3">
                  Gambar
              </th>
              <th scope="col" class="px-6 py-3">
                  Status
              </th>

          </tr>
      </thead>
      <tbody>
        @foreach ($keluhan as $keluhan)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 {{$keluhan->id}}
              </th>
              <td class="px-6 py-4">
                  {{$keluhan->judul}}
              </td>
              <td class="px-6 py-4">
                  {{$keluhan->keluhan}}
              </td>
              <td class="px-6 py-4">
                <div class="">
                  @foreach (explode(',', $keluhan->gambarbukti) as $image)
                  <img src="{{ asset('gambarkeluhan/' . $image) }}" alt="Gambar Kamar" width="150px">
              @endforeach
              </div>
              </td>
              <td class="px-6 py-4">
                  {{$keluhan->status}}
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection