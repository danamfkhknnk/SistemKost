
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>TENTREM MULYO</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="bg-secondary">
   <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start rtl:justify-end">
            <a class="flex ms-2 md:me-24">
                <img src="{{ asset('home/' . $info->logo) }}"  class="lg:w-[50px] w-[50px]" alt="logo">
              <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">TENTREM MULYO</span>
            </a>
          </div>
          <div class="flex items-center">
              <div class="flex items-center ms-3">
                <div>
                  <a type="button" class="flex rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" href="{{url('/publik')}}">
                    Kembali      
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </nav>
      <div class="flex w-full justify-center">
         <div class="mt-20">
            @yield('content') 
         </div>
      </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

   <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

   @yield('script')
</body>
</html>

