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

    <!-- Content Start -->
    <section class="pt-16 sm:ml-[235px] mx-5 sm:mr-5 flex justify-center">
        <div class="bg-white w-full rounded-md">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">Detail Pembayaran</h1>

                <!-- data start-->
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

                <div class="flex justify-center my-10">
                    @if ($pendaftaran->status == 'Belum di konfirmasi')
                    <form action="{{ route('admin.konfirmasi.pendaftaran', $pendaftaran->pembayaran_id) }}" method="POST">
                        @csrf
                        <button type="submit" class="text-xs md:text-base bg-nav py-1 px-5 md:px-9 mx-3 text-white rounded-full hover:bg-gradb focus:bg-gradb transition duration-700">Konfirmasi</button>
                    </form>

                    <form action="{{ route('admin.batalkan.pendaftaran', $pendaftaran->pembayaran_id) }}" method="POST">
                        @csrf
                        <button type="submit" class="text-xs md:text-base bg-nav py-1 px-5 md:px-9 mx-3 text-white rounded-full hover:bg-gradb focus:bg-gradb transition duration-700">Batalkan</button>
                    </form>
                    @elseif ($pendaftaran->status == 'Pendaftaran dikonfirmasi')
                    <span class="text-xs md:text-base bg-gray-300 py-1 px-5 md:px-9 text-gray-600 rounded-full">Pendaftaran sudah dikonfirmasi</span>
                    @elseif ($pendaftaran->status == 'Pendaftaran dibatalkan')
                    <span class="text-xs md:text-base bg-gray-300 py-1 px-5 md:px-9 text-gray-600 rounded-full">Pendaftaran sudah dibatalkan</span>
                    @endif
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
    @vite('resources/js/admin.js')
</body>

</html>