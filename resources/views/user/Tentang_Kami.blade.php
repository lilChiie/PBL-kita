<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
</head>

<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeruser')

    <!-- Content Start -->
    <section class="pt-36 sm:pt-40 mx-2 sm:mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md pb-2">
            <h1 class="text-center font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-8" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                Tentang Kami
            </h1>

            <!-- content 1 -->
            <div class="px-2 md:px-10 items-center mb-2 sm:mb-4 lg:mb-8" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
                @forelse ($files as $file)
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <a href="{{ route('user.tentangkami.detail', $file->tentang_id) }}">
                            <img class="w-full object-cover xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 hover:brightness-50" src="{{ asset('images/'.$file->photo) }}" alt="gambar tentang kami" />
                        </a>
                    </div>
                    <div class="mx-2 h-20 sm:px-2 sm:h-28 md:h-44 sm:pt-3 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-[11px] md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 ">
                            {{ $file->title }}
                        </h5>
                        <p class="text-[9px] md:text-base overflow-hidden h-[40px] sm:h-10 md:h-12 lg:h-[72px]">
                            {!! nl2br($file->content) !!}
                        </p>
                        <hr class="border-t-1 border-black mt-1">
                        <a href="{{ route('user.tentangkami.detail', $file->tentang_id) }}" class="text-[8px] md:text-xs lg:text-base hover:text-sky-600">
                            selengkapnya...
                        </a>
                    </div>
                </div>
                @empty
                <p class=" text-gray-400 ">Belum ada data Tentang kami</p>
                @endforelse
            </div>


        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footeruser')

    <!-- javascript -->
    </script>
    @vite('resources/js/fituruser.js')
</body>

</html>