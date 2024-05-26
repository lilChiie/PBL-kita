<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademi</title>
</head>

<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeradmin')

    <!-- Content Start -->
    <section class="pt-36 sm:pt-40 pb-12 mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md pb-40">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">Akademi</h1>
            </div>

            <div class="grid gap-x-5 sm:gap-x-10 gap-y-2 grid-cols-2 mx-5 sm:mx-10 mt-2">
                <div class="group " data-aos="zoom-out-up" data-aos-delay="300">
                    <a href="/admin/pelatihan" class="hover:brightness-50">
                        <div class="hero bg-cover bg-center h-36 md:h-64 lg:h-80" style="background-image: url('/storage/properti/4.jpg');">
                            <div class="hero-overlay bg-opacity-70"></div>
                            <div class="hero-content text-center text-neutral-content">
                                <div class="max-w-md">
                                    <h1 class="py-3 text-xs md:text-2xl lg:text-4xl text-black group-hover:text-white">Pelatihan</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="group" data-aos="zoom-out-up" data-aos-delay="200">
                    <a href="/admin/kegiatan" class="hover:brightness-50">
                        <div class="hero bg-cover bg-center h-36 md:h-64 lg:h-80" style="background-image: url('/storage/properti/4.jpg');">
                            <div class="hero-overlay bg-opacity-70"></div>
                            <div class="hero-content text-center text-neutral-content">
                                <div class="max-w-md">
                                    <h1 class="py-3  text-xs md:text-2xl lg:text-4xl text-black group-hover:text-white">Kegiatan</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- list peserta start -->
            <div class="mx-5 sm:mx-10">
                <hr class="border-t-2 my-4 md:my-6  border-black">
                <h1 class="text-nav mb-3 md:my-5 md:text-2xl">List Peserta</h1>
                <div class=" relative overflow-x-auto">
                    <table class="w-full text-xs sm:text-base text-left border-collapse border border-slate-500 ">
                        <thead class="text-xs text-center sm:text-base">
                            <tr>
                                <th scope="col" class="px-2 py-3 border border-slate-500">
                                    Judul Pembayaran
                                </th>
                                <th scope="col" class="px-2 py-3 border border-slate-500">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-2 py-3 border border-slate-500">
                                    Status
                                </th>
                                <th scope="col" class="px-2 py-3 border border-slate-500">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- data 1 -->
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-2 py-4 border border-slate-500">
                                    Judul
                                </td>
                                <td class="px-2 py-4 border border-slate-500">
                                    Tanggal
                                </td>
                                <td class="px-2 py-4 border border-slate-500">
                                    Sudah diKonfirmasi
                                </td>
                                <td class="px-2 py-4 border border-slate-500 text-center">
                                    <a href="/admin/akademi/detail_pembayaran" class=" text-white p-2 sm:px-4 rounded-md bg-nav 
                                hover:bg-gradb focus:bg-gradb transition duration-700">Detail</a>
                                </td>
                            </tr>

                            <!-- data 2 -->
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-2 py-4 border border-slate-500">
                                    Judul
                                </td>
                                <td class="px-2 py-4 border border-slate-500">
                                    Tanggal
                                </td>
                                <td class="px-2 py-4 border border-slate-500">
                                    Sudah diKonfirmasi
                                </td>
                                <td class="px-2 py-4 border border-slate-500 text-center">
                                    <a href="/admin/akademi/detail_pembayaran" class=" text-white p-2 sm:px-4 rounded-md bg-nav 
                                hover:bg-gradb focus:bg-gradb transition duration-700">Detail</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <hr class="border-t-2 my-8 md:my-12  border-black">
                <a href="/admin/akademi/barcode" class="text-xs md:text-base bg-nav text-white py-2 px-8 rounded-full hover:bg-gradb focus:bg-gradb">Edit Bercode Pembayaran</a>
            </div>
            <!-- list peserta end -->
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