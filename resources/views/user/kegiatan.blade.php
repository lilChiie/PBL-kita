<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan</title>
</head>

<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeruser')

    <!-- Content Start -->
    <section class="pt-36 sm:pt-40 mx-3 sm:mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md pb-10">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                    Kegiatan
                </h1>
            </div>

            <!-- content 1 -->
            @forelse($files as $file)
            @if($file['category'] == 'kegiatan')
            <div class="px-2 md:px-10 items-center my-4" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <a href="{{ route('user.kegiatan.detail', $file->kegiatan_id) }}">
                            <img class="w-full aspect-16/9 object-cover hover:brightness-50" src="{{ asset('images/'.$file->photo) }}" alt="gambar pelatihan" />
                        </a>
                    </div>
                    <div class="mx-2 h-24 sm:px-2 sm:h-[120px] md:h-48 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10">{{ $file->title }}</h5>
                        <p class="my-1 text-[9px] md:text-base">Rp {{ number_format($file->price, 0, ',', '.') }}</p>

                        <p class="text-[10px] md:text-base overflow-hidden h-7 sm:h-12 lg:h-[72px]">{!! nl2br($file->description) !!} </p>
                        <hr class="border-t-1 border-black mt-1">
                        <a href="{{ route('user.kegiatan.detail', $file->kegiatan_id) }}" class="text-[8px] md:text-xs lg:text-base hover:text-sky-600">
                            selengkapnya...
                        </a>

                    </div>
                </div>
            </div>
            @endif
            @empty
            <p class=" text-gray-400 ">Belum ada data Kegiatan</p>
            @endforelse

        </div>
    </section>
    <!-- Content End -->

    <!-- header -->
    @include('components.footeruser')

    <!-- javascript -->
    @vite('resources/js/fituruser.js')
</body>

</html>