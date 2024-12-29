<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>TENTREM MULYO</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <style>
        #menu-toggle:checked + #menu {
          display: block;
        }
        
    </style>
</head>
<body class="bg-secondary">
    @if (Auth::check())
    <div id="small-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Riwayat Pemesanan
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Kamar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Waktu
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
                          @foreach ($pembayarans as $pembayaran)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                                <td class="px-6 py-4">
                                    {{$pembayaran->kamar->nokamar}}
                                </td>
                   
                                <td class="px-6 py-4">
                                    {{$pembayaran->created_at->format('Y-m-d')}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$pembayaran->status}}
                                </td>
                                
                                <td class="flex px-6 py-4">
                                    @if ($pembayaran->status == 'pending')
                                    <a href={{url('publik/booking/'.$pembayaran->id)}} class="font-medium bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700"">
                                      Bayar
                                    </a>
                                    
                                    @else
                                    <p>-</p>
                                @endif
                                </td>
                                
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div>
        @include('Home.Navbar')
    </div>
    <div id="home">
        @include('Home.Hero')
    </div>
    <div id="tentang" >
        @include('Home.Tentang')
    </div>
    <div id="kamar">
        @include('Home.Kamar')
    </div>
    <div id="testi" >
        @include('Home.Testimoni')      
    </div>
    <div id="kontak">
        @include('Home.Kontak')
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
   
   <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

   @yield('scripts')

</body>
</html>