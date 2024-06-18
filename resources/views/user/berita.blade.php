<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
</head>

<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeruser')

    <!-- Content Start -->
    <section class="pt-36 sm:pt-40 mx-8">
        <div class="bg-white w-full pt-2 pb-20">
             <!-- berita utama start-->
             <div class="flex gap-7 lg:gap-12 mx-5 sm:mx-10 my-2">
                <div class="w-full">
                    <a href="/user/Detail_Berita">
                        <img class="w-full aspect-16/9 object-cover hover:brightness-50" src="{{ asset('storage/properti/6.jpg') }}" alt="gambar berita" data-aos="fade-right">
                    </a>
                </div>
            </div>
            <!-- berita utama end -->

            <!-- sub berita start -->
            <div class="mx-5 sm:mx-10 mt-4">
                <div class=" w-4/12">
                    <h2 class="text-base md:text-2xl">
                        Sub News
                    </h2>
                    <hr class="border-t-1 border-black my-1 lg:my-3">
                </div>

                
                @foreach ($files as $file)
                <div class="items-center mb-8" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
                    <div class="w-full grid grid-cols-3">
                        <div class="flex items-center">
                            <a href="{{ route('user.berita.detail', $file->berita_id) }}">
                                <img class="w-full xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 object-cover hover:brightness-50" src="{{ asset('images/'.$file->photo) }}" alt="gambar pelatihan" />
                            </a>
                        </div>
                        <div class="mx-2 h-20 sm:px-2 sm:h-28 md:h-44 sm:pt-3 md:pt-5 overflow-hidden col-span-2 ">
                            <h5 class="font-bold text-[11px] md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 ">{{ $file->title }}</h5>
                            <p class="text-[9px] md:text-base overflow-hidden h-[40px] sm:h-10 md:h-12 lg:h-[72px]">
                            {!! nl2br(e($file->content)) !!}
                            </p>
                            <hr class="border-t-1 border-black mt-1">
                            <a href="{{ route('user.berita.detail', $file->berita_id) }}" class="text-[8px] md:text-xs lg:text-base hover:text-sky-600">
                                selengkapnya...
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- sub berita end -->
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footeruser')

    <!-- javascript -->
    @vite('resources/js/fituruser.js')
</body>

</html>