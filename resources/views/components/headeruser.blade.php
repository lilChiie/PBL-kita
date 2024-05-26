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
     <div class="container">
         <div class="bg-nav w-full absolute top-0 left-0 justify-between flex">
             <div class="flex">
                <a href="/user/">
                    <img src="{{ asset('storage/properti/logo polibatam.png') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full sm:w-10">
                </a>
                <a href="/user/">
                    <img src="{{ asset('storage/properti/logo 5.png') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:mx-2">
                </a>
                <p class="font-thin text-xs mx-2 mt-4 text-white sm:text-base">
                    Penyedia Jasa Aplikasi Perpajakan
                </p>
             </div>
             <div class="relative text-black">
                 <img src="{{ asset('storage/properti/3.jpg') }}" alt="gambar properti" class="mt-1 mx-2 rounded-full sm:w-10 sm:ml-10 sm:mr-4 md:ml-24 md:mt-2
                 object-fill w-10 h-10" id="user">
                 <ul class="dropdown bg-fot absolute top-0 right-0 mt-10 lg:mt-12 py-3 px-4 mr-5 lg:px-8 shadow-md z-20 hidden
                    transition duration-700" id="dropdownuser">
                     <li class="my-1 lg:my-2">
                         <a href="/user/profil" class="hover:text-sky-600">
                             Profil
                         </a>
                     </li>
                     <li class="my-1 lg:my-2">
                         <a href="/" class="hover:text-sky-600">
                             Logout
                         </a>
                     </li>
                 </ul>
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
                             <a href="/user/" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 {{ request()->is('/') ? 'text-sky-600' : 'text-black' }}" id="navhome">
                                 Home
                             </a>
                         </li>
                         <li class="group relative">
                             <a href="/user/TentangKami" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('user/TentangKami', 'user/Detail_TentangKami') ? 'text-sky-600' : 'text-black' }}" id="tentangkami">
                                 Tentang Kami
                             </a>
                         </li>
                         <li class="group relative ">
                             <a href="/user/Konsultasi" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('user/Konsultasi', 'user/Detail_Konsultasi') ? 'text-sky-600' : 'text-black' }}" id="konsultasi">
                                 Konsultasi
                             </a>
                         </li>
                         <li class="group relative">
                             <a href="/user/Riset" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-5 
                                    {{ request()->is('user/Riset', 'user/Detail_Riset') ? 'text-sky-600' : 'text-black' }}" id="riset">
                                 Riset
                             </a>
                         </li>
                         <li class="group relative">
                             <a href="/user/Publikasi" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-6 
                                    {{ request()->is('user/Publikasi', 'user/Detail_Publikasi') ? 'text-sky-600' : 'text-black' }}" id="publikasi">
                                 Publikasi
                             </a>
                         </li>
                         <li class="group relative text-black">
                             <a href="/user/Akademi" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-6 
                                    {{ request()->is('user/Akademi', 'user/Pelatihan' , 'user/Kegiatan', 'user/Detail_Pelatihan', 'user/Detail_Kegiatan',
                                    'user/Pembayaran', 'user/Detail_Riwayat') ? 'text-sky-600' : 'text-black' }}" id="akademi">
                                 Akademi
                             </a>
                             <ul class="dropdown bg-latar lg:bg-fot hidden lg:absolute py-3 px-8 lg:ml-5 lg:px-5 lg:pt-5 lg:shadow-md lg:rounded-md
                                w-full transition duration-700" id="dropdownakademi">
                                 <li class="my-2">
                                     <a href="/user/Pelatihan" class="hover:text-sky-600
                                            {{ request()->is('user/Pelatihan', 'user/Detail_Pelatihan') ? 'text-sky-600' : 'text-black' }}">
                                         Pelatihan
                                     </a>
                                 </li>
                                 <li class="my-2">
                                     <a href="/user/Kegiatan" class="hover:text-sky-600 
                                            {{ request()->is('user/Kegiatan', 'user/Detail_Kegiatan') ? 'text-sky-600' : 'text-black' }}">
                                         Kegiatan
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="group relative">
                             <a href="/user/Berita" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                    lg:mx-6 
                                    {{ request()->is('user/Berita', 'user/Detail_Berita') ? 'text-sky-600' : 'text-black' }}" id="berita">
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
         </div>
         <!-- navbar end -->
     </div>
 </header>
 <!-- Header End -->
