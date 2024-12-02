@extends('Component.LayoutAdmin')

@section('content')
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Update Data Kamar</h2>    
  </div>  
</div>
{{-- <form class="mx-auto pl-2" method="POST" action="{{url('admin/kamar/'.$kamars->id.'/edit')}}">
  @csrf
  @method('PUT')
  <div class="relative z-0 w-full mb-5 group">
    <label for="nokamar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Kamar</label>
    <input type="number" value="{{ $kamars->nokamar}}" name="nokamar" id="nokamar" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('nokamar')
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
    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
    <input type="text" value="{{$kamars->harga}}" name="harga" id="harga" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('harga')
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
    <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe</label>
    <select id="tipe" name="tipe" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="AC" >AC</option>
      <option value="Kipas Angin" >Kipas Angin</option>
    </select>
  </div>
  <div class="relative z-0 w-full mb-5 group">
    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
    <select id="status" name="status" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="tersedia" >Tersedia</option>
      <option value="terisi" >Terisi</option>
    </select>
  </div>
  <div class="relative z-0 w-full mb-5 group">
    <label for="gambarkamar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Pilih Gambar Untuk Di Hapus</label>
    <div class="grid grid-flow-row-dense lg:grid-cols-3 md:grid-cols-2">
      @foreach (explode(',', $kamars->gambarkamar) as $image)
      <div class="">
        <img class="" src="{{ asset('gambarkamar/' . $image) }}" alt="Gambar Kamar" width="100">
        <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="hapus_gambar[]" value="{{ $image }}"> <span class="text-sm font-medium">Hapus</span>
      </div>
    @endforeach
    </div>
    <input id="gambarkamar" name="gambarkamar[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" multiple>
    @error('gambarkamar')
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
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form> --}}
<form action="{{url('admin/kamar/'.$kamar->id.'/edit')}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="mb-3">
      <label for="nokamar" class="form-label">No Kamar</label>
      <input type="text" class="form-control @error('nokamar') is-invalid @enderror" id="nokamar" name="nokamar" value="{{ old('nokamar', $kamar->nokamar) }}" required>
      @error('nokamar')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="tipe" class="form-label">Tipe Kamar</label>
      <select class="form-select @error('tipe') is-invalid @enderror" id="tipe" name="tipe" required>
          <option value="AC" {{ $kamar->tipe == 'AC' ? 'selected' : '' }}>AC</option>
          <option value="Kipas Angin" {{ $kamar->tipe == 'Kipas Angin' ? 'selected' : '' }}>Kipas Angin</option>
      </select>
      @error('tipe')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="harga" class="form-label">Harga Kamar</label>
      <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $kamar->harga) }}" required>
      @error('harga')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="status" class="form-label">Status Kamar</label>
      <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
          <option value="tersedia" {{ $kamar->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
          <option value="terisi" {{ $kamar->status == 'terisi' ? 'selected' : '' }}>Terisi</option>
      </select>
      @error('status')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="gambarkamar" class="form-label">Gambar Kamar (Upload Gambar Baru)</label>
      <input type="file" class="form-control @error('gambarkamar.*') is-invalid @enderror" id="gambarkamar" name="gambarkamar[]" multiple>
      @error('gambarkamar.*')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <small>Gambar saat ini:</small>
      @if ($kamar->gambarkamar)
          <div>
              @foreach (explode(',', $kamar->gambarkamar) as $image)
                  <img src="{{ asset('gambarkamar/' . $image) }}" alt="Gambar Kamar" style="width: 100px; height: auto; margin: 5px;">
                  <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="hapus_gambar[]" value="{{ $image }}"> <span class="text-sm font-medium">Hapus</span>
              @endforeach
          </div>
      @endif
  </div>

  <button type="submit" class="btn btn-primary">Update Kamar</button>
  {{-- <a href="{{ route('kamars.index') }}" class="btn btn-secondary">Batal</a> --}}
</form>
@endsection