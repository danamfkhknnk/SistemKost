<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2 fixed top-0 right-0 w-full z-50">
  <div class="flex-1 flex justify-between items-center">
    <a href="#home">
      <img src="{{ Storage::disk('public')->url('home/' . $info->logo) }}"  class="lg:w-[60px] w-[50px]">
  </a>
</div>
  <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
<input class="hidden" type="checkbox" id="menu-toggle" />

<div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
  <nav>
    <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
      <li><div class="pt-2">
        @if (Session::has('message'))
        <div class="flex items-center  p-2 mb-2 text-sm text-blue-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" >
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <p class="alert" {{Session::get('alert-class', 'alert-info')}}>{{Session::get('message')}}</p>
        </div>
        @endif
    </div></li>
      <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-primary/80" href="#tentang">Tentang</a></li>
      <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-primary/80" href="#kamar">Kamar</a></li>
      <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-primary/80" href="#testi">Testimoni</a></li>
      <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-primary/80 lg:mb-0 mb-2" href="#kontak">Kontak</a></li>
      @if (Auth::check())
      <li>    
        @if (Auth::user()->email_verified_at)
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex text-secondary w-full items-center justify-between py-1 px-2 bg-primary/80 font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2 mr-0 lg:mr-2"> {{ Auth::user()->nama }}
                <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
              </button>
              <div id="dropdownNavbar" class="z-10 text-secondary hidden font-semibold  rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                @if(Auth::user()->role == 'penyewa')
                  <div>
                    <a href="{{url('/penyewa')}}" class="block px-8 py-1 text-sm  bg-primary/80 text-secondary font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400">Dashboard</a>
                  </div>
                  <div>
                    <a href="{{url('/logout')}}" class="block px-8 py-1 text-sm bg-primary/80 text-secondary font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400">Keluar</a>
                </div>
                @elseif(Auth::user()->role == 'admin')
                <div>
                    <a href="{{url('/admin')}}" class="block px-8 py-1 text-sm bg-primary/80 text-secondary font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400">Dashboard</a>
                </div> 
                <div>
                  <a href="{{url('/logout')}}" class="block px-8 py-1 text-sm bg-primary/80 text-secondary font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400">Keluar</a>
                </div> 
                @else
                <div>
                    <a href="{{url('/logout')}}" class="block px-8 py-1 text-sm bg-primary/80 text-secondary font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400">Keluar</a>
                    <button data-modal-target="small-modal" data-modal-toggle="small-modal" class="block px-8 py-1 text-sm bg-primary/80 text-secondary font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400" type="button">
                      Pemesanan
                    </button>
                </div>
                @endif
              </div>  
        @else
        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex text-secondary w-full items-center justify-between py-1 px-2 bg-primary/80 font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2 mr-0 lg:mr-2"> Konfirmasi Email Anda!
          <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
        </button>
        <div id="dropdownNavbar" class="z-10 text-secondary hidden font-semibold  rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
            <div>
              <a href="{{url('/logout')}}" class="block px-8 py-1 text-sm bg-primary/80  font-semibold rounded-lg border-b-2 border-transparent hover:border-indigo-400">Keluar</a>
          </div>
        </div>
        @endif
      </li>   
      @else
      <li class="text-center text-secondary"><a class="py-1 px-2 bg-primary/80 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2 mr-0 lg:mr-2" href="{{ url('/register')}}">Registrasi</a></li>
      <li class="text-center text-secondary"><a class="py-1 px-2 bg-primary/80 font-semibold rounded-lg block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href="{{ url('/login')}}">Login</a></li>
      @endif
    </ul>
  </nav>
</div>
</header>
