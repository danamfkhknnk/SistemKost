@extends('Component.LayoutAdmin')

@section('content')
    
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2">
  <div class="flex">
    <h2 class="uppercase text-xl p-2 font-bold">Data Testimoni</h2> 
    <label for="table-search" class="sr-only">Search</label>

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
                    Testi
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($testi as $testi)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$testi->id}}
                </th>
                <td class="px-6 py-4">
                    {{$testi->user->nama}}
                </td>
                <td class="px-6 py-4">
                   {{$testi->testi}}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection