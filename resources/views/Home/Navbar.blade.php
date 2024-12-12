<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 fixed top-0 right-0 w-full z-50">
  <div class="flex-1 flex justify-between items-center">
    <a href="#home">
      <img src="{{ asset('home/' . $info->logo) }}"  class="lg:w-[60px] w-[50px]">
      {{-- <svg width="32" height="36" viewBox="0 0 32 36" xmlns="http://www.w3.org/2000/svg"><path d="M15.922 35.798c-.946 0-1.852-.228-2.549-.638l-10.825-6.379c-1.428-.843-2.549-2.82-2.549-4.501v-12.762c0-1.681 1.12-3.663 2.549-4.501l10.825-6.379c.696-.41 1.602-.638 2.549-.638.946 0 1.852.228 2.549.638l10.825 6.379c1.428.843 2.549 2.82 2.549 4.501v12.762c0 1.681-1.12 3.663-2.549 4.501l-10.825 6.379c-.696.41-1.602.638-2.549.638zm0-33.474c-.545 0-1.058.118-1.406.323l-10.825 6.383c-.737.433-1.406 1.617-1.406 2.488v12.762c0 .866.67 2.05 1.406 2.488l10.825 6.379c.348.205.862.323 1.406.323.545 0 1.058-.118 1.406-.323l10.825-6.383c.737-.433 1.406-1.617 1.406-2.488v-12.757c0-.866-.67-2.05-1.406-2.488l-10.825-6.379c-.348-.21-.862-.328-1.406-.328zM26.024 13.104l-7.205 13.258-3.053-5.777-3.071 5.777-7.187-13.258h4.343l2.803 5.189 3.107-5.832 3.089 5.832 2.821-5.189h4.352z"></path></svg> --}}
  </a>
</div>
  <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
<input class="hidden" type="checkbox" id="menu-toggle" />

<div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
  <nav>
    <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
      <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="#tentang">Tentang</a></li>
      <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="#kamar">Kamar</a></li>
      <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="#testi">Testimoni</a></li>
      <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href="#kontak">Kontak</a></li>
    

      @if (Auth::check())
      <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex w-full items-center justify-between py-1 px-2 bg-primary/80 font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2 mr-0 lg:mr-2"> {{ Auth::user()->nama }}
                <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="z-10 hidden font-semibold bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                    <div class=>
                      <a href="{{url('/penyewa')}}" class="block px-8 py-1 text-sm bg-primary/20 font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400">Dashboard</a>
                    </div>
                    <div class=>
                      <a href="{{url('/logout')}}" class="block px-8 py-1 text-sm bg-primary/20 font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400">Keluar</a>
                    </div>
                </div>
        </li>
            
        @else
        <li class="text-center"><a class="py-1 px-2 bg-primary/80 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2 mr-0 lg:mr-2" href="{{ url('/register')}}">Registrasi</a></li>
        <li class="text-center"><a class="py-1 px-2 bg-primary/80 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href="{{ url('/login')}}">Login</a></li>
        @endif

    </ul>
  </nav>
</div>
</header>
