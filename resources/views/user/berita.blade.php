<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
</head>

<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeruser')

    <!-- Content Start -->
    <section class="pt-36 sm:pt-40 mx-8">
        <div class="bg-white w-full pt-2 pb-20">
             <!-- berita utama start-->
             <div class="flex gap-7 lg:gap-12 mx-5 sm:mx-10 my-2">
                <div class="w-9/12">
                    <a href="/user/Detail_Berita">
                        <img class="w-full aspect-16/9 object-cover hover:brightness-50" src="{{ asset('storage/properti/6.jpg') }}" alt="gambar berita" data-aos="fade-right">
                    </a>
                </div>
                <div class="w-4/12">
                    <a href="/user/Detail_Berita">
                        <img class=" w-full aspect-16/9 object-cover mb-4 md:mb-11 2xl:mb-20 2xl:mt-8 hover:brightness-50" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar berita" data-aos="fade-down">
                    </a>
                    <a href="/user/Detail_Berita">
                        <img class=" w-full aspect-16/9 object-cover mt-5 md:mt-11 2xl:mt-20 2xl:mb-8 hover:brightness-50" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar berita" class="mt-2" data-aos="fade-up">
                    </a>
                </div>
            </div>
            <!-- berita utama end -->

            <!-- sub berita start -->
            <div class="mx-5 sm:mx-10 mt-4">
                <div class=" w-4/12">
                    <h2 class="text-base md:text-2xl">
                        Sub News
                    </h2>
                    <hr class="border-t-1 border-black my-1 lg:my-3">
                </div>

                <!-- content 1 -->
                <div class="mb-2 sm:mb-4 lg:mb-8 items-center" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
                    <div class="w-full grid grid-cols-3">
                        <div class="flex items-center">
                            <a href="/user/Detail_Berita">
                                <img class="w-full xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 object-cover hover:brightness-50" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />
                            </a>
                        </div>
                        <div class="ml-4 md:ml-8 h-16 sm:px-2 md:h-44 md:pt-5 overflow-hidden col-span-2 ">
                            <a href="/user/Detail_Berita">
                                <h5 class="font-bold mt-2 sm:mb-2 text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 hover:text-sky-600">Judul Berita</h5>
                            </a>
                            <a href="/user/Detail_Berita">
                                <p class="text-[10px] md:text-base overflow-hidden h-[32px] sm:h-12 lg:h-[72px] hover:text-sky-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate?</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- content 2 -->
                <div class="mb-2 sm:mb-4 lg:mb-8 items-center" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
                    <div class="w-full grid grid-cols-3">
                        <div class="flex items-center">
                            <a href="/user/Detail_Berita">
                                <img class="w-full xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 object-cover hover:brightness-50" src="{{ asset('storage/properti/1.jpg') }}" alt="gambar pelatihan" />
                            </a>
                        </div>
                        <div class="ml-4 md:ml-8 h-16 sm:px-2 md:h-44 md:pt-5 overflow-hidden col-span-2 ">
                            <a href="/user/Detail_Berita">
                                <h5 class="font-bold mt-2 sm:mb-2 text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 hover:text-sky-600">Judul Berita</h5>
                            </a>
                            <a href="/user/Detail_Berita">
                                <p class="text-[10px] md:text-base overflow-hidden h-[32px] sm:h-12 lg:h-[72px] hover:text-sky-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate?</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- content 3 -->
                <div class="mb-2 sm:mb-4 lg:mb-8 items-center" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
                    <div class="w-full grid grid-cols-3">
                        <div class="flex items-center">
                            <a href="/user/Detail_Berita">
                                <img class="w-full xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 object-cover hover:brightness-50" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />
                            </a>
                        </div>
                        <div class="ml-4 md:ml-8 h-16 sm:px-2 md:h-44 md:pt-5 overflow-hidden col-span-2 ">
                            <a href="/user/Detail_Berita">
                                <h5 class="font-bold mt-2 sm:mb-2 text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 hover:text-sky-600">Judul Berita</h5>
                            </a>
                            <a href="/user/Detail_Berita">
                                <p class="text-[10px] md:text-base overflow-hidden h-[32px] sm:h-12 lg:h-[72px] hover:text-sky-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate?</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- content 4 -->
                <div class="mb-2 sm:mb-4 lg:mb-8 items-center" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
                    <div class="w-full grid grid-cols-3">
                        <div class="flex items-center">
                            <a href="/user/Detail_Berita">
                                <img class="w-full xl:w-[419px] xl:h-[236px] 2xl:h-[414px] 2xl:w-[736px] aspect-16/9 object-cover hover:brightness-50" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />
                            </a>
                        </div>
                        <div class="ml-4 md:ml-8 h-16 sm:px-2 md:h-44 md:pt-5 overflow-hidden col-span-2 ">
                            <a href="/user/Detail_Berita">
                                <h5 class="font-bold mt-2 sm:mb-2 text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10 hover:text-sky-600">Judul Berita</h5>
                            </a>
                            <a href="/user/Detail_Berita">
                                <p class="text-[10px] md:text-base overflow-hidden h-[32px] sm:h-12 lg:h-[72px] hover:text-sky-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate?</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sub berita end -->
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footeruser')

    <!-- javascript -->
    @vite('resources/js/fituruser.js')
</body>

</html>