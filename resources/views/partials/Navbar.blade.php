<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <nav x-data="{ isOpen: false }" class="bg-gray-800 w-full">
        <div class="text-white flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto h-14">

            <!-- left content navbar -->
            <div class="flex items-center justify-between justify-items-end">
                <a href="/" class='flex items-center'>
                    <img src="{{ URL('assets/images/favicon.svg') }}" class="h-6 mr-3 sm:h-9" alt="favicon" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">My Wedding</span>
                </a>
            </div>
            <!-- right content navbar -->
            <div class="text-white items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1"
                id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <a href="/"
                        class='block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-300 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700'>
                        Home
                    </a>
                    <a href="{{ __('desain') }}"
                        class='block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-300 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700'>
                        Desain
                    </a>
                    <a href="{{ __('contactus') }}"
                        class='block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-300 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700'>
                        Kontak Kami
                    </a>
                    <a href="/FAQ"
                        class='block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-sky-300 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700'>
                        FAQ
                    </a>
                </ul>
            </div>
            <div class="flex items-center lg:order-2">
                <!-- icon mobile navbar -->
                <button @click="isOpen = !isOpen" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <!-- button login -->
                @if(!Auth::id())
                <div class="hidden mt-2 mr-4 lg:inline-block">
                    <a href="{{ __('loginPage') }}">
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Masuk</button>
                    </a>
                    <a href="{{ __('registerPage') }}">
                        <button type="button"
                            class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800">Daftar</button>
                    </a>
                </div>
                @else
                {{-- <a href="/profile">Akun Saya</a> --}}
                <div class="flex items-center lg:order-2">
                    <div class="hidden mt-2 mr-4 lg:inline-block">
                        <a href="{{ __('logout') }}">
                            <button type="button"
                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Log
                                Out</button>
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- mobile navbar -->
        <div class="mobile-navbar">
            <!-- navbar wrapper -->
            <div class="fixed left-0 w-full h-48 rounded-lg shadow-xl top-14" x-show="isOpen"
                @click.away=" isOpen = false">
                <div class="flex flex-col space-y-6 bg-gray-800">
                    <a href="/" class="hover:bg-gray-700 text-white block px-3 text-base font-medium">
                        Dashboard
                    </a>
                    <a href="{{ __('desain') }}" class="hover:bg-gray-700 text-white block px-3 text-base font-medium">
                        Desain
                    </a>
                    <a href="{{ __('contactus') }}"
                        class="hover:bg-gray-700 text-white block px-3 text-base font-medium">
                        Contact
                    </a>
                    <a href="/FAQ" class="hover:bg-gray-700 text-white block px-3 text-base font-medium">
                        FAQ
                    </a>

                    <a href="{{ __('loginPage') }}">
                        <button type="button"
                            class="ml-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Masuk</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- end mobile navbar -->

    </nav>
</body>

</html>