<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
</head>

<body class="bg-latar text-black min-h-screen">

    <!-- header -->
    @include('components.headeradmin')

    <!-- Content Start -->

    <!-- tombol tambah start -->
    <div class="fixed right-0 bottom-16 z-10">
        <a href="{{route('admin.tentangkami.tambah')}}" class="bg-nav rounded-l-md hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
            transition duration-700 focus:bg-gradb">
            Tambah
        </a>
    </div>
    <!-- tombol tambah end -->

    <section class="pt-36 mx-2 sm:mx-8 sm:pt-40 pb-20">
        @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    title: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
        @endif

        <div class="bg-white w-full rounded-md pb-12">
            <h1 class="ml-2 pt-2 sm:pt-6 md:ml-8 font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-8" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                Tentang Kami
            </h1>

            @foreach ($files as $file)
            <!-- item 1 -->
            <div class="px-2 md:px-10 items-center mb-8" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <a href="{{ route('admin.tentangkami.detail', $file->tentang_id) }}">
                            <img class="w-full xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 object-cover hover:brightness-50" src="{{ asset('images/'.$file->photo) }}" alt="gambar pelatihan" />
                        </a>
                    </div>
                    <div class="mx-2 h-20 sm:px-2 sm:h-28 md:h-44 sm:pt-3 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-[11px] md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 ">{{ $file->title }}</h5>
                        <p class="text-[9px] md:text-base overflow-hidden h-[40px] sm:h-10 md:h-12 lg:h-[72px]">
                            {!! nl2br(e($file->content)) !!}
                        </p>
                        <hr class="border-t-1 border-black mt-1">
                        <a href="{{ route('admin.tentangkami.detail', $file->tentang_id) }}" class="text-[8px] md:text-xs lg:text-base hover:text-sky-600">
                            selengkapnya...
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

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