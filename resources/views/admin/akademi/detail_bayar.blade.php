<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembayaran</title>
</head>
<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeradmin')

    <div class="fixed left-0 bottom-16 z-10">
        <a href="/admin/akademi/" class="bg-nav rounded-r-md hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
            transition duration-700 focus:bg-gradb">
            Kembali
        </a>
    </div>
    
    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 pb-12 mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0">Detail Pembayaran</h1>

                <!-- data start-->
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="username" >Nama Pengguna</label>
                    <p class="border border-black rounded-md p-2">Niati_05</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="name" >Nama</label>
                    <p class="border border-black rounded-md p-2">Niati</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="email" >Email</label>
                    <p class="border border-black rounded-md p-2">niatiniati123@gmail.com</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="kategori" >Kategori</label>
                    <p class="border border-black rounded-md p-2">Kegiatan 1</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="judul pembayaran" >Judul Pembayaran</label>
                    <p class="border border-black rounded-md p-2">Judul Pembayaran</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="total" >Total</label>
                    <p class="border border-black rounded-md p-2">Rp.200.000</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="date" >Tanggal</label>
                    <p class="border border-black rounded-md p-2">23/3/2024</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="bukti bayar" >Bukti Bayar</label>
                    <div class="box-border h-36 w-32 md:w-52 md:h-64 p-4 border border-black"></div>
                </div>
                <div class="flex justify-center my-10">
                    <a href="/admin/akademi" class="text-xs md:text-base bg-nav py-1 px-5 md:px-9 text-white rounded-full hover:bg-gradb focus:bg-gradb transition duration-700">Konfirmasi</a>
                </div>  
                <!-- data  end-->
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