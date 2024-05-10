<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profil</title>
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
   @include('components.headeruser')

    <!-- Content Start -->
    <section  class="pt-36 mx-8 sm:pt-40 flex justify-center relative pb-20">
        <div class="bg-white w-full rounded-md pb-16">
            <h1 class="font-bold text-xl md:text-3xl text-center my-5">
                Profil
            </h1>
            <form action="" class="mx-5 sm:mx-10 grid gap-y-4 sm:gap-y-6">
                <div>
                    <label for="foto" class="text-xs md:text-base">
                        Foto Profil
                    </label>
                    <div class="box-border bg-cover h-36 w-32 md:w-52 md:h-64 p-4 border border-black"></div>
                </div>
                <div >
                    <input class="block w-full text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file">
                </div>
                <div>
                    <label for="username" class="block text-xs md:text-base font-thin">
                        Nama Pengguna
                    </label>
                    <input type="text" id="username" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 ">
                </div>
                <div>
                    <label for="username" class="block text-xs md:text-base font-thin">
                        Nama Lengkap
                    </label>
                    <input type="text" id="nama" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 ">
                </div>
                <div>
                    <label for="email" class="block text-xs md:text-base font-thin">
                        Email
                    </label>
                    <input type="email" id="email" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 ">
                </div>
                <div>
                    <label for="nohp" class="block text-xs md:text-base font-thin">
                        No. Telpon
                    </label>
                    <input type="text" id="nohp" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 ">
                </div>
                <div>
                    <label for="alamat" class="block text-xs md:text-base font-thin">
                        Alamat
                    </label>
                    <textarea id="alamat" rows="5" class="block w-full  text-sm border border-black focus:ring-primary-500 rounded-md focus:border-primary-500 overflow-y-scroll" ></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
                        rounded-md">
                        Edit Profil
                    </button>
                </div>
            </form>
        </div>
    </section>
    <!-- content end -->
   
    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>
