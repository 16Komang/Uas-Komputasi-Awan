<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    @vite('resources/css/app.css')
</head>

<body>
    <nav class={`bg-white border-b border-gray-200 fixed z-30 w-full`}>
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <div class='laptop:hidden'>

                    </div>
                    <a href="/dashboard" class="text-xl font-bold flex items-center lg:ml-2.5">
                        <img src="{{ URL('assets/images/favicon.svg') }}" class="h-6 mr-2" alt="Logo" />
                        <span class="self-center whitespace-nowrap">Halo Admin!!!</span>
                    </a>
                    <form action="/dashboard" method="GET" class="hidden lg:block lg:pl-32">
                        <label htmlFor="topbar-search" class="sr-only">Search</label>
                        <div class="mt-1 relative lg:w-64">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fillRule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clipRule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" name="email" id="topbar-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5"
                                placeholder="Search" />
                        </div>
                    </form>
                    <a href="/dashboard">
                        <h3 class="text-center text-black text-sm px-3">
                            Dashboard
                        </h3>
                    </a>
                    <a href="/list-acount">
                        <h3 class="text-center text-black text-sm px-3">
                            List Acount
                        </h3>
                    </a>
                    <a href="/list-guest">
                        <h3 class="text-center text-black text-sm px-3">
                            List Guest
                        </h3>
                    </a>
                    <a href="/list-template">
                        <h3 class="text-center text-black text-sm px-3">
                            List Template
                        </h3>
                    </a>
                    <a href="/buat-template">
                        <h3 class="text-center text-black text-sm px-3">
                            Buat Template
                        </h3>
                    </a>
                </div>
                <div class="mr-2 laptop:mr-4">
                    <a href="{{ __('logout') }}">
                        <button type="button"
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>