<section id="hero" class="relative overflow-hidden">
    <header x-data="{ open: false }" class="relative">
      <div class="bg-gray-900 pt-6">
        <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
          <div class="flex items-center flex-1">
            <div class="flex items-center justify-between w-full md:w-auto">
              <a href="#">
                <span class="sr-only">Alta Consulting</span>
                <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="">
              </a>
              <div class="-mr-2 flex items-center md:hidden">
                <button @click="open = ! open"  type="button" class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <!-- Heroicon name: outline/menu -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="hidden space-x-8 md:flex md:ml-10">
              <a href="#" class="text-base font-medium text-white hover:text-gray-300">Services</a>
  
              <a href="#" class="text-base font-medium text-white hover:text-gray-300">About</a>
  
              <a href="#" class="text-base font-medium text-white hover:text-gray-300">Contact</a>
  
              <a href="#" class="text-base font-medium text-white hover:text-gray-300">Blog</a>
            </div>
          </div>

          {{-- LOG IN / REGISTER MODEL --}}
          <div class="hidden md:flex md:items-center md:space-x-6">
            @if (Route::has('login'))
              <div>
                @auth
                  {{-- Dashboard Button --}}
                  <a href="{{ url('/dashboard') }}" class="text-base font-medium text-white hover:text-gray-300 px-5"> Dashboard </a>
                    
                @else
                  {{-- Log In. --}}
                  <a href="{{ route('login') }}" class="text-base font-medium text-white hover:text-gray-300 px-5"> Log in </a>

                  @if (Route::has('register'))
                    {{-- Register --}}
                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700"> Register</a>
                  @endif
                @endauth
 
              </div>      
            @endif
          </div>
        </nav>
      </div>
  
      <div 
        x-show="open" 
        x-transition:enter="transition ease-out duration-150 transform"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
          <div class="px-5 pt-4 flex items-center justify-between">
            <div>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
            </div>
            <div class="-mr-2">
              <button button @click="open = ! open" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                <span class="sr-only">Close menu</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div class="pt-5 pb-6">
            <div class="px-2 space-y-1">
              <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Services</a>
  
              <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">About</a>
  
              <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Contact</a>
  
              <a href="#blog" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Blog</a>
            </div>

            {{-- Authenication Nav Buttons --}}
            <div class="mt-6 px-5">
              <a href="#" class="block text-center w-full py-3 px-4 rounded-md shadow bg-indigo-600 text-white font-medium hover:bg-indigo-700">Start free trial</a>
            </div>
            <div class="mt-6 px-5">
              <p class="text-center text-base font-medium text-gray-500">Dashboard<a href="{{ route('login') }}" class="text-gray-900 hover:underline">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </header>
  
    <main>
      <div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
        <div class="mx-auto max-w-7xl lg:px-8">

            {{-- MAIN GRID --}}
          <div class="lg:grid lg:grid-cols-2 lg:gap-8">

            {{-- 1ST MAIN COLUMN / MAIN TEXT COLUMN --}}
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
              <div class="lg:py-24">

                {{-- Landing Page Heading --}}
                <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                  <span class="block">A better way to</span>
                  <span class="block text-indigo-400">communicate</span>
                </h1>
                <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Alta Consulting provides tailored strategic communications to brands,
                  C-level executives and organizations.</p>
              </div>
            </div>

            {{-- SECOND MAIN COLUMN / MAIN PICTURE COLUMN --}}
            <div class="py-5 lg:m-0 lg:relative">
              <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                {{-- YURI'S MAIN PICTURE --}}
                <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none border border-indigo-500 border-rounded-md shadow shadow-white" src="{{ asset('/img/yuri.jpg') }}" alt="Yuridia Pena">
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </section>