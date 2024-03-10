<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <title>Home</title>
</head>

<body class="bg-latar">
    <!-- Header Start -->
    <header class="w-full bg-transparent fixed top-0 left-0 h-28">
        <div class="container">
            <div class="bg-nav w-full absolute top-0 left-0 justify-between flex">
                <div class="flex">
                    <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:mx-4"></a>
                    <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti" class="w-8 my-2 mx-1 rounded-full sm:w-10 sm:ml-3"></a>
                </div>
                <!-- <div class="grow">
                <input type="search" class="mt-3 ml-4 w-44 p-1 text-xs focus:outline-none focus:ring focus:ring-indigo-100
                rounded-sm sm:w-8/12 sm:ml-10 sm:mt-2 md:max-w-[592px] sm:text-base" />
                </div> -->
                <div>
                    <a href="/login"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-lg  sm:w-10 sm:ml-10 sm:mr-4 md:ml-24"></a>
                </div>
            </div>
            <!-- navbar start -->
            <div class="bg-fot w-full absolute mt-12 sm:mt-14 justify-between flex">
                <div class="flex items-center px-5">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute lg:hidden">
                        <span class="hamburger-line transition duration-500 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden  bg-fot  absolute py-5 shadow-md rounded-md max-w-[200px] w-full
                    top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:py-3 lg:w-full">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5" id="navhome">Home</a>
                            </li>
                            <li class="group relative">
                                <a href="/user/TentangKami" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5" id="tentangkami">Tentang Kami</a>
                                <ul class="dropdown bg-latar lg:bg-fot hidden lg:absolute py-3 px-8 lg:ml-8 lg:px-5 lg:pt-5 lg:shadow-md lg:rounded-md" id="dropdowntentangkami">
                                    <li><a href="#contoh1" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh2" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh3" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh4" class="hover:text-sky-600 ">Example</a></li>
                                </ul>
                            </li>
                            <li class="group relative ">
                                <a href="/user/Konsultasi" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5" id="konsultasi">Konsultasi</a>
                                <ul class="dropdown bg-latar lg:bg-fot hidden lg:absolute py-3 px-8 lg:ml-5 lg:px-5 lg:pt-5 lg:shadow-md lg:rounded-md" id="dropdownkonsultasi">
                                    <li><a href="#contoh5" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh6" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh7" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh8" class="hover:text-sky-600 ">Example</a></li>
                                </ul>
                            </li>
                            <li class="group relative">
                                <a href="#riset" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5" id="riset">Riset</a>
                                <ul class="dropdown bg-latar lg:bg-fot hidden lg:absolute py-3 px-8 lg:ml-5 lg:px-5 lg:pt-5 lg:shadow-md lg:rounded-md" id="dropdownriset">
                                    <li><a href="#contoh9" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh10" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh11" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh12" class="hover:text-sky-600 ">Example</a></li>
                                </ul>
                            </li>
                            <li class="group relative">
                                <a href="#publikasi" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-6" id="publikasi">Publikasi</a>
                                <ul class="dropdown bg-latar lg:bg-fot hidden lg:absolute py-3 px-8 lg:ml-5 lg:px-5 lg:pt-5 lg:shadow-md lg:rounded-md" id="dropdownpublikasi">
                                    <li><a href="#contoh13" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh14" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh15" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh16" class="hover:text-sky-600 ">Example</a></li>
                                </ul>
                            </li>
                            <li class="group relative">
                                <a href="#akademi" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-6" id="akademi">Akademi</a>
                                <ul class="dropdown bg-latar lg:bg-fot hidden lg:absolute py-3 px-8 lg:ml-5 lg:px-5 lg:pt-5 lg:shadow-md lg:rounded-md" id="dropdownakademi">
                                    <li><a href="#contoh17" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh18" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh19" class="hover:text-sky-600 ">Example</a></li>
                                    <li><a href="#contoh20" class="hover:text-sky-600 ">Example</a></li>
                                </ul>
                            </li>
                            <li class="group relative">
                                <a href="#berita" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-6" id="berita">Berita</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="my-3 mx-2">
                    <img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti" class="w-8 rounded-lg  sm:w-10 sm:ml-10 sm:mr-2 md:ml-24">
                </div>
            </div>
            <!-- navbar end -->
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section class="pt-36 sm:pt-40 mb-12 mx-8 flex justify-center">
        <div class="container bg-white pl-4 pb-8 lg:pl-7 rounded-md ">
            <div class="pl-2">
                <p class=" pt-4 sm:text-lg lg:text-2xl sm:pt-6">Title Page</p>
                <hr class="border-t-1 border-black w-24 pb">
            </div>
            <div class="my-4 mx-2 w-11/12 grid grid-cols-2 gap-x-11 gap-y-2">
                <div class="">
                    <img src="{{ asset('storage/properti/2.jpg') }}" alt="" class="w-32 sm:w-72">
                    <p class="text-xs md:text-lg sm:mb-3">Title foto</p>
                    <p class="text-[10px] h-8 md:h-12 mb-1 md:mb-2 overflow-hidden md:text-xs
                    ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, fugit amet hic dolore ab voluptatum, sit iste fuga repellat a, at soluta corrupti. Corporis quae sint tenetur libero earum omnis, commodi deleniti odit sed assumenda at quaerat. Voluptas ratione vel amet ipsum tempore odit minima pariatur, laudantium repudiandae fugiat cumque!</p>
                </div>
                <div class="">
                    <img src="{{ asset('storage/properti/2.jpg') }}" alt="" class="w-32 sm:w-72">
                    <p class="text-xs md:text-lg sm:mb-3">Title foto</p>
                    <p class="text-[10px] h-8 md:h-12 mb-1 md:mb-2 overflow-hidden md:text-xs
                    ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, fugit amet hic dolore ab voluptatum, sit iste fuga repellat a, at soluta corrupti. Corporis quae sint tenetur libero earum omnis, commodi deleniti odit sed assumenda at quaerat. Voluptas ratione vel amet ipsum tempore odit minima pariatur, laudantium repudiandae fugiat cumque!</p>
                </div>
                <div class="">
                    <img src="{{ asset('storage/properti/2.jpg') }}" alt="" class="w-32 sm:w-72">
                    <p class="text-xs md:text-lg sm:mb-3">Title foto</p>
                    <p class="text-[10px] h-8 md:h-12 mb-1 md:mb-2 overflow-hidden md:text-xs
                    ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, fugit amet hic dolore ab voluptatum, sit iste fuga repellat a, at soluta corrupti. Corporis quae sint tenetur libero earum omnis, commodi deleniti odit sed assumenda at quaerat. Voluptas ratione vel amet ipsum tempore odit minima pariatur, laudantium repudiandae fugiat cumque!</p>
                </div>
                <div class="">
                    <img src="{{ asset('storage/properti/2.jpg') }}" alt="" class="w-32 sm:w-72">
                    <p class="text-xs md:text-lg sm:mb-3">Title foto</p>
                    <p class="text-[10px] h-8 md:h-12 mb-1 md:mb-2 overflow-hidden md:text-xs
                    ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, fugit amet hic dolore ab voluptatum, sit iste fuga repellat a, at soluta corrupti. Corporis quae sint tenetur libero earum omnis, commodi deleniti odit sed assumenda at quaerat. Voluptas ratione vel amet ipsum tempore odit minima pariatur, laudantium repudiandae fugiat cumque!</p>
                </div>
            </div>


        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Footer Start -->
    <footer class="bg-fot">
        <div class="container max-w-full pt-2">
            <div class="grid grid-cols-4 lg:grid-cols-5 gap-3">
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12">
                    <p class=" font-bold">Tentang Kami</p>
                    <hr class="border-t-2 border-black my-1">
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                </div>
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12">
                    <p class="font-bold ">Konsultasi</p>
                    <hr class="border-t-2 border-black my-1">
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                </div>
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12">
                    <p class="font-bold">Riset</p>
                    <hr class="border-t-2 border-black my-1">
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                </div>
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12">
                    <p class="font-bold ">Publikasi</p>
                    <hr class="border-t-2 border-black my-1">
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                </div>
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12">
                    <p class="font-bold ">Akademi</p>
                    <hr class="border-t-2 border-black my-1">
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                    <p><a href="#" class="hover:text-sky-600">Link</a></p>
                </div>

            </div>
            <div class="mt-8 mx-2 lg:mt-12 lg:ml-12">
                <p class="font-bold text-base lg:text-2xl">Link Reference</p>
                <div class="flex">
                    <a href="#"><i class="fab fa-facebook mr-2 lg:text-xl"></i></a>
                    <a href="#"><i class="fab fa-instagram mr-2 lg:text-xl"></i></a>
                    <a href="#"><i class="fab fa-twitter mr-2 lg:text-xl"></i></a>
                    <a href="#"><i class="fab fa-youtube lg:text-xl"></i></a>
                    <p class="text-[8px] font-sans mt-3 ml-5 lg:text-sm">No Telp 08xx-xxxx-xxx</p>
                </div>
                <div class="mt-14 pb-8 text-[6px] lg:text-xs">
                    <p class="text-center"><i class="far fa-copyright"></i> COPYRIGHT 2024 TAX Digital. All rights reserved. Not for further distribution without the permission of TAX digital</p>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- javascript -->
    @vite('resources/js/app.js')
</body>

</html>