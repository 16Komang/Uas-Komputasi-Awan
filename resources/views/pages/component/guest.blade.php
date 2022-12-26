<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    @include('partials.Navbar')

    {{-- Guest Book --}}
    <div id="guestbook" class="container my-14 mx-auto">
        <p class='text-black text-center font-great-vibes text-5xl mb-8'>Guest Book</p>
        <div class="max-w-2xl mx-auto">
            <form class="card bg-slate-200 text-gray-800 rounded-md p-4 mb-5 text-sm shadow relative z-10" method="post" action="{{ route('store', $data['id']) }}" name="guestInput">
                @csrf
                <div class="flex flex-wrap">
                    <div class="w-full md:w-full px-3 mb-2 mt-2 space-y-2">
                        <div>
                            <label for="type" class="flex justify-between"><span
                                    class="block text-sm font-medium text-gray-700">
                                    Nama
                                    <!---->
                                </span>
                                <!---->
                            </label>
                            <div class="mt-1"><input id="name_guest" type="text" name="name_guest" placeholder="Nama" autocomplete="" maxlength="200" value=""
                                    class="appearance-none block w-full p-3 min-h-[46px] border rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-pinky-500 focus:border-pinky-500 text-sm bg-gray-100 border-gray-300 dark:border-gray-warm">
                            </div>
                            <!---->
                        </div>
                        <!---->
                        <div class="grid grid-cols-2 gap-5">
                            <div class="col-span-2"><label class="block w-full">
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kedatangan</label>
                                        <select name="presence"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        {{-- <option value="Hadir" {{ old('presence') == "Hadir" }} selected>Hadir</option> --}}
                                        <option value="Hadir" {{ old('presence') == "Hadir" ? 'selected' : '' }}>Hadir</option>
                                        <option value="Belum Pasti" {{ old('presence') == "Belum Pasti" ? 'selected' : '' }}>Belum Pasti</option>
                                        <option value="Tidak Hadir" {{ old('presence') == "Tidak Hadir" ? 'selected' : '' }}>Tidak Hadir</option>
                                    </select>
                                        
                                    {{-- <select id="attendance_id" name="attendance_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach($att as $att)
                                        <option value="{{ $att->id }}" {{ old('attendance_id') == $att->id ? 'selected' : '' }}>
                                            {{ $att->name }}
                                        </option>
                                        @endforeach
                                    </select> --}}
                                </label>
                            </div>
                        </div>

                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ucapan
                            / Doa</label>
                        <textarea id="congratulation" name="congratulation" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tulis Ucapan"></textarea>
                    </div>
                    <div class="flex w-full justify-end px-3">
                        <div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Kirim
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="bg-slate-200 text-gray-800 p-4 pr-0 rounded-md shadow">
                {{-- Looping Data --}}
                <div class="flex flex-col space-y-3 h-80 overflow-y-scroll">
                    <div class="flex space-x-2 mr-4">
                        <div class="flex items-center justify-center space-x-2 text-left">
                            <div class="block">
                                <div class="bg-white w-auto rounded-xl px-4 pt-2 pb-2">
                                    <div>
                                        <span class="text-sm font-semibold">Putri Syafitri</span>
                                        <span
                                            class="bg-green-100 text-green-800 mx-1 inline-block px-2 py-0.5 text-xs font-medium rounded-md">
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
                                <div class="bg-white w-auto rounded-xl px-4 pt-2 pb-2">
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
                                <div class="bg-white w-auto rounded-xl px-4 pt-2 pb-2">
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
    </div>
    {{-- Akhir Guest Book --}}

    @include('partials.Footer')
</body>

</html>

<script>
    var copybtn = document.getElementById("copy-btn");
            var link = document.getElementById("link");
    
            copybtn.onclick = function () {
                navigator.clipboard.writeText(link.innerHTML);
                copybtn.innerHTML = "Copied"
                setTimeout(function (){
                    copybtn.innerHTML = "Copy"
                }, 2000)
            }
</script>