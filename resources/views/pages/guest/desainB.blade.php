<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')

    <style>
        .custom-img {
            background-image:
                url("https://i.pinimg.com/originals/0c/58/4e/0c584eb19602a44335ed2f918e00e48a.png");
        }

        .bg-mempelai {
            background-image: url("https://i.pinimg.com/originals/fe/59/63/fe5963091b2ee13d15a8c705c1b34556.png");
        }
    </style>
</head>

<body>
    {{-- Header --}}
    <header id="header" class="h-screen bg-fixed bg-center bg-cover custom-img mb-10">
        <div class="flex h-screen">
            <div class="m-auto text-center">
                <p
                    class="text-xl text-gray-800 font-rale-way lg:text-3xl sm:text-xl font-bold sm:px-16 dark:text-gray-400">
                    We Are Getting Married
                </p>
                <p
                    class="leading-7 my-28 font-great-vibes lg:text-9xl text-7xl tracking-tight text-gray-900 dark:text-white ">
                    {{ $data['groom']->name }} & {{ $data['bride']->name }}
                </p>
                <div class="flex-1 flex flex-col justify-center mx-auto">
                    <div class="flex flex-col items-center ml-2">
                        <p class="text-gray-800 uppercase text-sm">Time left until lunching</p>
                        <div class="flex items-center justify-center space-x-4 mt-4"
                            x-data="timer(new Date('{{ $data['invitation']->date }}'))" x-init="init();">
                            <div class="flex flex-col items-center px-4">
                                <span x-text="time().days" class="text-4xl lg:text-5xl text-gray-400">00</span>
                                <span class="text-gray-700 mt-2">Days</span>
                            </div>
                            <span class="w-[1px] h-24 bg-gray-400"></span>
                            <div class="flex flex-col items-center px-4">
                                <span x-text="time().hours" class="text-4xl lg:text-5xl text-gray-400">23</span>
                                <span class="text-gray-700 mt-2">Hours</span>
                            </div>
                            <span class="w-[1px] h-24 bg-gray-400"></span>
                            <div class="flex flex-col items-center px-4">
                                <span x-text="time().minutes" class="text-4xl lg:text-5xl text-gray-400">59</span>
                                <span class="text-gray-700 mt-2">Minutes</span>
                            </div>
                            <span class="w-[1px] h-24 bg-gray-400"></span>
                            <div class="flex flex-col items-center px-4">
                                <span x-text="time().seconds" class="text-4xl lg:text-5xl text-gray-400">28</span>
                                <span class="text-gray-700 mt-2">Seconds</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Notes --}}
    <section class="text-center">
        <div class="max-w-2xl m-auto text-center px-5 information-content">
            <div>
                <div>
                    <h2 class="text-3xl mb-5 text-secondary font-bold">Notes</h2>
                    <div class="margin-auto">
                        <div class="">
                            Protokol Covid-19
                        </div>
                        <br>
                        <p>
                            Dalam upaya mengurangi penyebaran Covid 19 pada masa pandemi, kami harapkan kedatangan para
                            tamu undangan agar menjalankan protokol yang berlaku.
                        </p>
                        <div class="flex mx-auto justify-center">
                            <div class="w-44">
                                <img src="https://datengdong.com/image/protocol/masker.png" alt="masker"
                                    class="mx-auto">
                                <br>
                                Wajib Menggunakan Masker
                            </div>
                            <div class="w-44">
                                <img src="https://datengdong.com/image/protocol/distance.png" alt="distance"
                                    class="mx-auto">
                                <br>
                                Saling Menjaga Jarak di Dalam Acara
                            </div>
                            <div class="w-44">
                                <img src="https://datengdong.com/image/protocol/wash.png" alt="masker" class="mx-auto">
                                <br>
                                Jaga Kebersihan dengan Mencuci Tangan atau Handsanitizer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Notes --}}

    {{-- Pasangan Pengantin --}}
    <div id="profile-pengantin" class="text-center mt-20">
        <h2 class="mb-3 text-3xl font-bold tracking-normal leading-none text-gray-900 md:text-4xl dark:text-white">
            Pasangan Pengantin</h2>
        <p class="mb-10"><i>Assalamu’alaikum Warahmatullahi Wabarakatuh</i><br><br>Maha suci Allah
            SWT
            yang
            telah menciptakan makhluk-Nya berpasang-pasangan.<br>Ya Allah, perkenankanlah kami merangkai kasih sayang
            yang
            Kau
            ciptakan di antara putra-putri kami:<br>
        </p>
    </div>
    {{-- Akhir Pasangan Pengantin --}}

    {{-- Data Pengantin --}}
    <div
        class="lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 md:grid sm:grid md:grid-cols-2 grid-cols-2 max-w-3xl mx-auto my-20">
        <div class="p-5 aos-init aos-animate">
            <div class="bg-center bg-cover bg-mempelai">
                <img src="https://demo.templateflip.com/wonderful-wedding/images/bride.jpg" alt="Romeo"
                    class="rounded-full p-14">
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold caption">{{ $data['groom']->name }}</h2>
                <h3 class="text-lg mb-2 mt-2">{{ $data['groom']->name }}</h3>
                <p>Putra dari Pasangan</p>
                <p class="text-secondary">{{ $data['groom']->father }} &amp; {{ $data['groom']->mother }}</p>
                <p class="mt-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" width="24px" height="24px" class="inline-flex w-4">
                        {{-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path> --}}
                    </svg> 
                    {{-- Yogyakarta --}}
                </p>
            </div>
            <div class="mt-5 text-center">
                <a href="https://www.instagram.com/datengdongcom"><svg fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px"
                        class="w-6 text-black opacity-30 w-6 hover:opacity-50 inline-block">
                        <path
                            d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
                        </path>
                    </svg></a>
                <a href="https://www.twitter.com/datengdong"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 30 30" width="30px" height="30px"
                        class="w-6 text-black opacity-30 w-6 hover:opacity-50 inline-block">
                        <path
                            d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z">
                        </path>
                    </svg></a>
            </div>
        </div>
        <div class="p-5 aos-init aos-animate">
            <div class="bg-center bg-cover bg-mempelai">
                <img src="https://demo.templateflip.com/wonderful-wedding/images/bride.jpg" alt="Romeo"
                    class="rounded-full p-14">
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold caption">{{ $data['bride']->name }}</h2>
                <h3 class="text-lg mb-2 mt-2">{{ $data['bride']->name }}</h3>
                <p>Putri dari Pasangan</p>
                <p class="text-secondary">{{ $data['bride']->father }} &amp; {{ $data['bride']->mother }}</p>
                <p class="mt-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" width="24px" height="24px" class="inline-flex w-4">
                        {{-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
                        </path> --}}
                    </svg> 
                    {{-- Surakarta --}}
                </p>
            </div>
            <div class="mt-5 text-center">
                <a href="https://www.instagram.com/datengdongcom"><svg fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px"
                        class="w-6 text-black opacity-30 w-6 hover:opacity-50 inline-block">
                        <path
                            d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
                        </path>
                    </svg></a>
                <a href="https://www.twitter.com/datengdong"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 30 30" width="30px" height="30px"
                        class="w-6 text-black opacity-30 w-6 hover:opacity-50 inline-block">
                        <path
                            d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z">
                        </path>
                    </svg></a>
            </div>
        </div>
    </div>
    {{-- Akhir Data Pengantin --}}

    {{-- Agenda --}}
    <div id="agenda" class="bg-slate-200 py-8">
        <div class="w-full 2xl:w-3/4 flex items-center justify-center px-8 md:px-32 lg:px-16 2xl:px-0 mx-auto">
            <div class="w-full flex flex-col sm:flex-col md:flex-col lg:flex-row gap-8">
                <div class="bg-white shadow-2xl rounded-lg py-4">
                    <p class="text-xl text-center font-bold text-blue-600">Akad Nikah</p>
                    <ul class="border-t border-gray-300 py-8 space-y-6 text-center">
                        <li class="flex items-center space-x-2 px-8 justify-center">
                            <span class="text-gray-600 capitalize">
                                {{ $data['invitation']->date }}
                                <br>
                                {{ $data['invitation']->time_start }} - {{ $data['invitation']->time_end }} WIB
                            </span>
                        </li>
                        <li class="flex items-center space-x-2 px-8 justify-center">
                            <span class="text-gray-600 capitalize">
                                {{ $data['place']->name }}
                                <br>
                                {{ $data['place']->address }}
                            </span>
                        </li>
                        <li class="flex items-center space-x-2 px-8 justify-center">
                            <span class="text-gray-600 capitalize">
                                {{ $data['place']->address }}
                            </span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center mt-6">
                        <a href="#"
                            class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150"
                            title="Purchase">Google Map</a>
                    </div>
                </div>
                {{-- <div class="bg-white shadow-2xl rounded-lg py-4">
                    <p class="text-xl text-center font-bold text-blue-600">Akad Nikah</p>
                    <ul class="border-t border-gray-300 py-8 space-y-6 text-center">
                        <li class="flex items-center space-x-2 px-8 justify-center">
                            <span class="text-gray-600 capitalize">
                                Minggu, 12 Februari 2023
                                <br>
                                08:00 - 09:00 WIB
                            </span>
                        </li>
                        <li class="flex items-center space-x-2 px-8 justify-center">
                            <span class="text-gray-600 capitalize">
                                Masjid Kampus UGM
                                <br>
                                Jl. Prof. DR. Drs
                            </span>
                        </li>
                        <li class="flex items-center space-x-2 px-8 justify-center">
                            <span class="text-gray-600 capitalize">
                                Notonagoro, Karang Malang, Caturtunggal, Kec. Depok, Kabupaten Sleman, Yogyakarta
                            </span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center mt-6">
                        <a href="#"
                            class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150"
                            title="Purchase">Google Map</a>
                    </div>
                </div>
                <div class="bg-white shadow-2xl rounded-lg py-4">
                    <p class="text-xl text-center font-bold text-blue-600">Resepsi</p>
                    <ul class="border-t border-gray-300 py-8 space-y-6 text-center">
                        <li class="flex items-center space-x-2 px-8 justify-center">
                            <span class="text-gray-600 capitalize">
                                Minggu, 12 Februari 2023
                                <br>
                                08:00 - 09:00 WIB
                            </span>
                        </li>
                        <li class="flex items-center space-x-2 px-8 justify-center">
                            <span class="text-gray-600 capitalize">
                                Masjid Kampus UGM
                                <br>
                                Jl. Prof. DR. Drs
                            </span>
                        </li>
                        <li class="flex items-center space-x-2 px-8 justify-center">
                            <span class="text-gray-600 capitalize">
                                Notonagoro, Karang Malang, Caturtunggal, Kec. Depok, Kabupaten Sleman, Yogyakarta
                            </span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center mt-6">
                        <a href="#"
                            class="bg-blue-600 hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150"
                            title="Purchase">Google Map</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- Akhir Agenda --}}

    {{-- Gallery --}}
    <section id='gallery' class="overflow-hidden text-gray-700 max-w-screen-xl mx-auto">
        <div class="container px-5 mx-auto lg:px-32 my-10">
            <p class='text-black text-center font-great-vibes text-5xl pb-14'>Gallery</p>
            <div class="flex flex-wrap -m-1 md:-m-2">
                <div class="flex flex-wrap lg:w-1/2">
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                            src="{{asset('images/gallery/'.$data['gallery']->name)}}" />
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                            src="{{asset('images/gallery/'.$data['gallery']->name)}}" />
                    </div>
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                            src="{{asset('images/gallery/'.$data['gallery']->name)}}" />
                    </div>
                </div>
                <div class="flex flex-wrap lg:w-1/2">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                            src="{{asset('images/gallery/'.$data['gallery']->name)}}" />
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                            src="{{asset('images/gallery/'.$data['gallery']->name)}}" />
                    </div>
                    <div class="w-1/2 p-1 md:p-2">

                        <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                            src="{{asset('images/gallery/'.$data['gallery']->name)}}" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Gallery --}}

    {{-- Kado --}}
    <!-- component -->
    <div id="hadiah" class="flex flex-col max-w-screen-xl mx-auto">
        <h2 class="mb-4 text-3xl font-bold text-center">Kirim Hadiah</h2>

        <div class="mt-4 flex flex-col gap-4 sm:flex-row lg:flex-row xl:flex-row mx-auto">
            <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>

                <div class="ml-4">
                    <h2 class="font-semibold">Direck Bank</h2>
                    {{-- Loop Data --}}
                    <p class="mt-2 text-sm text-gray-500">{{ $data['invitation']->rekening }}</p>
                    {{-- <p class="mt-2 text-sm text-gray-500">{{ $data['invitation']->rekening }}</p> --}}
                </div>
            </div>

            <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-4">
                    <h2 class="font-semibold">Alamat Tempat</h2>
                    <p class="mt-2 text-sm text-gray-500">{{ $data['place']->address }}</p>
                </div><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
    {{-- Akhir Kado --}}

    {{-- Guest Book --}}
    {{-- <div id="guestbook" class="container">
        <p class='text-black text-center font-great-vibes text-5xl my-8'>Guest Book</p>
        <div class="max-w-2xl mx-auto">
            <form class="card bg-white text-gray-800 rounded-md p-4 mb-5 text-sm shadow relative z-10">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-full px-3 mb-2 mt-2 space-y-2">
                        <div><label for="type" class="flex justify-between"><span
                                    class="block text-sm font-medium text-gray-700">
                                    Nama
                                    <!---->
                                </span>
                                <!---->
                            </label>
                            <div class="mt-1"><input id="type" type="text" name="type" placeholder="Nama"
                                    disabled="disabled" autocomplete="" maxlength="200" value=""
                                    class="appearance-none block w-full p-3 min-h-[46px] border rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-pinky-500 focus:border-pinky-500 text-sm bg-gray-100 cursor-not-allowed  border-gray-300 dark:border-gray-warm">
                            </div>
                            <!---->
                        </div>
                        <!---->
                        <div class="grid grid-cols-2 gap-5">
                            <div class="col-span-2"><label class="block w-full">
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kedatangan</label>
                                    <select id="countries"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="hadir" selected>Hadir</option>
                                        <option value="hadir">Hadir</option>
                                        <option value="belom pasti">Belom Pasti</option>
                                        <option value="tidak hadir">Tidak Hadir</option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ucapan
                            / Doa</label>
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tulis Ucapan"></textarea>
                    </div>
                    <div class="flex w-full justify-end px-3">
                        <div>
                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Kirim
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="bg-white text-gray-800 p-4 pr-0 rounded-md shadow mb-36">
                {{-- Looping Data --}}
                {{-- <div class="flex flex-col space-y-3 h-80 overflow-y-scroll">
                    <div class="flex space-x-2 mr-4">
                        <div class="flex items-center justify-center space-x-2 text-left">
                            <div class="block">
                                <div class="bg-gray-100 w-auto rounded-xl px-4 pt-2 pb-2">
                                    <div>
                                        <span class="text-sm font-semibold">Putri Syafitri</span>
                                        <span
                                            class="bg-green-100 text-green-800 mx-1 inline-block px-2 py-0.5 text-xs font-medium bg-green-100 rounded-md">
                                            Hadir
                                        </span>
                                    </div>
                                    <div class="text-sm">Selamat Julietku sayaang, semoga bahagia selalu dan jangan lupa
                                        buka kado dari akuh!</div>
                                </div>
                                <div class="flex justify-start items-center text-xs w-full">
                                    <div class="font-semibold text-gray-700 px-2 flex items-center justify-center">
                                        <small>08 Maret 2021 17:21</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 mr-4">
                        <div class="flex items-center justify-center space-x-2 text-left">
                            <div class="block">
                                <div class="bg-gray-100 w-auto rounded-xl px-4 pt-2 pb-2">
                                    <div>
                                        <span class="text-sm font-semibold">Sebastian Parto</span>
                                        <span
                                            class="bg-indigo-100 text-indigo-800 mx-1 inline-block px-2 py-0.5 text-xs font-medium bg-green-100 rounded-md">Belum
                                            Pasti
                                        </span>
                                    </div>
                                    <div class="text-sm">Buah jambu Buah kedondong, uhuy akhirnya kawanku nikah dong.
                                        Semoga
                                        menjadi keluarga sakinah, mawadah, warahmah aamiin.</div>
                                </div>
                                <div class="flex justify-start items-center text-xs w-full">
                                    <div class="font-semibold text-gray-700 px-2 flex items-center justify-center">
                                        <small>08 Maret 2021 17:19</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 mr-4">
                        <div class="flex items-center justify-center space-x-2 text-left">
                            <div class="block">
                                <div class="bg-gray-100 w-auto rounded-xl px-4 pt-2 pb-2">
                                    <div>
                                        <span class="text-sm font-semibold">Erina Kaguya</span>
                                        <span
                                            class="bg-orange-100 text-orange-800 mx-1 inline-block px-2 py-0.5 text-xs font-medium bg-green-100 rounded-md">Tidak
                                            Hadir
                                        </span>
                                    </div>
                                    <div class="text-sm">Omedetoiiii.. Semoga bahagia selalu bersama pasangan!</div>
                                </div>
                                <div class="flex justify-start items-center text-xs w-full">
                                    <div class="font-semibold text-gray-700 px-2 flex items-center justify-center">
                                        <small>08 Maret 2021 17:17</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- Akhir Guest Book --}}

    {{-- Bottom Bar --}}
    <div>
        <div class="fixed bottom-4 z-50 left-0 right-0 w-fit m-auto px-2">
            <div class="bg-white relative flex justify-between px-2 sm:px-6 overflow-hidden shadow rounded-2xl">
                <nav class="scrollactive-nav flex items-center justify-between sm:gap-6 min-w-min">

                    <a href="#header"
                        class="scrollactive-item grid w-12 h-16 sm:w-16 sm:h-16 pt-1 grid-cols-1 grid-rows-1">
                        <span class="sr-only">Beranda</span>
                        <div
                            class="col-[1/1] row-[1/1] flex items-center justify-center flex-col sm:w-16 h-14 space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true" width="24px" height="24px"
                                class="text-amber-600 flex-shrink-0 h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <div class="text-amber-600 sm:text-xs text-[0.60rem]">Beranda</div>
                        </div>
                    </a>

                    <a href="#profile-pengantin"
                        class="scrollactive-item grid w-12 h-16 sm:w-16 sm:h-16 pt-1 grid-cols-1 grid-rows-1">
                        <span class="sr-only">Mempelai</span>
                        <div
                            class="col-[1/1] row-[1/1] flex items-center justify-center flex-col sm:w-16 h-14 space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true" width="24px" height="24px"
                                class="text-amber-600 flex-shrink-0 h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                            <div class="text-amber-600 sm:text-xs text-[0.60rem]">Mempelai</div>
                        </div>
                    </a>

                    <a href="#agenda"
                        class="scrollactive-item grid w-12 h-16 sm:w-16 sm:h-16 pt-1 grid-cols-1 grid-rows-1"><span
                            class="sr-only">Acara</span>
                        <div
                            class="col-[1/1] row-[1/1] flex items-center justify-center flex-col sm:w-16 h-14 space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true" width="24px" height="24px"
                                class="text-amber-600 flex-shrink-0 h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <div class="text-amber-600 sm:text-xs text-[0.60rem]">Acara</div>
                        </div>
                    </a>
                    <a href="#gallery"
                        class="scrollactive-item grid w-12 h-16 sm:w-16 sm:h-16 pt-1 grid-cols-1 grid-rows-1"><span
                            class="sr-only">Galeri</span>
                        <div
                            class="col-[1/1] row-[1/1] flex items-center justify-center flex-col sm:w-16 h-14 space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true" width="24px" height="24px"
                                class="text-amber-600 flex-shrink-0 h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <div class="text-amber-600 sm:text-xs text-[0.60rem]">Galeri</div>
                        </div>
                    </a>
                    <a href="#hadiah"
                        class="scrollactive-item grid w-12 h-16 sm:w-16 sm:h-16 pt-1 grid-cols-1 grid-rows-1"><span
                            class="sr-only">Hadiah</span>
                        <div
                            class="col-[1/1] row-[1/1] flex items-center justify-center flex-col sm:w-16 h-14 space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true" width="24px" height="24px"
                                class="text-amber-600 flex-shrink-0 h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7">
                                </path>
                            </svg>
                            <div class="text-amber-600 sm:text-xs text-[0.60rem]">Hadiah</div>
                        </div>
                    </a><a href="#guestbook"
                        class="scrollactive-item grid w-12 h-16 sm:w-16 sm:h-16 pt-1 grid-cols-1 grid-rows-1"><span
                            class="sr-only">Ucapan</span>
                        <div
                            class="col-[1/1] row-[1/1] flex items-center justify-center flex-col sm:w-16 h-14 space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true" width="24px" height="24px"
                                class="text-amber-600 flex-shrink-0 h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                                </path>
                            </svg>
                            <div class="text-amber-600 sm:text-xs text-[0.60rem]">Ucapan</div>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
    </div>
    {{-- Bottom Bar --}}

</body>

</html>

<script>
    function timer(expiry) {
            return {
                expiry: expiry,
                remaining:null,
                init() {
                this.setRemaining()
                setInterval(() => {
                    this.setRemaining();
                }, 1000);
                },
                setRemaining() {
                const diff = this.expiry - new Date().getTime();
                this.remaining =  parseInt(diff / 1000);
                },
                days() {
                return {
                    value:this.remaining / 86400,
                    remaining:this.remaining % 86400
                };
                },
                hours() {
                return {
                    value:this.days().remaining / 3600,
                    remaining:this.days().remaining % 3600
                };
                },
                minutes() {
                    return {
                    value:this.hours().remaining / 60,
                    remaining:this.hours().remaining % 60
                };
                },
                seconds() {
                    return {
                    value:this.minutes().remaining,
                };
                },
                format(value) {
                return ("0" + parseInt(value)).slice(-2)
                },
                time(){
                    return {
                    days:this.format(this.days().value),
                    hours:this.format(this.hours().value),
                    minutes:this.format(this.minutes().value),
                    seconds:this.format(this.seconds().value),
                }
                },
            }
        }
</script>