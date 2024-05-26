<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profil</title>
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
                    <input id="foto" class="block w-full text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file">
                </div>
                <div>
                    <label for="username" class="block text-xs md:text-base font-thin">
                        Nama Pengguna
                    </label>
                    <input type="text" id="username" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 ">
                </div>
                <div>
                    <label for="name" class="block text-xs md:text-base font-thin">
                        Nama Lengkap
                    </label>
                    <input type="text" id="name" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 ">
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
    @vite('resources/js/fituruser.js')
</body>
</html>
