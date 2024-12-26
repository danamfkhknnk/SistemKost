@extends('Component.LayoutAdmin')

@section('content')

<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Data Admin</h2> 
  </div>
  <div class="flex gap-4">
    <div class="pt-2">
        <a href={{url('admin/pengguna/tambah')}} class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
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
                Id
            </th>
            <th scope="col" class="px-6 py-3">
                Nama
            </th>
            <th scope="col" class="px-6 py-3">
                Email
            </th>
            <th scope="col" class="px-6 py-3">
                Verifikasi Email
            </th>
            <th scope="col" class="px-6 py-3">
                Role
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admin as $admin)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               {{ $admin->id}}
            </th>
            <td class="px-6 py-4">
                {{ $admin->nama}}
            </td>
            <td class="px-6 py-4">
                {{ $admin->email}}
            </td>
            <td class="px-6 py-4">
                {{$admin->email_verified_at ??  'Belum'}}
            </td>
            
            <td class="px-6 py-4">
                {{$admin->role}}
            </td>
            <td class="flex px-6 py-4">
              <a href={{url('admin/pengguna/'.$admin->id.'/delete')}} class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
              </svg>
              </a>
             
                
            </td>
        </tr>
        @endforeach

      </tbody>
  </table>
</div>



<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-2 pt-4">
  <div class="flex">
      <h2 class="uppercase text-xl p-2 font-bold">Data Pengguna</h2> 
  </div>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Id
            </th>
            <th scope="col" class="px-6 py-3">
                Nama
            </th>
            <th scope="col" class="px-6 py-3">
                Email
            </th>
            <th scope="col" class="px-6 py-3">
                Verifikasi Email
            </th>
            <th scope="col" class="px-6 py-3">
                Role
            </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               {{ $user->id}}
            </th>
            <td class="px-6 py-4">
                {{ $user->nama}}
            </td>
            <td class="px-6 py-4">
                {{ $user->email}}
            </td>
            <td class="px-6 py-4">
                {{$user->email_verified_at ??  'Belum'}}
            </td>
            
            <td class="px-6 py-4">
                {{$user->role}}
            </td>
        </tr>
        @endforeach

      </tbody>
  </table>
  <div class="pagination">
    {{ $users->links() }}
  </div>
</div>
@endsection