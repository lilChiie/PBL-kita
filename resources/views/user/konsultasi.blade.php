<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>

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

<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeruser')

    <!-- Content Start -->
    <section class="pt-36 sm:pt-40 mb-12 mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                    Konsultasi</h1>
            </div>

            <div class="grid gap-x-5 sm:gap-x-10 gap-y-2 grid-cols-2 mx-5 sm:mx-10 my-2 ">
                <div class="w-full" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <a href="/user/Detail_Konsultasi">
                        <img src="{{ asset('storage/properti/2.jpg') }}" alt="konsultasi" class="w-full hover:brightness-50" />
                    </a>
                    <div class="py-3">
                        <a href="/user/Detail_Konsultasi">
                            <h5 class="mb-2 text-xs md:text-lg font-bold tracking-tight hover:text-sky-600">
                                Title Konsultasi
                            </h5>
                        </a>
                        <p class="mb-3 text-[10px] overflow-hidden md:text-xs h-[62px]">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus sint qui cumque alias natus sed modi nisi, quaerat pariatur autem? Repellendus quas odio eveniet nostrum soluta voluptate excepturi expedita atque magnam voluptatibus nesciunt, praesentium, dicta quibusdam deleniti culpa vitae, velit sed? Voluptatum, odio! Maiores dignissimos a, praesentium delectus, id eius, sit officiis nam placeat illum nihil officia tempore! Qui, commodi.
                        </p>
                    </div>
                </div>

                <div class="w-full " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <a href="/user/Detail_Konsultasi">
                        <img src="{{ asset('storage/properti/2.jpg') }}" alt="konsultasi" class="w-full hover:brightness-50" />
                    </a>
                    <div class="py-3">
                        <a href="/user/Detail_Konsultasi">
                            <h5 class="mb-2 text-xs md:text-lg font-bold tracking-tight hover:text-sky-600">
                                Title Konsultasi
                            </h5>
                        </a>
                        <p class="mb-3 text-[10px] overflow-hidden md:text-xs h-[62px]">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus sint qui cumque alias natus sed modi nisi, quaerat pariatur autem? Repellendus quas odio eveniet nostrum soluta voluptate excepturi expedita atque magnam voluptatibus nesciunt, praesentium, dicta quibusdam deleniti culpa vitae, velit sed? Voluptatum, odio! Maiores dignissimos a, praesentium delectus, id eius, sit officiis nam placeat illum nihil officia tempore! Qui, commodi.
                        </p>
                    </div>
                </div>

                <div class="w-full " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <a href="/user/Detail_Konsultasi">
                        <img src="{{ asset('storage/properti/2.jpg') }}" alt="konsultasi" class="w-full hover:brightness-50" />
                    </a>
                    <div class="py-3">
                        <a href="/user/Detail_Konsultasi">
                            <h5 class="mb-2 text-xs md:text-lg font-bold tracking-tight hover:text-sky-600">
                                Title Konsultasi
                            </h5>
                        </a>
                        <p class="mb-3 text-[10px] overflow-hidden md:text-xs h-[62px]">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus sint qui cumque alias natus sed modi nisi, quaerat pariatur autem? Repellendus quas odio eveniet nostrum soluta voluptate excepturi expedita atque magnam voluptatibus nesciunt, praesentium, dicta quibusdam deleniti culpa vitae, velit sed? Voluptatum, odio! Maiores dignissimos a, praesentium delectus, id eius, sit officiis nam placeat illum nihil officia tempore! Qui, commodi.
                        </p>
                    </div>
                </div>

                <div class="w-full " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <a href="/user/Detail_Konsultasi">
                        <img src="{{ asset('storage/properti/2.jpg') }}" alt="konsultasi" class="w-full hover:brightness-50" />
                    </a>
                    <div class="py-3">
                        <a href="/user/Detail_Konsultasi">
                            <h5 class="mb-2 text-xs md:text-lg font-bold tracking-tight hover:text-sky-600">
                                Title Konsultasi
                            </h5>
                        </a>
                        <p class="mb-3 text-[10px] overflow-hidden md:text-xs h-[62px]">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus sint qui cumque alias natus sed modi nisi, quaerat pariatur autem? Repellendus quas odio eveniet nostrum soluta voluptate excepturi expedita atque magnam voluptatibus nesciunt, praesentium, dicta quibusdam deleniti culpa vitae, velit sed? Voluptatum, odio! Maiores dignissimos a, praesentium delectus, id eius, sit officiis nam placeat illum nihil officia tempore! Qui, commodi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footeruser')

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>

</html>