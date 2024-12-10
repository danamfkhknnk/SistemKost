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
    <section class="h-screen flex flex-col md:flex-row justify-center space-y-10 md:space-y-0 md:space-x-16 items-center my-2 mx-5 md:mx-0 md:my-0">
          <div class="md:w-1/3 max-w-sm">
            <img src="{{ asset('home/' . $info->logo) }}"  class="w-100">
          </div>
        <form class="md:w-1/3 max-w-sm" action="" method="POST">
          @csrf          
          <div class="text-center md:text-left">
            <h3 class="mr-1 mb-2 font-semibold"> Silahkan Login</h3>
            @if (Session::has('message'))
            <div class="flex items-center p-2 mb-2 text-sm text-blue-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" >
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <p class="alert" {{Session::get('alert-class', 'alert-info')}}>{{Session::get('message')}}</p>
            </div>
            @endif

            @if ($errors->any())
            <div class="flex items-center p-2 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
              @foreach ($errors->all() as $item)
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{$item}}</span>
              </div>
              @endforeach
            </div>
            @endif
          </div>
          
          <input class="text-sm w-full px-4 py-2 border border-solid border-gray-300 rounded" type="text" placeholder="Email Address" name="email" value="{{ old('email')}}" autoFocus />
          <input class="text-sm w-full px-4 py-2 border border-solid border-gray-300 rounded mt-4" type="password" placeholder="Password" name="password" />
          
          <div class=" text-center md:text-left mt-2">
            <span class="pt-1 font-semibold underline text-sm">Belum Punya Akun ? <a href="{{url('/register')}}" class="uppercase">Register</a></span>
          </div>
          <div class="text-center md:text-left">
            <button class="mt-2 bg-primary hover:bg-primary/50 px-6 py-2 text-white uppercase rounded text-xs tracking-wider" name="submit" type="submit">
              Login
            </button>
            <a class="mt-2 bg-primary hover:bg-primary/50 px-6 py-2 text-white uppercase rounded text-xs tracking-wider" href="{{url('/')}}">
             Kembali
            </a>
          </div>
          
        </form>
      </section>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
   
   <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>