<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body class="bg-latar text-black min-h-screen">
    <!-- header -->
   @include('components.headeradmin')

    <!-- Content Start -->
    <section class="pt-32 sm:pt-40 mb-18">
        <form class="w-8/12 mx-3">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h- text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-2 ps-10 text-xs lg:text-sm text-gray-900 border
                 border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
                <button type="submit" class="text-white absolute end-0.5 bottom-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-base rounded-lg text-xs lg:text-sm px-3 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
       
        <!-- slider start-->
        <div id="silder" class="relative w-full px-2 md:px-5 my-12" data-carousel="slide">
            <!-- pembungkus -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/4.jpg') }}" class="absolute block  object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>

                <!-- item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/1.jpg') }}" class="absolute block  object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>

                <!-- item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/2.jpg') }}" class="absolute block  object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>

                <!-- item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/3.jpg') }}" class="absolute block  object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>

                <!-- item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/properti/5.jpg') }}" class="absolute block  object-fill h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
            </div>

            <!-- tombol start -->
            <div class="flex justify-center items-center pt-4">
                <button type="button" class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex justify-center items-center h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
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
            <p class="text-center font-serif py-10 text-lg md:text-2xl lg:text-4xl">
                Selamat Datang di Penyedia Jasa Aplikasi Perpajakan
            </p>
        </div>
        <!-- text end -->
    </section>
    <!-- Content End -->
    
    <!-- footer -->
    @include('components.footeradmin')

    <!-- javascript -->
    @vite('resources/js/app.js')
</body>
</html>