<nav class="color3 border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-2 py-1">
        <a href="#" class="flex items-center space-x-2 rtl:space-x-reverse no-underline">
            <img src="{{ asset('assets/CIcon.png') }}" class="h-6" alt="CI Logo" />
            <span class="self-center text-lg font-semibold text-black whitespace-nowrap">CodeInformation</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-1 w-6 h-6 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-2 md:p-0 mt-2 rounded-lg color3 md:flex-row md:space-x-4 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">
                <li>
                    <a href="/" class="block py-1 px-2 text-black bg-color3 rounded md:bg-transparent md:text-color3 md:p-0 no-underline" aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="/about-us" class="block py-1 px-2 text-black rounded hover:bg-color4 md:hover:bg-transparent md:border-0 md:hover:text-color4 md:p-0 no-underline">Tentang Kami</a>
                </li>
                <li>
                    <a href="#" class="color2 text-white block py-1 px-2 rounded hover:bg-color4 md:border-0 md:hover:text-color4 md:p-0 no-underline">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
