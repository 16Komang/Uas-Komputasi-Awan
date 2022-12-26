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
    @include('partials.navbarAdmin')
    <!-- component -->
    <div class="flex items-center justify-center p-12 bg-slate-200">

        <div class="mx-auto w-full max-w-[550px] bg-white">
            <form action="{{ __('storeTemplate') }}" class="py-6 px-9" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="nama" class="mb-3 block text-base font-medium text-[#07074D]">
                        Nama Template:
                    </label>
                    <input type="text" name="name" id="name"
                        class="w-full rounded-md border border-gray-300 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-6 pt-4">
                    <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                        Cover
                    </label>

                    <div class="mb-8">
                        <input type="file" name="cover" id="file" class="sr-only" />
                        <label for="file"
                            class="relative flex min-h-[50px] items-center justify-center rounded-md border border-dashed border-gray-300 p-12 text-center">
                            <div>
                                <span
                                    class="inline-flex rounded border border-gray-300 py-2 px-7 text-base font-medium text-[#07074D]">
                                    Browse
                                </span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="mb-2">
                    <label for="filename" class="mb-3 block text-base font-medium text-[#07074D]">
                        Filename:
                    </label>
                    <input type="text" name="filename" id="filename"
                        class="w-full rounded-md border border-gray-300 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-2">
                    <label for="desc" class="mb-3 block text-base font-medium text-[#07074D]">
                        Desc:
                    </label>
                    <input type="text" name="desc" id="desc"
                        class="w-full rounded-md border border-gray-300 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div id="btn-kirim">
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Kirim File
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>