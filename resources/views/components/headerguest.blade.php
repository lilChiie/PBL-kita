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

<!-- Header Start -->
<header class="w-full bg-transparent fixed top-0 left-0 h-28 z-50">
    <section class="container">
        <div class="bg-nav w-full absolute top-0 left-0 justify-between flex">
            <div class="flex">
                <a href="/">
                    <img src="{{ asset('storage/properti/logo polibatam.png') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full sm:w-10">
                </a>
                <a href="/">
                    <img src="{{ asset('storage/properti/logo 5.png') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:mx-2">
                </a>
                <p class="font-thin text-xs mx-2 mt-4 text-white sm:text-base">
                    Penyedia Jasa Aplikasi Perpajakan
                </p>
            </div>
            <div class="relative text-black">
                <a href="/login">
                    <img src="{{ asset('storage/properti/5.jpg') }}" alt="gambar properti" class="mt-1 mx-2 rounded-full sm:w-10 sm:ml-10 sm:mr-4 md:ml-24 md:mt-2
                        object-fill w-10 h-10" id="user">
                </a>
             </div>
        </div>
        
        <!-- navbar start -->
        <section class="bg-fot w-full absolute mt-12 sm:mt-14 justify-between flex">
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
                            <a href="/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5 {{ request()->is('/') ? 'text-sky-600' : 'text-black' }}" id="navhome">Home</a>
                        </li>
                        <li class="group relative">
                            <a href="/guest/TentangKami" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 {{ request()->is('guest/Tentang Kami', 'guest/Detail Tentang Kami') ? 'text-sky-600' : 'text-black' }}" id="tentangkami">
                                Tentang Kami
                            </a>
                        </li>
                        <li class="group relative ">
                            <a href="/guest/Konsultasi" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 {{ request()->is('guest/Konsultasi', 'guest/Detail Konsultasi') ? 'text-sky-600' : 'text-black' }}" id="konsultasi">
                                Konsultasi
                            </a>
                        </li>
                        <li class="group relative">
                            <a href="/guest/Riset" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 {{ request()->is('guest/Riset', 'guest/Detail Riset') ? 'text-sky-600' : 'text-black' }}" id="riset">
                                Riset
                            </a>
                        </li>
                        <li class="group relative">
                            <a href="/guest/Publikasi" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-6 {{ request()->is('guest/Publikasi', 'Detail Publikasi') ? 'text-sky-600' : 'text-black' }}" id="publikasi">
                                Publikasi
                            </a>
                        </li>
                        <li class="group relative text-black">
                             <a href="/guest/Akademi" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-6 
                                    {{ request()->is('guest/Akademi', 'guest/Pelatihan' , 'guest/Kegiatan') ? 'text-sky-600' : 'text-black' }}" id="akademi">
                                 Akademi
                             </a>
                         </li>
                        <li class="group relative">
                            <a href="/guest/Berita" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-6 {{ request()->is('guest/Berita', 'guest/Detail Berita') ? 'text-sky-600' : 'text-black' }}" id="berita">
                                Berita
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- untuk menentukan besar pada navbar -->
            <div class="my-6 mx-2">
                <p class="w-8 rounded-lg  sm:w-10 sm:ml-10 sm:mr-2 md:ml-24">
            </div>
        </section>
        <!-- navbar end -->
    </section>
</header>
<!-- Header End -->