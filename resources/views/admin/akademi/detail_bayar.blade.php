<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembayaran</title>

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
    @include('components.headeradmin')
    
    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 pb-12 mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0">Detail Pembayaran</h1>

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
            </div>
        </div>
    </section>
    <!-- Content End -->



    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>