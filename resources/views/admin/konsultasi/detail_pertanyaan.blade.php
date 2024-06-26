<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail List Pertanyaan</title>
</head>

<body class="bg-latar text-black pb-12 min-h-screen">

    <!-- header -->
    @include('components.headeradmin')

    <!-- Content Start -->
    <section class="pt-16 sm:ml-[235px] mx-5 sm:mr-5 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-5">
            <h1 class="mx-5 md:mx-10 font-bold text-wjudul mt-8 md:text-lg lg:text-xl md:mt-12" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                Detail Pertanyaan
            </h1>

            <div class="text-xs md:text-base mx-5 md:mx-10 my-3 flex">
                <p class="font-bold text-wjudul">
                    Nama :
                </p>
                <p class="ml-2">
                    {{ $files->name }}
                </p>
            </div>
            <div class="text-xs md:text-base mx-5 md:mx-10 my-3 flex">
                <p class="font-bold text-wjudul">
                    Email :
                </p>
                <p class="ml-2">
                    {{ $files->email }}
                </p>
            </div>
            <div class="text-xs md:text-base mx-5 md:mx-10 my-3">
                <p class="font-bold text-wjudul">
                    Pertanyaan :
                </p>
                <p class="my-2">
                    {!! nl2br(e($files->pertanyaan)) !!}
                </p>
            </div>

            <div class="mt-20">
                <a href="/admin/konsultasi/pertanyaan" class="bg-latar py-1 pr-4 pl-8 font-bold text-nav text-xs sm:text-base
                 hover:text-black focus:text-white transition duration-1000">Kembali</a>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @vite('resources/js/admin.js')
</body>

</html>