<nav class="fixed w-full z-50 top-0">
  <div class="relative bg-white">
    <div class="mx-auto max-w-7xl px-6">
      <div class="flex items-center justify-between py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="{{route('index')}}">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-100 bg-slate-300 sm:h-10" src="{{asset('assets/images/22116270_1114.jpg')}}" alt="">
          </a>
        </div>
        <div class="-my-2 -mr-2 md:hidden">
          <button type="button" class="inline-flex items-center justify-center bg-white p-2 text-gray-600 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/bars-3 -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <nav class="hidden space-x-10 md:flex">
          <a href="#" class="active text-base font-medium text-gray-500 hover:text-orange-600 [&.active]:text-orange-600">Home</a>
          <a href="#" class="text-base font-medium text-gray-500 hover:text-orange-600">Features</a>
          <a href="#" class="text-base font-medium text-gray-500 hover:text-orange-600">About Us</a>
          <a href="#" class="text-base font-medium text-gray-500 hover:text-orange-600">Contact</a>
        </nav>
        @if(Route::is('index') || Route::is('register.index'))
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
          <a href="{{ route('dashboard.index') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Log in</a>
          <a href="{{ route('dashboard.index') }}" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-3xl border border-transparent bg-orange-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-orange-700">Log in</a>
        </div>
        @endif
        @if(Route::is('login.index'))
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
          <a href="{{ route('register.index') }}" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-3xl border border-transparent bg-orange-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-orange-700">Register</a>
        </div>
        @endif
      </div>
    </div>
  </div>
</nav>