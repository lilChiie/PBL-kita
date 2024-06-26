<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pengguna</title>
</head>

<body class=" bg-latar text-black pb-12 min-h-screen">
    
    <!-- header -->
    @include('components.headeradmin')

    <section class="pt-16 sm:ml-[235px] mx-5 sm:mr-5">
        <div class="bg-white w-full rounded-md">
            <div class="mx-3 my-2">
                <h1 class="font-bold pt-6 text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                    List Profil
                </h1>
            </div>

            <div class=" grid gap-x-1 sm:gap-x-2 gap-y-1 grid-cols-3 ms-5 me-2 sm:mx-20 pb-12">
                <!-- letakin disini foreachnya -->
                <div class=" w-full border-solid border-2 border-gray-400 rounded-lg shadow-xl px-4">
                    <img src="{{ asset('storage/properti/5.jpg') }}" alt="" class=" w-8 my-5 aspect-square object-cover rounded-full sm:w-14">
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">Niati</p>
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">niati@gmail.com</p>
                    <div class="flex justify-end">
                        <button class="bg-nav rounded-md hover:bg-gradb text-[7px] sm:text-base text-white py-1 px-2 sm:px-4 my-3 md:px-6
                        transition duration-700 focus:bg-gradb">Detail</button>
                    </div>  
                </div>
               <!-- enforeach -->
               <div class=" w-full border-solid border-2 border-gray-400 rounded-lg shadow-xl px-4">
                    <img src="{{ asset('storage/properti/5.jpg') }}" alt="" class=" w-8 my-5 aspect-square object-cover rounded-full sm:w-14">
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">Niati</p>
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">niati@gmail.com</p>
                    <div class="flex justify-end">
                        <button class="bg-nav rounded-md hover:bg-gradb text-[7px] sm:text-base text-white py-1 px-2 sm:px-4 my-3 md:px-6
                        transition duration-700 focus:bg-gradb">Detail</button>
                    </div>  
                </div>
                <div class=" w-full border-solid border-2 border-gray-400 rounded-lg shadow-xl px-4">
                    <img src="{{ asset('storage/properti/5.jpg') }}" alt="" class=" w-8 my-5 aspect-square object-cover rounded-full sm:w-14">
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">Niati</p>
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">niati@gmail.com</p>
                    <div class="flex justify-end">
                        <button class="bg-nav rounded-md hover:bg-gradb text-[7px] sm:text-base text-white py-1 px-2 sm:px-4 my-3 md:px-6
                        transition duration-700 focus:bg-gradb">Detail</button>
                    </div>  
                </div>
                <div class=" w-full border-solid border-2 border-gray-400 rounded-lg shadow-xl px-4">
                    <img src="{{ asset('storage/properti/5.jpg') }}" alt="" class=" w-8 my-5 aspect-square object-cover rounded-full sm:w-14">
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">Niati</p>
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">niati@gmail.com</p>
                    <div class="flex justify-end">
                        <button class="bg-nav rounded-md hover:bg-gradb text-[7px] sm:text-base text-white py-1 px-2 sm:px-4 my-3 md:px-6
                        transition duration-700 focus:bg-gradb">Detail</button>
                    </div>  
                </div>
                <div class=" w-full border-solid border-2 border-gray-400 rounded-lg shadow-xl px-4">
                    <img src="{{ asset('storage/properti/5.jpg') }}" alt="" class=" w-8 my-5 aspect-square object-cover rounded-full sm:w-14">
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">Niati</p>
                    <p class=" h-[14px] text-[7px] sm:text-base sm:my-3">niati@gmail.com</p>
                    <div class="flex justify-end">
                        <button class="bg-nav rounded-md hover:bg-gradb text-[7px] sm:text-base text-white py-1 px-2 sm:px-4 my-3 md:px-6
                        transition duration-700 focus:bg-gradb">Detail</button>
                    </div>  
                </div>
            </div>
        </div>
    </section>

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @vite('resources/js/admin.js')
</body>