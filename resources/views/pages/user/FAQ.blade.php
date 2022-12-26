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

    @include('partials.Navbar')
    <section class="bg-white dark:bg-gray-900 mt-14 text-left max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6">
        <h2
            class="text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">
            Pertanyaan Umum
        </h2>
        <p class="font-light text-gray-500 lg:text-base text-center dark:text-gray-400">
            Berikut ini jawaban dari pertanyaan yang paling sering diajukan. <br> Jika pertanyaan kamu masih belum juga
            terjawab, silakan menghubungi
            <a href=" {{ __('contactus') }}" class="text-blue-500 font-bold">
                kami.
            </a>
        </p>
        <div class="px-8 mx-auto mt-10 space-y-2 shadow lg:max-w-3xl">
            <details class="p-4 rounded-lg">
                <summary class="font-semibold">Apa yang saya siapkan untuk membuat undangan online?</summary>
                <div class="mt-3">
                    <p class="text-sm leading-6 text-gray-600">
                        Cukup register, kemudian isi form yang telah kami sediakan lalu bagiakan undangan.
                    </p>
                </div>
            </details>
            <details class="p-4 rounded-lg">
                <summary class="font-semibold">
                    Apakah bisa custom tema sesuai keinginan saya?
                </summary>
                <div class="mt-3">
                    <p class="text-sm leading-6 text-gray-600">
                        Tema kami dapat kamu sesuaikan sesuai kebutuhan, silakan gunakan tema yang telah tersedia. Mohon
                        maaf tidak melayani
                        pembuatan tema selain yang telah kami sediakan.
                    </p>
                </div>
            </details>
            <details class="p-4 rounded-lg">
                <summary class="font-semibold">
                    Apakah bisa di bantu mengisi informasi dan kelengkapan undangan?
                </summary>
                <div class="mt-3">
                    <p class="text-sm leading-6 text-gray-600">
                        Kami senantiasa membantu kamu apabila terdapat kesulitan dalam mengisi informasi undangan
                        digital kami. Silakan WhatsApp
                        kami apabila membutuhkan bantuan.
                    </p>
                </div>
            </details>
        </div>
    </section>
    @include('partials.Footer')
</body>