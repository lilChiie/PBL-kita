<!-- Header Start -->
<header class="w-full bg-transparent fixed top-0 left-0 h-28 z-50">
        <div class="container">
            <div class="bg-nav w-full absolute top-0 left-0 justify-between flex">
                <div class="flex">
                    <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti"
                    class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:mx-4"></a>
                    <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti"
                    class="w-8 my-2 mx-1 rounded-full sm:w-10 sm:ml-3"></a>
                </div>
                <div class="relative text-black">
                    <a href="/login" id="user">
                        <img src="{{ asset('storage/properti/5.jpg') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:ml-10 sm:mr-4 md:ml-24
                        object-cover aspect-ratio-1/1">
                    </a>
                </div>
            </div>
            <!-- navbar start -->
            <div class="bg-fot w-full absolute mt-12 sm:mt-14 justify-between flex">
                <div class="flex items-center px-5">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute lg:hidden">
                        <span class="hamburger-line transition duration-500 ease-in-out origin-top-left" ></span>
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
                                <a href="/guest/Tentang Kami" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5 {{ request()->is('guest/Tentang Kami', 'guest/Detail Tentang Kami') ? 'text-sky-600' : 'text-black' }}" id="tentangkami">Tentang Kami</a>
                                
                            </li>
                            <li class="group relative ">
                                <a href="/guest/Konsultasi" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5 {{ request()->is('guest/Konsultasi', 'guest/Detail Konsultasi') ? 'text-sky-600' : 'text-black' }}" id="konsultasi">Konsultasi</a>
                                
                            </li>
                            <li class="group relative">
                                <a href="/guest/Riset" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5 {{ request()->is('guest/Riset', 'guest/Detail Riset') ? 'text-sky-600' : 'text-black' }}" id="riset">Riset</a>
                               
                            </li>
                            <li class="group relative">
                                <a href="/guest/Publikasi" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-6 {{ request()->is('guest/Publikasi', 'Detail Publikasi') ? 'text-sky-600' : 'text-black' }}" id="publikasi">Publikasi</a>
                                
                            </li>
                            <li class="group relative">
                                <a href="/guest/Akademi" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-6 {{ request()->is('guest/Akademi', 'guest/Kegiatan', 'guest/Pelatihan') ? 'text-sky-600' : 'text-black' }}" id="akademi">Akademi</a> 
                            </li>
                            <li class="group relative">
                                <a href="/guest/Berita" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-6 {{ request()->is('guest/Berita', 'guest/Detail Berita') ? 'text-sky-600' : 'text-black' }}" id="berita">Berita</a>
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