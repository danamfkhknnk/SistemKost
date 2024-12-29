@extends('Component.LayoutAdmin')

@section('content')
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Update Data Penghuni</h2>    
  </div>  
</div>
<form class="mx-auto pl-2" action="{{url('admin/penghuni/'.$penghuni->id.'/edit')}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="relative z-0 w-full mb-4 group">
    <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
    <input type="text" value="{{ $penghuni->user->nama }}" name="user_id" id="user_id" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
     
    </select>
    @error('user_id')
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
  <div class="relative z-0 w-full mb-4 group">
    <label for="kamar_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kamar</label>
    <input type="text" value="{{ $penghuni->kamar->nokamar }}" name="kamar_id" id="kamar_id" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
     
   @error('kamar_id')
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
  <div class="relative z-0 w-full mb-4 group">
    <label for="tgglkeluar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Keluar</label>
    <input type="month" value="{{ old('tgglkeluar') }}" name="tgglkeluar" id="tgglkeluar" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
   @error('tgglkeluar')
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
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
</form>

@endsection