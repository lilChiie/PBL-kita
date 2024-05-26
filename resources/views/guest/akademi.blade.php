<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademi</title>

</head>
<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headerguest')
    
    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 mb-12 mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md pb-40">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0">Akademi</h1>
            </div>

            <div class="grid gap-x-5 sm:gap-x-10 gap-y-2 grid-cols-2 mx-5 sm:mx-10 mt-2">
                <!-- pelatihan start -->
                <div class="group " data-aos="zoom-out-up" data-aos-delay="300">
                    <a href="/guest/Pelatihan" class="hover:brightness-50">
                    <div class="hero bg-cover bg-center h-36 md:h-64 lg:h-80" style="background-image: url('/storage/properti/4.jpg');">
                        <div class="hero-overlay bg-opacity-70"></div>
                        <div class="hero-content text-center text-neutral-content">
                            <div class="max-w-md">
                                <h1 class="py-3 text-xs md:text-2xl lg:text-4xl text-black group-hover:text-white">
                                    Pelatihan
                                </h1>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- pelatihan end -->

                <!-- kegiatan start -->
                <div class="group" data-aos="zoom-out-up" data-aos-delay="200">
                    <a href="/guest/Kegiatan" class="hover:brightness-50">
                    <div class="hero bg-cover bg-center h-36 md:h-64 lg:h-80" style="background-image: url('/storage/properti/4.jpg');">
                        <div class="hero-overlay bg-opacity-70"></div>
                        <div class="hero-content text-center text-neutral-content">
                            <div class="max-w-md">
                                <h1 class="py-3  text-xs md:text-2xl lg:text-4xl text-black group-hover:text-white">
                                    Kegiatan
                                </h1>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- kegiatan end -->
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footerguest')

    <!-- javascript -->
    @vite('resources/js/fiturguest.js')
</body>
</html>