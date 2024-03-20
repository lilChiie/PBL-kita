<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    @vite('resources/css/app.css')

    <!-- font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- library fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-latar text-black">
    <!-- header -->
    @include('components.headerguest')
    
    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 mb-12 mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md">
            <h1 class="text-center font-bold text-wjudul mt-4 md:text-2xl lg:text-3xl md:my-6"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-delay="200"
            data-aos-offset="0">Tentang Kami</h1>
                <div class="card card-side sm:my-4 lg:my-8 mx-4 rounded-none" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <figure><img src="{{ asset('storage/properti/2.jpg') }}" alt="tentang kami" class="w-32 sm:w-64 md:w-72 sm:ml-5 hover:brightness-50"/></figure>
                    <div class="card-body w-1/2 sm:w-8/12 lg:py-6">
                        <h2 class="card-title text-xs md:text-lg">Title Foto</h2>
                        <p class="text-[10px] overflow-hidden md:text-xs h-8">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi sapiente nam cumque molestias delectus beatae, incidunt officia eos accusamus, quibusdam cum. Placeat porro ex minima magni quo! Temporibus quasi aspernatur autem voluptate omnis recusandae reprehenderit dolorum nostrum! Qui amet aliquid porro natus sint. Nam optio consequuntur perferendis labore voluptas illo, et hic necessitatibus vitae sunt facere aperiam iste corrupti.
                        </p>
                        <hr class="border-t-1 border-black">
                        <div class="card-actions">
                        <a href="/guest/Detail Tentang Kami" class="text-[9px] md:text-[10px] hover:text-sky-600">Selengkapnya...</a>
                        </div>
                    </div>
                </div>

                <div class="card card-side sm:my-4 lg:my-8 mx-4 rounded-none" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <figure><img src="{{ asset('storage/properti/2.jpg') }}" alt="tentang kami" class="w-32 sm:w-64 md:w-72 sm:ml-5 hover:brightness-50"/></figure>
                    <div class="card-body w-1/2 sm:w-8/12 lg:py-6">
                        <h2 class="card-title text-xs md:text-lg">Title Foto</h2>
                        <p class="text-[10px] overflow-hidden md:text-xs h-8">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi sapiente nam cumque molestias delectus beatae, incidunt officia eos accusamus, quibusdam cum. Placeat porro ex minima magni quo! Temporibus quasi aspernatur autem voluptate omnis recusandae reprehenderit dolorum nostrum! Qui amet aliquid porro natus sint. Nam optio consequuntur perferendis labore voluptas illo, et hic necessitatibus vitae sunt facere aperiam iste corrupti.
                        </p>
                        <hr class="border-t-1 border-black">
                        <div class="card-actions">
                        <a href="/guest/Detail Tentang Kami" class="text-[9px] md:text-[10px] hover:text-sky-600">Selengkapnya...</a>
                        </div>
                    </div>
                </div>

                <div class="card card-side sm:my-4 lg:my-8 mx-4 rounded-none" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <figure><img src="{{ asset('storage/properti/2.jpg') }}" alt="tentang kami" class="w-32 sm:w-64 md:w-72 sm:ml-5 hover:brightness-50"/></figure>
                    <div class="card-body w-1/2 sm:w-8/12 lg:py-6">
                        <h2 class="card-title text-xs md:text-lg">Title Foto</h2>
                        <p class="text-[10px] overflow-hidden md:text-xs h-8">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi sapiente nam cumque molestias delectus beatae, incidunt officia eos accusamus, quibusdam cum. Placeat porro ex minima magni quo! Temporibus quasi aspernatur autem voluptate omnis recusandae reprehenderit dolorum nostrum! Qui amet aliquid porro natus sint. Nam optio consequuntur perferendis labore voluptas illo, et hic necessitatibus vitae sunt facere aperiam iste corrupti.
                        </p>
                        <hr class="border-t-1 border-black">
                        <div class="card-actions">
                        <a href="/guest/Detail Tentang Kami" class="text-[9px] md:text-[10px] hover:text-sky-600">Selengkapnya...</a>
                        </div>
                    </div>
                </div>

                <div class="card card-side sm:my-4 lg:my-8 mx-4 rounded-none" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <figure><img src="{{ asset('storage/properti/2.jpg') }}" alt="tentang kami" class="w-32 sm:w-64 md:w-72 sm:ml-5 hover:brightness-50"/></figure>
                    <div class="card-body w-1/2 sm:w-8/12 lg:py-6">
                        <h2 class="card-title text-xs md:text-lg">Title Foto</h2>
                        <p class="text-[10px] overflow-hidden md:text-xs h-8">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi sapiente nam cumque molestias delectus beatae, incidunt officia eos accusamus, quibusdam cum. Placeat porro ex minima magni quo! Temporibus quasi aspernatur autem voluptate omnis recusandae reprehenderit dolorum nostrum! Qui amet aliquid porro natus sint. Nam optio consequuntur perferendis labore voluptas illo, et hic necessitatibus vitae sunt facere aperiam iste corrupti.
                        </p>
                        <hr class="border-t-1 border-black">
                        <div class="card-actions">
                        <a href="/guest/Detail Tentang Kami" class="text-[9px] md:text-[10px] hover:text-sky-600">Selengkapnya...</a>
                        </div>
                    </div>
                </div>

        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footerguest')



    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>