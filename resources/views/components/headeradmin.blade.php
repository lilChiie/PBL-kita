<!-- Header Start -->
<header class="w-full bg-transparent fixed top-0 left-0 h-28 z-50">
    <div class="container">
        <div class="bg-nav w-full absolute top-0 left-0 justify-between flex">
            <div class="flex">
                <a href="/admin/"><img src="{{ asset('storage/properti/logo.png') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:mx-4">
                </a>
                <p class="font-thin text-xs mx-2 mt-4 text-white sm:text-base">
                    Digital Tax Consultation
                </p>
            </div>
            <div class="relative text-black">
                <img src="{{ asset('storage/properti/3.jpg') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:ml-10 sm:mr-4 md:ml-24
                        object-cover h-10" id="user">
                <ul class="dropdown bg-fot absolute top-0 right-0 mt-10 lg:mt-12 py-3 px-4 mr-5 lg:px-8 shadow-md z-20 hidden
                        transition duration-700" id="dropdownuser">
                    <li class="my-1">
                        <a href="/" class="hover:text-sky-600">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- navbar start -->
        <div class="bg-fot w-full absolute mt-12 sm:mt-14 justify-between flex ">
            <div class="flex items-center px-5">
                <button id="hamburger" name="hamburger" type="button" class="block absolute lg:hidden">
                    <span class="hamburger-line transition duration-500 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-500 ease-in-out"></span>
                    <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden bg-fot  absolute py-5 shadow-md rounded-md max-w-[200px] w-full
                        top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:py-3 lg:w-full">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/admin/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('/') ? 'text-sky-600' : 'text-black' }}" id="navhome">
                                Home
                            </a>
                        </li>
                        <li class="group relative">
                            <a href="/admin/tentangkami/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('admin/tentang kami', 'admin/tentang kami/detail', 'admin/tentang kami/edit', 'admin/tentang kami/tambah') ? 'text-sky-600' : 'text-black' }}" id="tentangkami">
                                Tentang Kami
                            </a>
                        </li>
                        <li class="group relative ">
                            <a href="/admin/konsultasi/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('admin/konsultasi/', 'admin/konsultasi/detail', 'admin/konsultasi/edit', 'admin/konsultasi/tambah',
                                    'admin/konsultasi/pertanyaan', 'admin/konsultasi/detail pertanyaan') ? 'text-sky-600' : 'text-black' }}" id="konsultasi">
                                Konsultasi
                            </a>
                        </li>
                        <li class="group relative">
                            <a href="/admin/riset/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 {{ request()->is('admin/riset', 'admin/riset/detail', 'admin/riset/edit', 'admin/riset/tambah') ? 'text-sky-600' : 'text-black' }}" id="riset">
                                Riset
                            </a>
                        </li>
                        <li class="group relative">
                            <a href="/admin/publikasi/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-6 
                                    {{ request()->is('admin/publikasi', 'admin/publikasi/detail', 'admin/publikasi/edit', 'admin/publikasi/tambah') ? 'text-sky-600' : 'text-black' }}" id="publikasi">
                                Publikasi
                            </a>
                        </li>
                        <li class="group relative text-black ">
                            <a href="/admin/akademi/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-6
                                    {{ request()->is('admin/akademi', 'admin/akademi/bercode', 'admin/akademi/detail pembayaran', 'admin/pelatihan', 'admin/pelatihan/detail',
                                    'admin/pelatihan/edit', 'admin/pelatihan/tambah', 'admin/kegiatan', 'admin/kegiatan/detail', 'admin/kegiatan/edit', 'admin/kegiatan/tambah') ? 'text-sky-600' : 'text-black' }}" id="akademi">
                                Akademi
                            </a>
                            <ul class="dropdown bg-latar lg:bg-fot hidden lg:absolute py-3 px-8 lg:ml-5 lg:px-5 lg:pt-5 lg:shadow-md lg:rounded-md
                                    w-full transition duration-700" id="dropdownakademi">
                                <li class="my-2">
                                    <a href="/admin/pelatihan/" class="hover:text-sky-600 
                                            {{ request()->is('admin/akademi', 'admin/akademi/bercode', 'admin/akademi/detail pembayaran', 'admin/pelatihan', 'admin/pelatihan/detail',
                                            'admin/pelatihan/edit', 'admin/pelatihan/tambah') ? 'text-sky-600' : 'text-black' }}">
                                        Pelatihan
                                    </a>
                                </li>
                                <li class="my-2">
                                    <a href="/admin/kegiatan" class="hover:text-sky-600 
                                            {{ request()->is('admin/akademi', 'admin/akademi/bercode', 'admin/akademi/detail pembayaran', 'admin/kegiatan', 'admin/kegiatan/detail',
                                            'admin/kegiatan/edit', 'admin/kegiatan/tambah') ? 'text-sky-600' : 'text-black' }}">
                                        Kegiatan
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="group relative">
                            <a href="/admin/berita/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-6 {{ request()->is('admin/berita',  'admin/berita/detail', 'admin/berita/edit', 'admin/berita/tambah') ? 'text-sky-600' : 'text-black' }}" id="berita">
                                Berita
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="my-6 mx-2">
                <p class="w-8 rounded-lg  sm:w-10 sm:ml-10 sm:mr-2 md:ml-24">
            </div>
        </div>
        <!-- navbar end -->
    </div>
</header>
<!-- Header End -->