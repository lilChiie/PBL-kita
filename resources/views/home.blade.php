<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>

<body class="bg-latar text-black min-h-screen">

    <!-- header -->
    @include('components.headerguest')

    <!-- Content Start -->
    <section class="pt-32 sm:pt-40 mb-18">



        <!-- silder start-->
        <div id="silder" class="relative w-full px-2 md:px-5 my-12" data-carousel="slide">
            <!-- pembungkus -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/slider 1.png') }}" class="absolute block object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>

                <!-- item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/slider 2.png') }}" class="absolute block  object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>

                <!-- item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/slider 3.png') }}" class="absolute block  object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>

                <!-- item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/slider 4.png') }}" class="absolute block  object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>

                <!-- item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/slider 5.png') }}" class="absolute block  object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
            </div>

            <!-- tombol start -->
            <div class="flex justify-center items-center pt-4">
                <button type="button" class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex justify-center items-center h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <!-- tombol end -->
        </div>
        <!-- silder end -->

        <!-- text start -->
        <div class="bg-white">
            <p class="text-center font-serif py-10 text-lg md:text-2xl lg:text-4xl">Selamat Datang di Penyedia Jasa Aplikasi Perpajakan</p>
        </div>
        <!-- text end -->

    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footerguest')

    <!-- javascript -->
    @vite('resources/js/homeguest.js')
    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            Swal.fire({
                position: "middle",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
    @endif
</body>

</html>