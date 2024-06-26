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

<!-- Script modal -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Header Start -->
<header class="w-full bg-transparent fixed top-0 left-0 h-28 z-50">
    <div class="container">
        <div class="bg-nav w-full absolute top-0 left-0 justify-between flex">
            <div class="flex">
                <a href="/admin/">
                    <img src="{{ asset('storage/properti/logo polibatam.png') }}" alt="gambar properti" class="w-8 my-2 mx-2 aspect-square object-cover rounded-full sm:w-10">
                </a>
                <a href="/admin/">
                    <img src="{{ asset('storage/properti/LOGO BARU.png') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full aspect-square object-cover sm:w-10 sm:mx-2">
                </a>
                <p class="font-thin text-xs mx-2 mt-4 text-white sm:text-base">
                    PJAP Polibatam
                </p>
            </div>
        </div>


        <!-- navbar start -->
        <div class=" sm:w-56 w-42 justify-between flex absolute mt-12 sm:mt-14">
            <div class="flex items-center w-full">
                <button id="hamburger" name="hamburger" type="button" class="block absolute top-0 bg-fot px-2 sm:hidden">
                    <span class="hamburger-line transition duration-500 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-500 ease-in-out"></span>
                    <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                </button>
                <nav id="nav-menu" class=" bg-fot py-10 sm:py-5 shadow-md w-full min-h-screen
                        top-full sm:absolute">
                    <ul class="block relative">
                        <li class="group">
                            <a href="/admin/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('admin') ? 'text-sky-600' : 'text-black' }}" id="navhome">
                                Home
                            </a>
                        </li>
                        <li class="group relative">
                            <a href="/admin/tentangkami/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('admin/tentangkami', 'admin/tentangkami/detail/*', 'admin/tentangkami/edit/*', 'admin/tentangkami/tambah') ? 'text-sky-600' : 'text-black' }}" id="tentangkami">
                                Tentang Kami
                            </a>
                        </li>
                        <li class="group relative ">
                            <a href="/admin/konsultasi/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('admin/konsultasi', 'admin/konsultasi/detail/*', 'admin/konsultasi/edit/*', 'admin/konsultasi/tambah',
                                    'admin/konsultasi/pertanyaan', 'admin/konsultasi/pertanyaan/detail/*') ? 'text-sky-600' : 'text-black' }}" id="konsultasi">
                                Konsultasi
                            </a>
                        </li>
                        <li class="group relative">
                            <a href="/admin/riset/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 {{ request()->is('admin/riset', 'admin/riset/detail/*', 'admin/riset/edit/*', 'admin/riset/tambah') ? 'text-sky-600' : 'text-black' }}" id="riset">
                                Riset
                            </a>
                        </li>
                        <li class="group relative">
                            <a href="/admin/publikasi/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('admin/publikasi', 'admin/publikasi/detail/*', 'admin/publikasi/edit/*', 'admin/publikasi/tambah') ? 'text-sky-600' : 'text-black' }}" id="publikasi">
                                Publikasi
                            </a>
                        </li>
                        <li class="group relative text-black ">
                            <a href="/admin/akademi/" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5
                                    {{ request()->is('admin/akademi', 'admin/akademi/bercode', 'admin/akademi/detail pembayaran', 'admin/pelatihan', 'admin/pelatihan/detail',
                                    'admin/pelatihan/edit', 'admin/pelatihan/tambah', 'admin/kegiatan', 'admin/kegiatan/detail', 'admin/kegiatan/edit', 'admin/kegiatan/tambah') ? 'text-sky-600' : 'text-black' }}" id="akademi">
                                Akademi
                            </a>
                            <ul class="dropdown bg-latar lg:bg-fot hidden py-3 px-8 lg:px-5 lg:pt-5 lg:shadow-md lg:rounded-md
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
                                    lg:mx-5 {{ request()->is('admin/berita',  'admin/berita/detail/*', 'admin/berita/edit/*', 'admin/berita/tambah') ? 'text-sky-600' : 'text-black' }}" id="berita">
                                Berita
                            </a>
                        </li>
                    </ul>



                    <ul class="bottom-16 left-0 absolute">
                        <li class="my-1 lg:my-2">
                            <a href="{{ route('admin.listUser') }}" class="hover:text-sky-600 mx-8 lg:mx-5 sm:text-base text-[12px] 
                            {{ request()->is('admin/ListUser') ? 'text-sky-600' : 'text-black' }}">
                                List Pengguna
                            </a>
                        </li>
                        <li class="my-1 lg:my-2">
                            <a href="{{ route('admin.profil') }}" class="hover:text-sky-600 mx-8 lg:mx-5 sm:text-base text-[12px] 
                            {{ request()->is('admin/profil') ? 'text-sky-600' : 'text-black' }}">
                                Profil
                            </a>
                        </li>
                        <li class="my-1 lg:my-2">
                            <a href="{{ route('logout') }}" class="hover:text-sky-600 mx-8 lg:mx-5 sm:text-base text-[12px]">
                                Logout
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- navbar end -->


        </div>
        <!-- navbar end -->
    </div>
</header>
<!-- Header End -->