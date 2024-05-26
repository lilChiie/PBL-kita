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
    <section class="pt-36 sm:pt-40 mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md pb-20">
            <div class="mx-3 my-2"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6"
                >Detail Riwayat</h1>

                <!-- data -->
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
                    <div class="box-border aspect-4/3 h-36 w-32 md:w-52 md:h-64 p-4 border border-black"></div>
                </div>
            </div>  
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footeruser')

    <!-- javascript -->
    @vite('resources/js/fituruser.js')
</body>
</html>