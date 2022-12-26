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
    <div class="lg:flex">
        <div class="w-full grid grid-cols-1 gap-4 min-h-screen">
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                <div class="mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">List Akun</h3>
                        <span class="text-base font-normal text-gray-500">
                            Berikut merupakan list akun yang terdaftar
                            pada website
                        </span>
                    </div>
                </div>
                <div class="flex flex-col mt-8">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ID
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @foreach($user as $u)
                                        <tr key={i}>
                                            <td
                                                class="p-4 whitespace-nowrap text-sm text-left font-normal text-gray-900">
                                                {{ $u->id }}
                                            </td>
                                            <td
                                                class="p-4 whitespace-nowrap text-sm text-left font-normal text-gray-900">
                                                {{ $u->name }}
                                            </td>
                                            <td
                                                class="p-4 whitespace-nowrap text-sm text-left font-normal text-gray-500">
                                                {{ $u->email }}
                                            </td>

                                            <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                <form method="POST" action="{{ route('destroy',$u->id) }}" class="flex align-middle items-center hover:underline">
                                                    @csrf
                                                    <button type="submit">
                                                        <img src="https://cdn-icons-png.flaticon.com/512/6861/6861362.png"
                                                            alt="" class="w-6">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>