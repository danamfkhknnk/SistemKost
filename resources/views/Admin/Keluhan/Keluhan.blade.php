@extends('Component.LayoutAdmin')

@section('content')
    
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Data Keluhan</h2> 
      <label for="table-search" class="sr-only">Search</label>
    
  </div>
  <div class="relative mt-1">
    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
    </div>
    <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-60 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
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
                  Penghuni
              </th>
              <th scope="col" class="px-6 py-3">
                  Judul
              </th>
              <th scope="col" class="px-6 py-3">
                  keluhan
              </th>
              <th scope="col" class="px-6 py-3">
                  Gambar
              </th>
              <th scope="col" class="px-6 py-3">
                  Status
              </th>
              <th scope="col" class="px-6 py-3">
                  Aksi
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
                  {{$keluhan->user->nama}}
              </td>
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
              <form class="" action="{{url('admin/keluhan/'.$keluhan->id.'/edit')}}" method="POST">
                @csrf
                @method('patch')
              <td class="flex px-6 gap-2 py-4">
               
                <select id="status" name="status" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    @if($keluhan->status == 'selesai') disabled @endif>
                    <option value="tolak" {{ $keluhan->status == 'tolak' ? 'selected' : '' }} >Tolak</option>
                    <option value="pending" {{ $keluhan->status == 'pending' ? 'selected' : '' }} >Pending</option>
                    <option value="selesai" {{ $keluhan->status == 'selesai' ? 'selected' : '' }} >Selesai</option>
                </select>
               
                </td>
              <td class="px-6 py-4">
                @if($keluhan->status != 'selesai')
                <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                  </svg>
                </button>
                @endif
                 <a href={{url('admin/keluhan/'.$keluhan->id.'/delete')}} class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                    </svg>
                </a>
              </td>
            </form>   
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection