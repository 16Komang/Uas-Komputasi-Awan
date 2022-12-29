<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    <div class="">
        {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ __('loginPage') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ __('registerPage') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif --}}

        @include('partials.Navbar')

        <div
            class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-10 lg:grid-cols-12 lg:pb-24 lg:pt-24">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="text-left max-w-2xl mb-4 text-4xl font-extrabold lg:leading-9 tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Website Undangan Pernikahan Online.</h1>
                <p
                    class="text-left max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 lg:leading-9">
                    Undang orang-orang terdekat dalam momen kebahagiaan pernikahan Anda dengan cara yang unik dan
                    menarik menggunakan My Wedding. Coba sekarang juga! </p>
                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href="{{ __('desain') }}" target="_blank">
                        <button type="button"
                            class="inline-flex items-center justify-center w-full px-5 py-3 mb-2  text-sm font-medium text-gray-900 bg-white border border-gray-400 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-200 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <img src={IconAdd} alt="" class='"w-4 h-4 mr-2' />
                            Buat Sekarang
                        </button>
                    </a>
                    <a href="/live-preview">
                        <button type="button"
                            class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-gray-900 bg-white border border-gray-400 rounded-lg sm:w-auto focus:outline-none hover:bg-gray-200 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <img src={IconPreview} alt="" class='"w-4 h-4 mr-2' />
                            Live Preview</button>
                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://our-wedding.link/_nuxt/img/banner_new_desktop.6ed28e9.png" alt="heroImage" />
            </div>
        </div>

        <section class="bg-gray-100 dark:bg-gray-900">
            <div
                class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
                <div class="col-span-2 mb-8 text-left">
                    <p class="text-lg font-medium text-purple-600 dark:text-purple-500">Tentang Kami</p>
                    <h2
                        class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">
                        Aplikasi Website Undangan</h2>
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                        My Wedding adalah aplikasi pembuatan website undangan online gratis yang menyediakan beberapa
                        template undangan pernikahan untuk bisa digunakan secara gratis
                    </p>
                    <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
                        <div>
                            <a href="/desain"
                                class="inline-flex items-center text-base font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 dark:hover:text-purple-700">
                                Kunjungi Berbagai Template yang Tersedia
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fillRule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clipRule="evenodd">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 text-left">
                    <div>
                        <svg class="w-10 h-10 mb-2 text-red-600 md:w-12 md:h-12 dark:text-red-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fillRule="evenodd"
                                d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z"
                                clipRule="evenodd"></path>
                        </svg>
                        <h3 class="mb-2 text-2xl font-bold dark:text-white">Responsif</h3>
                        <p class="font-light text-gray-500 dark:text-gray-400">Responsif untuk mobile</p>
                    </div>
                    <div>
                        <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" width="38"
                            height="30" viewBox="0 0 38 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M33.75 0H3.75C1.68187 0 0 1.68187 0 3.75V26.25C0 28.3181 1.68187 30 3.75 30H33.75C35.8181 30 37.5 28.3181 37.5 26.25V3.75C37.5 1.68187 35.8181 0 33.75 0ZM33.75 3.75V4.70813L18.75 16.3763L3.75 4.71V3.75H33.75ZM3.75 26.25V9.4575L17.5987 20.2294C17.9271 20.4873 18.3325 20.6275 18.75 20.6275C19.1675 20.6275 19.5729 20.4873 19.9013 20.2294L33.75 9.4575L33.7538 26.25H3.75Z"
                                fill="#F63854" />
                        </svg>
                        <h3 class="mb-2 text-2xl font-bold dark:text-white">Undangan Aktif</h3>
                        <p class="font-light text-gray-500 dark:text-gray-400">Dipercaya oleh lebih dari 100 orang</p>
                    </div>
                    <div>
                        <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" width="38"
                            width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M31.6667 13.3333H26.6667V1.66667C26.6667 1.22464 26.4911 0.800716 26.1785 0.488155C25.866 0.175595 25.442 0 25 0H1.66667C1.22464 0 0.800716 0.175595 0.488155 0.488155C0.175595 0.800716 0 1.22464 0 1.66667V25C0 27.7567 2.24333 30 5 30H28.3333C31.09 30 33.3333 27.7567 33.3333 25V15C33.3333 14.558 33.1577 14.134 32.8452 13.8215C32.5326 13.5089 32.1087 13.3333 31.6667 13.3333ZM5 26.6667C4.55797 26.6667 4.13405 26.4911 3.82149 26.1785C3.50893 25.866 3.33333 25.442 3.33333 25V3.33333H23.3333V25C23.3333 25.585 23.435 26.1467 23.6183 26.6667H5ZM30 25C30 25.442 29.8244 25.866 29.5118 26.1785C29.1993 26.4911 28.7754 26.6667 28.3333 26.6667C27.8913 26.6667 27.4674 26.4911 27.1548 26.1785C26.8423 25.866 26.6667 25.442 26.6667 25V16.6667H30V25Z"
                                fill="#F63854" />
                            <path
                                d="M6.66669 6.66667H20V10H6.66669V6.66667ZM6.66669 13.3333H20V16.6667H6.66669V13.3333ZM15 20H20V23.3333H15V20Z"
                                fill="#F63854" />
                        </svg>
                        <h3 class="mb-2 text-2xl font-bold dark:text-white">Doa & Ucapan</h3>
                        <p class="font-light text-gray-500 dark:text-gray-400">Kirim doa dan ucapan untuk pasangan
                            pengantin</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="lg:w-[85%] mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto text-left">
                    <h3 class="text-3xl text-left mb-2 font-bold leading-normal">
                        Cara Membuat Undangan kamu
                    </h3>
                    <p class="text-lg text-left font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        Cara mudah membuat undangan, hanya butuh 5 menit undangan kamu sudah bisa di sebarkan..
                    </p>
                    <ul class="list-none mt-6">
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span
                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">1</span>
                                </div>
                                <div>
                                    <h4 class="text-gray-600">
                                        Registrasi untuk membuat akun undangan kamu di sini.
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span
                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">2</span>
                                </div>
                                <div>
                                    <h4 class="text-gray-600">Isi Info Acara & Profile dan juga upload foto/gallery.
                                        Customize undangan kamu.</h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span
                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">3</span>
                                </div>
                                <div>
                                    <h4 class="text-gray-600">Pilih Preset / Template. Lihat daftar template kita</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                        <img alt="..."
                            src="https://images.unsplash.com/photo-1545232979-8bf68ee9b1af?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="w-full align-middle rounded-t-lg" />
                        <blockquote class="relative p-8 mb-4">
                            <p class="text-md font-light mt-2 text-white text-justify">
                                Buat website undangan pernikahanmu secara ekslusif dengan mudah cepat. Solusi website
                                undangan pernikahan
                                kamu jadi lebih berkesan!.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>


        <div id="download" class="my-14">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 mx-auto">
                <div class="grid mb-16 lg:mb-0 justify-items-end">
                    <img src="{{ URL('assets/images/conclusion-smartphone.png') }}" alt="alternative" />
                </div>
                <div class="lg:mt-24 xl:mt-44 xl:ml-12">
                    <p class="mb-9 text-gray-800 text-3xl leading-10 text-left">Temukan tema undangan unik dan menarik
                        dari My Wedding. Berbagai pilihan dan contoh desain undangan ekslusif ada disini</p>
                    <a href="/desain">
                        <button type="button"
                            class="text-white grid justify-items-start bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-10 py-3 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Selengkapnya
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <section id='featured' class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16 mx-auto">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white text-center">
                        Fitur keren dan lengkap</h2>
                </div>
                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0 text-center">
                    <div>
                        <div
                            class="flex mx-auto justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 bg-blue-500">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 text-white" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fillRule="evenodd"
                                    d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                    clipRule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Love Stories</h3>
                        <p class="text-gray-500 dark:text-gray-400">Ceritakan Kisah Cinta kamu dengan leluasa.</p>
                    </div>
                    <div>
                        <div
                            class="flex mx-auto justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 bg-blue-500">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 text-white" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Hitungan Mundur</h3>
                        <p class="text-gray-500 dark:text-gray-400">Jangan sampai terlewatkan moment indah kamu, hitung
                            mundur tanggal acara pernikahanmu.</p>
                    </div>
                    <div>
                        <div
                            class="flex mx-auto justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 bg-blue-500">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 text-white" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fillRule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clipRule="evenodd"></path>
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Tema Instan</h3>
                        <p class="text-gray-500 dark:text-gray-400">Tersedia berbagai macam tema siap pakai yang dapat
                            diganti kapan saja tanpa batas.</p>
                    </div>
                    <div>
                        <div
                            class="flex mx-auto justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 bg-blue-500">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 text-white" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                </path>
                                <path fillRule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clipRule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Countdown Timer</h3>
                        <p class="text-gray-500 dark:text-gray-400">Tersedia fitur countdown timer yang dapat berfungsi
                            sebagai pengingat waktu acara.</p>
                    </div>
                    <div>
                        <div
                            class="flex mx-auto justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 bg-blue-500">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 text-white" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Gallery Foto</h3>
                        <p class="text-gray-500 dark:text-gray-400">Share moment indah kamu dengan pasanganmu dengan
                            slideshow yang keren.</p>
                    </div>
                    <div>
                        <div
                            class="flex mx-auto justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 bg-blue-500">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 text-white" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fillRule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clipRule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Map Navigasi</h3>
                        <p class="text-gray-500 dark:text-gray-400">All in one navigasi lengkap, agar para tamu tidak
                            tersesat saat ke tempat kamu.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="mb-16 text-gray-800 text-center">
            <h2 class="text-3xl font-bold mb-12">Testimonials</h2>
            <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full">
                        <div class="flex justify-center">
                            <img class="rounded-full shadow-lg mb-6 w-16 h-16 mr-1"
                                src="https://images.unsplash.com/photo-1664784805210-9fa665e2b7e9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="avatar" />
                            <img class="rounded-full shadow-lg mb-6 w-16 h-16 ml-1"
                                src="https://images.unsplash.com/photo-1664784805210-9fa665e2b7e9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="avatar" />
                        </div>
                        <div class="flex flex-wrap justify-center">
                            <div class="grow-0 shrink-0 basis-auto w-full lg:w-8/12 px-3">
                                <div class="flex justify-center">
                                    <h5 class="text-lg font-bold mb-3">Pengantin Pria</h5>
                                    <h5 class="text-lg font-bold mb-3">Pengantin Wanita</h5>
                                </div>
                                <p class="font-medium text-gray-700 mb-4">Photographer</p>
                                <p class="text-gray-500 mb-6">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left"
                                        class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z">
                                        </path>
                                    </svg>
                                    Sangat mudah digunakan, undangan pernikahan langsung bisa dibagikan dengan cepat!.
                                </p>
                                <ul class="flex justify-center mb-0">
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                            class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                            </path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.Footer')

    </div>
</body>

</html>