
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
<body class="bg-secondary w-full h-full ">
    <div class="w-full text-center h-full space-y-4 text-primary flex justify-center items-center">
        <div class="pt-14">
            <div class="flex justify-center">
                <img src="{{ asset('home/' . $info->logo) }}" width="100px" class="">
            </div>
            <hr>
            <h1 class="uppercase  font-bold text-3xl ">Kost Putra Tentrem Mulyo</h1>
            <hr>
            <h3 class="font-semibold text-xl">Kami Telah Mengirimkan Email Verifikasi!!</h3>
            <h5>Sudah Melakukan Verifikasi Email? <a href="{{url('/')}}"><strong>Kembali Ke Home</strong></a></h5>
         </div>
    </div>
      
           
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
   
   <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>

