<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran</title>
</head>

<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeruser')

    <!-- Content Start -->
    <section class="pt-36 sm:pt-40 mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md pb-20">
            <div class="mx-3 my-2" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6">Detail Riwayat</h1>

                <!-- data -->
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="username">Nama Pengguna</label>
                    <p class="border border-black rounded-md p-2">{{$pendaftaran->user['username']}}</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="name">Nama</label>
                    <p class="border border-black rounded-md p-2">{{$pendaftaran->user['name']}}</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="email">Email</label>
                    <p class="border border-black rounded-md p-2">{{$pendaftaran->user['email']}}</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="kategori">Kategori</label>
                    <p class="border border-black rounded-md p-2">{{$pendaftaran->activity['category']}}</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="judul pembayaran">Judul Pembayaran</label>
                    <p class="border border-black rounded-md p-2">{{$pendaftaran->activity['title']}}</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="total">Total</label>
                    <p class="border border-black rounded-md p-2">Rp {{number_format($pendaftaran->activity['price'], 0, ',', '.') }}</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="date">Tanggal</label>
                    <p class="border border-black rounded-md p-2">{{ \Carbon\Carbon::parse($pendaftaran->created_at)->format('d/m/Y') }}</p>
                </div>
                <div class="mx-4 text-xs md:text-base sm:mx-10 my-3">
                    <label for="bukti bayar">Bukti Bayar</label>
                    <img src="{{ asset('bukti/' . $pendaftaran->photo) }}" alt="" class=" w-4/12">

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