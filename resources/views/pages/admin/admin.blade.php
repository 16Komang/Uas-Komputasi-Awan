<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    @include('partials.navbarAdmin')

    <div class="flex flex-col flex-1 w-full overflow-y-auto">
        <!--Start Topbar -->
        <!--End Topbar -->
        <main class="relative z-0 flex-1 pb-8 px-6 bg-white">
            <div class="grid pb-10  mt-4 ">
                <!-- Start Content-->
                <div class="mb-2">
                    <p class="text-lg font-semibold text-gray-400">Dashboard</p>
                </div>
                {{-- <div class="grid grid-cols-12 gap-6 border-b-2 pb-5">
                    <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
                        <div
                            class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 mt-3">
                            <div class="p-4">
                                <p class="text-xl font-bold">RM 45,941</p>
                                <p class="text-xs font-semibold text-gray-400">Overdue</p>
                            </div>
                            <div class="p-4">
                                <p class="text-xl font-bold">RM 37,500</p>
                                <p class="text-xs font-semibold text-gray-400">Total Outstanding</p>
                            </div>
                            <div class="p-4">
                                <p class="text-xl font-bold">RM 9,200</p>
                                <p class="text-xs font-semibold text-gray-400">In Process</p>
                            </div>
                            <div class=" p-4">
                                <p class="text-xl font-bold">RM 5,700</p>
                                <p class="text-xs font-semibold text-gray-400">Paid Today</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-4 lg:col-span-4 xxl:col-span-4">
                        <div class="p-4">
                            <p class="text-sm text-gray-400">Outstanding Revenue</p>
                            <div class="shadow w-full bg-gray-100 mt-2">
                                <div class="bg-indigo-600 text-xs leading-none py-1 text-center text-white"
                                    style="width: 55%"></div>
                            </div>
                            <p class="text-xs font-semibold text-gray-400 mt-2">RM 45,941 Overdue</p>
                        </div>
                    </div>
                </div> --}}
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-3">
                    <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                        style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                        <div class="absolute inset-0 bg-pink-900 bg-opacity-75 transition duration-300 ease-in-out">
                        </div>
                        <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                            <div>
                                <h3 class="text-center text-white text-lg">
                                    List Account
                                </h3>
                                <h3 class="text-center text-white text-lg mt-2">
                                    Berisi seluruh daftar acount dari user
                                </h3>
                                <div class="flex space-x-4 mt-4">
                                    <a href="/list-acount" class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline 
                                          focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                        style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                        <div class="absolute inset-0 bg-yellow-600 bg-opacity-75 transition duration-300 ease-in-out">
                        </div>
                        <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                            <div>
                                <h3 class="text-center text-white text-lg">
                                    List Guest
                                </h3>
                                <h3 class="text-center text-white text-lg mt-2">
                                    Berisi seluruh daftar link yang telah terbuat
                                </h3>
                                <div class="flex space-x-4 mt-4">
                                    <a href="/list-guest"
                                        class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline 
                                                                          focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                        style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                        <div class="absolute inset-0 bg-blue-900 bg-opacity-75 transition duration-300 ease-in-out">
                        </div>
                        <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                            <div>
                                <h3 class="text-center text-white text-lg">
                                    List Template
                                </h3>
                                <h3 class="text-center text-white text-lg">
                                    Berisi seluruh template yang telah terdaftar
                                </h3>
                                <div class="flex space-x-4 mt-4">
                                    <a href="/list-template"
                                        class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline 
                                                                          focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
                        style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                        <div class="absolute inset-0 bg-blue-900 bg-opacity-75 transition duration-300 ease-in-out">
                        </div>
                        <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                            <div>
                                <h3 class="text-center text-white text-lg">
                                    Tambah Template
                                </h3>
                                <div class="flex space-x-4 mt-4">
                                    <a href="/buat-template"
                                        class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline 
                                                                          focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                        Buat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Content-->
            </div>
        </main>
    </div>
</body>

</html>