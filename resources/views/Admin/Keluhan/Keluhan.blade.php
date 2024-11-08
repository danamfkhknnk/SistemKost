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
                  Keluhan
              </th>
              <th scope="col" class="px-6 py-3">
                  Gambar
              </th>
              <th scope="col" class="px-6 py-3">
                  Pengajuan
              </th>
              <th scope="col" class="px-6 py-3">
                  Penyelesaian
              </th>
              <th scope="col" class="px-6 py-3">
                  Status
              </th>
          </tr>
      </thead>
      <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 1
              </th>
              <td class="px-6 py-4">
                  Dino
              </td>
              <td class="px-6 py-4">
                  Parkir Sembarangan
              </td>
              <td class="px-6 py-4">
                  gambarakir.jpg
              </td>
              <td class="px-6 py-4">
                  24/11/2024
              </td>
              <td class="px-6 py-4">
                  30/11/2024
              </td>
              <td class="flex px-6 py-4">
                <select id="tipe" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Pending</option>
                    <option>Terselesaikan</option>
                </select>
              </td>
          </tr>
      </tbody>
  </table>
</div>
@endsection