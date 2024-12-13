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