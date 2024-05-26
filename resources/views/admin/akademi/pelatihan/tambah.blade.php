<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelatihan</title>
</head>
<body class="bg-latar text-black pb-12 min-h-screen">
    
    <!-- header -->
   @include('components.headeradmin')

    <!-- Content Start -->   
    <section  class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-12">
            <div class="px-5 pt-20 md:px-20 w-full "
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="150"
                data-aos-offset="0">
                <img class="object-cover aspect-16/9 w-8/12 rounded-md" src="{{ asset('storage/properti/2.jpg') }}" alt="detail tentang kami">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <form action="">
                        <div>
                            <input class="block w-full mb-5 text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file">
                        </div>
                        <div>
                            <label for="judul" class="text-xs md:text-base ">Judul Pelatihan</label>
                            <input type="text" id="judul" class="text-xs md:text-base w-full border-black rounded-lg my-2" >
                        </div>
                        <div>
                            <label for="tanggal" class="text-xs md:text-base">Tanggal Pelatihan</label>
                            <input type="date" id="tanggal" class="text-xs md:text-base w-full border-black rounded-lg my-2" >
                        </div>
                        <div>
                            <label for="lokasi" class="text-xs md:text-base">Lokasi</label>
                            <input type="text" id="lokasi" class="text-xs md:text-base w-full border-black rounded-lg my-2" >
                        </div>
                        <div>
                            <label for="harga" class="text-xs md:text-base">Harga</label>
                            <input type="text" id="harga" class="text-xs md:text-base w-full border-black rounded-lg my-2" >
                        </div>
                        <div>
                            <label for="slot" class="text-xs md:text-base">Slot Peserta</label>
                            <input type="text" id="slot" class="text-xs md:text-base w-full border-black rounded-lg my-2" >
                        </div>
                        <div>
                            <label for="pelatih" class="text-xs md:text-base">Nama Pelatih</label>
                            <input type="text" id="pelatih" class="text-xs md:text-base w-full border-black rounded-lg my-2" >
                        </div>
                        <div class="border border-black my-5 rounded-lg">
                        <textarea id="informasi" rows="15" class="block w-full  text-sm border-none focus:ring-primary-500 focus:border-primary-500 overflow-y-scroll" placeholder="Tambah Informasi..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <a href="/admin/pelatihan" type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
                            rounded-md">Tambah</a>
                        </div>
                    </form>
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