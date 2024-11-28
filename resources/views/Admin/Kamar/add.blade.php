@extends('Component.LayoutAdmin')

@section('content')
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Tambah Data Kamar</h2>    
  </div>  
</div>
<form class="mx-auto pl-2"  method="POST" action="{{url('/admin/kamar/tambah')}}" enctype="multipart/form-data">
  @csrf
  <div class="relative z-0 w-full mb-5 group">
    <label for="nokamar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Kamar</label>
    <input type="text" id="nokamar" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="relative z-0 w-full mb-5 group">
    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
    <input type="text" id="harga" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="relative z-0 w-full mb-5 group">
    <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe</label>
    <select id="tipe" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option >AC</option>
      <option>Kpas Angin</option>
    </select>
  </div>
  <div class="relative z-0 w-full mb-5 group">
    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe</label>
    <select id="status" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option >Tersedia</option>
      <option>Terisi</option>
    </select>
  </div>
  <div class="relative z-0 w-full mb-5 group">
    <label for="gambarkamar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Gambar</label>
    <input id="gambarkamar" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" multiple>
  </div>

    <div class="previews">

    </div>
  

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script >
    $(function() {
    // Multiple images preview with JavaScript
    var previewImages = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#images').on('change', function() {
        previewImages(this, 'div.previews');
    });
  });
</script> 
@endsection