<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tentang Kami</title>
</head>

<body class="bg-latar text-black pb-12">

    <!-- header -->
    @include('components.headeradmin')

     <!-- edited -->
    <div class="fixed left-0 top-48 z-10">
        <a href="/admin/tentangkami" class="bg-nav rounded-r-md hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
            transition duration-700 focus:bg-gradb">
            Kembali
        </a>
    </div>
    <!-- edited -->

    <!-- Content Start -->
    <section class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-12">
            <div class="px-5 pt-20 md:px-20 w-full ">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <!-- form tambah start -->
                    <form method="POST" action="{{route('admin.tentangkami.tambah')}}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input class="block w-full  text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file" name="photo" value="{{ old('photo') }}">
                        </div>
                        @error('photo')
                        <small>{{ $message }}</small>
                        @enderror
                        <div>
                            <input name="title" type="text" class="w-full border-black rounded-lg mt-5" placeholder="Tambah Judul.." value="{{ old('title') }}">
                        </div>
                        @error('title')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="border border-black mt-5 rounded-lg">
                            <textarea name="content" id="informasi" rows="15" class="block w-full  text-sm border-none focus:ring-primary-500 focus:border-primary-500 overflow-y-scroll" placeholder="Tambah Informasi...">{{ old('content') }}</textarea>
                        </div>
                        @error('content')
                        <small>{{ $message }}</small>
                        @enderror

                        <div class="flex justify-end">
                            <button href="/admin/tentangkami" type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
                                rounded-md mt-5">
                                Tambah
                            </button>
                        </div>
                    </form>
                    <!-- form tambah end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->


    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @vite('resources/js/fituruser.js')
</body>

</html>