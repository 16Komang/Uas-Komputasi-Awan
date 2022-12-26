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
    @include('partials.Navbar')
    <div class="text-center">
        <p class="mt-4 text-sm leading-7 text-gray-500 font-regular uppercase">
            FORM
        </p>
        <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
            My <span class="text-indigo-600">Wedding</span>
        </h3>
        <p
            class="mx-auto max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 lg:leading-9">
            Cantumkan informasi yang benar dan terbaru.</p>
    </div>


    <!-- component -->
    <!-- component -->
    <div class="min-h-[70vh] bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-xl mx-auto">
            <div>
                <div class="bg-white rounded shadow-lg px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 lg:row-span-2">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Personal Details</p>
                            <p>Please fill out all the fields.</p>
                        </div>
                        
                        <div class="lg:col-span-2">
                            @foreach($data as $d)
                            <form role="form" action="{{ __('input-form/'.$d->id) }}" method="post" enctype="multipart/form-data">
                                @endforeach
                                @csrf
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                    {{-- <div class="md:col-span-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    
                                    <div class="md:col-span-3">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div><br>
                                    
                                    <div class="md:col-span-2">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                    </div>
                                    
                                    <div class="md:col-span-2">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                    </div> --}}
                                    
                                    <div class="md:col-span-2">
                                        <label for="zipcode">Tanggal</label>
                                        <input type="date" name="date" id="date"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="" value="" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="zipcode">Mulai</label>
                                    <input type="time" name="time_start" id="time_start"
                                    class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    placeholder="" value="" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="zipcode">Berakhir</label>
                                    <input type="time" name="time_end" id="time_end"
                                    class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    placeholder="" value="" />
                                </div>

                                <div class="md:col-span-3">
                                    <label for="address">Mempelai Pria</label>
                                    <input type="text" name="name_groom" id="name_groom"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div><br><br>
                                
                                <div class="md:col-span-2">
                                    <label for="nama_ayah_laki">Ayah Kandung</label>
                                    <input type="text" name="father_groom" id="father_groom"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="nama_ibu_laki">Ibu Kandung</label>
                                    <input type="text" name="mother_groom" id="mother_groom"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div><br>
                                
                                <div class="md:col-span-1">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="image_groom" id="image_groom"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div><br>
                                <div class="md:col-span-1"></div>
                                
                                <div class="md:col-span-3">
                                    <label for="address">Mempelai Wanita</label>
                                    <input type="text" name="name" id="name"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div><br><br>
                                
                                <div class="md:col-span-2">
                                    <label for="nama_ayah_laki">Ayah Kandung</label>
                                    <input type="text" name="father" id="father"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div>
                                    
                                <div class="md:col-span-2">
                                    <label for="nama_ibu_laki">Ibu Kandung</label>
                                    <input type="text" name="mother" id="mother"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div><br>
                                
                                <div class="md:col-span-1">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="image" id="image"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div>
                                
                                <div class="md:col-span-4"></div>
                                
                                
                                <div class="md:col-span-1">
                                    <label for="address">Nama Tempat</label>
                                    <input type="text" name="name_place" id="name_place"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div>
                                
                                <div class="md:col-span-3">
                                    <label for="address">Address / Street</label>
                                    <input type="text" name="address" id="address"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div>
                                
                                <div class="md:col-span-3">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea name="place_desc" id="place_desc" cols="70" rows="4"
                                    class="border mt-1 rounded px-4 w-full bg-gray-50"></textarea>
                                </div><br>

                                <div class="md:col-span-2">
                                    <label for="foto">Upload Foto Tempat</label>
                                    <input type="file" name="image_place" id="image_place"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div>
                                
                                <div class="md:col-span-4"></div>
                                
                                <div class="md:col-span-2">
                                    <label for="foto">Upload Gallery</label>
                                    <input type="file" name="image_gallery" id="image_gallery"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder=""/>
                                </div>
                                    
                                <div class="md:col-span-3">
                                    <label for="address">Nomor Rekening(optional)</label>
                                    <input type="text" name="rekening" id="rekening"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                                </div><br><br>
                                
                                <div class="md:col-span-5">
                                    <div class="inline-flex items-center">
                                        <input type="checkbox" name="billing_same" id="billing_same"
                                        class="form-checkbox" />
                                        <label for="billing_same" class="ml-2">My billing address is different than
                                            above.</label>
                                        </div>
                                    </div>
                                    
                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.Footer')
</body>
</html>
    
<script>
    handleSubmit (){
        alert('Berhasil Terisi')
    }
</script>