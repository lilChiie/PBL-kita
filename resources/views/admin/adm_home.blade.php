<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- @vite(['resources/css/app.css','resources/js/app.js']) -->

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
        <div  class="grid mx-10 my-12 gap-x-8 gap-y-8 md:grid-cols-3">
            <img src="{{ asset('storage/properti/4.jpg') }}" alt="gambar properti" class="transition-all duration-300 rounded-lg hover:brightness-50" data-aos="fade-up">
            <img src="{{ asset('storage/properti/4.jpg') }}" alt="gambar properti" class="transition-all duration-300 rounded-lg hover:brightness-50" data-aos="fade-up">
            <img src="{{ asset('storage/properti/4.jpg') }}" alt="gambar properti" class="transition-all duration-300 rounded-lg hover:brightness-50" data-aos="fade-up">
        </div>
        <div class="bg-white">
            <p class="text-center font-serif py-10 text-lg md:text-2xl lg:text-4xl">
                Selamat Datang di Web Tax Digital
            </p>
        </div>
    </section>
    <!-- Content End -->
    
    <!-- footer -->
    @include('components.footeradmin')

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>