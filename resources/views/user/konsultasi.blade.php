<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>
</head>

<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeruser')

    <!-- Content Start -->
    <section class="pt-36 sm:pt-40 mx-3 sm:mx-8">
        @if (session('success'))
        <div class="bg-blue-400 text-white p-4 rounded mb-8" style=" margin-bottom: 1rem;">
            {{ session('success') }}
        </div>
        @endif

        <div class="bg-white w-full rounded-md">
            <div class="mx-3 my-2">
                <h1 class="font-bold pt-6 text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                    Konsultasi</h1>
            </div>

            <div class="grid gap-x-5 sm:gap-x-10 gap-y-2 grid-cols-2 mx-5 sm:mx-10 my-2 ">
                @foreach ($files as $file)
                <!-- content 1 -->
                <div class="w-full" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <a href="{{ route('user.konsultasi.detail', $file->konsultasi_id) }}">
                        <img src="{{ asset('images/'.$file->photo) }}" alt="konsultasi" class="w-full object-cover aspect-16/9 hover:brightness-50" />
                    </a>
                    <div class="py-3">
                        <a href="{{ route('user.konsultasi.detail', $file->konsultasi_id) }}">
                            <h5 class="mb-2 text-xs md:text-lg font-bold tracking-tight hover:text-sky-600">
                            {{ $file->title }}
                            </h5>
                        </a>
                        <p class="mb-3 text-[10px] overflow-hidden md:text-xs h-[62px]">
                        {{ $file->content }}
                        </p>
                    </div>
                </div>
                @endforeach

                
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footeruser')

    <!-- javascript -->
    @vite('resources/js/fituruser.js')
</body>

</html>