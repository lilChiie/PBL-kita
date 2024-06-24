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
    <section class="pt-[90px] sm:ml-[220px] pb-12 flex justify-center">
        <div class="bg-white w-full mx-5 rounded-md pb-40">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">Akademi</h1>
            </div>

            <div class="grid gap-x-5 sm:gap-x-10 gap-y-2 grid-cols-2 mx-5 sm:mx-10 mt-2">
                <div class="group " data-aos="zoom-out-up" data-aos-delay="300">
                    <a href="{{ route('admin.pelatihan') }}" class="hover:brightness-50">
                        <div class="hero bg-cover object-cover bg-center h-36 md:h-64 lg:h-80" style="background-image: url('/storage/properti/latar.png');">
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
                    <a href="{{ route('admin.kegiatan') }}" class="hover:brightness-50">
                        <div class="hero bg-cover object-cover bg-center h-36 md:h-64 lg:h-80" style="background-image: url('/storage/properti/latar.png');">
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

                <!-- edited -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs uppercase bg-gray-500 text-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Judul Pembayaran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftaran as $data)
                            <tr class="odd:bg-sky-100 even:bg-gray-50 border-b border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{$data->activity['title']}}
                                </th>
                                <td class="px-6 py-4">
                                    {{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{$data->status}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{route('admin.pembayaran.detail', $data->pembayaran_id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $pendaftaran->links() }}
                    </div>
                </div>
                <!-- edited -->

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
    @vite('resources/js/admin.js')
</body>

</html>