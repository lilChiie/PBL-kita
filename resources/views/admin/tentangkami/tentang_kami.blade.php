<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>    
</head>
<body class="bg-latar text-black min-h-screen">
    
    <!-- header -->
   @include('components.headeradmin')

    <!-- Content Start -->

    <!-- tombol tambah start -->
    <div class="fixed right-0 bottom-16 z-10">
        <a href="/admin/tentangkami/tambah" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
            transition duration-700 focus:bg-gradb">
            Tambah
        </a>
    </div>
    <!-- tombol tambah end -->

    <section  class="pt-36 mx-2 sm:mx-8 sm:pt-40 ">
        <div class="bg-white w-full rounded-md pb-12">
            <h1 class="ml-2 pt-2 sm:pt-6 md:ml-8 font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-8"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0">
                Tentang Kami
            </h1>

            <!-- item 1 -->
            <div class="px-2 md:px-10 items-center mb-8" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <a href="/admin/tentangkami/detail">
                            <img class="w-full xl:object-fill xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 hover:brightness-50" src="{{ asset('storage/properti/1.jpg') }}" alt="gambar pelatihan" />
                        </a>
                    </div>
                    <div class="mx-2 h-20 sm:px-2 sm:h-28 md:h-44 sm:pt-3 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-[11px] md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 ">Judul Tentang Kami</h5>
                        <p class="text-[9px] md:text-base overflow-hidden h-[40px] sm:h-10 md:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate?</p>
                        <hr class="border-t-1 border-black mt-1">
                        <a href="/admin/tentangkami/detail" class="text-[8px] md:text-xs lg:text-base hover:text-sky-600">
                            selengkapnya...
                        </a>
                    </div>
                </div>
            </div>

            <!-- item 2 -->
            <div class="px-2 md:px-10 items-center mb-8" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <a href="/admin/tentangkami/detail">
                            <img class="w-full xl:object-fill xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 hover:brightness-50" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />
                        </a>
                    </div>
                    <div class="mx-2 h-20 sm:px-2 sm:h-28 md:h-44 sm:pt-3 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-[11px] md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 ">Judul Tentang Kami</h5>
                        <p class="text-[9px] md:text-base overflow-hidden h-[40px] sm:h-10 md:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate?</p>
                        <hr class="border-t-1 border-black mt-1">
                        <a href="/admin/tentangkami/detail" class="text-[8px] md:text-xs lg:text-base hover:text-sky-600">
                            selengkapnya...
                        </a>
                    </div>
                </div>
            </div>

            <!-- item 3 -->
            <div class="px-2 md:px-10 items-center mb-8" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <a href="/admin/tentangkami/detail">
                            <img class="w-full xl:object-fill xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 hover:brightness-50" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />
                        </a>
                    </div>
                    <div class="mx-2 h-20 sm:px-2 sm:h-28 md:h-44 sm:pt-3 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-[11px] md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 ">Judul Tentang Kami</h5>
                        <p class="text-[9px] md:text-base overflow-hidden h-[40px] sm:h-10 md:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate?</p>
                        <hr class="border-t-1 border-black mt-1">
                        <a href="/admin/tentangkami/detail" class="text-[8px] md:text-xs lg:text-base hover:text-sky-600">
                            selengkapnya...
                        </a>
                    </div>
                </div>
            </div>

            <!-- item 4 -->
            <div class="px-2 md:px-10 items-center mb-8" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <a href="/admin/tentangkami/detail">
                            <img class="w-full xl:object-fill xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 hover:brightness-50" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />
                        </a>
                    </div>
                    <div class="mx-2 h-20 sm:px-2 sm:h-28 md:h-44 sm:pt-3 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-[11px] md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 ">Judul Tentang Kami</h5>
                        <p class="text-[9px] md:text-base overflow-hidden h-[40px] sm:h-10 md:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate?</p>
                        <hr class="border-t-1 border-black mt-1">
                        <a href="/admin/tentangkami/detail" class="text-[8px] md:text-xs lg:text-base hover:text-sky-600">
                            selengkapnya...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->
    
    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/fituruser.js')
</body>
</html>