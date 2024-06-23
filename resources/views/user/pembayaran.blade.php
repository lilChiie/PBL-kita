<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>

</head>

<body class="bg-latar text-black min-h-screen">

    <!-- header -->
    @include('components.headeruser')

    <!-- Content Start -->
    <section class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md">
            <div class="px-2 pt-5 md:px-5 w-full " data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-5">
                    Form Pembayaran
                </h1>
                <!-- form pembayaran start -->
                <form method="post" action="{{ route('pembayaran.kirim') }}" class="px-5 sm:px-10 md:px-16" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="username" class="text-xs md:text-base ">
                            Nama Pengguna
                        </label>
                        <input type="text" id="username" name="username" autocomplete="username" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="{{ $user->username }}" readonly>
                    </div>
                    <div>
                        <label for="name" class="text-xs md:text-base">
                            Nama
                        </label>
                        <input type="text" id="name" name="name" autocomplete="name" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="{{ $user->name }}" readonly>
                    </div>
                    <div>
                        <label for="email" class="text-xs md:text-base">
                            Email
                        </label>
                        <input type="email" id="email" name="email" autocomplete="email" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="{{ $user->email }}" readonly>
                    </div>
                    <div>
                        <label for="pembayaran" class="text-xs md:text-base">
                            Judul Pembayaran
                        </label>
                        <input type="text" id="pembayaran" name="kegiatan_id" autocomplete="pembayaran" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="{{ $akademi->title }}" readonly>

                    </div>
                    <div>
                        <label for="total" class="text-xs md:text-base">
                            Total
                        </label>
                        <input type="text" id="total" name="kegiatan_id" autocomplete="total" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="Rp {{ number_format($akademi->price, 0, ',', '.') }}" readonly>
                    </div>
                    <div>
                        <label for="bukti" class="text-xs md:text-base my-5">
                            Bukti Bayar
                        </label>
                        <input id="bukti" name="photo" autocomplete="bukti" class="block w-full  text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file">
                    </div>
                    @error('photo')
                    <small class=" text-red-700">{{ $message }}</small>
                    @enderror


                    <!-- barcode start -->
                    <div class="my-2">
                        <div>
                            <label class="text-xs md:text-base">
                                Pilih Qris</label>
                            @foreach ($barcodes as $barcode)
                            <div class="my-2">
                                <button type="button" class="testButton text-xs md:text-base border border-gradb rounded-md py-2 px-5 sm:px-10" data-photo="{{ $barcode->photo }}">
                                    {{ $barcode->bank }}
                                </button>
                            </div>
                            @endforeach

                            <script>
                                document.querySelectorAll('.testButton').forEach(button => {
                                    button.addEventListener('click', function() {
                                        const photo = button.getAttribute('data-photo');
                                        const imageUrl = "{{ asset('barcode') }}/" + photo;
                                        console.log("Image URL:", imageUrl);

                                        Swal.fire({
                                            imageUrl: imageUrl,
                                            imageWidth: 400,
                                            imageHeight: 400,
                                            imageAlt: 'QR Code Image'
                                        });
                                    });
                                });
                            </script>
                        </div>

                        <!-- tombol kirim start -->
                        <div class="flex justify-end my-12">
                            <button type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-8 md:px-12
                        rounded-full">
                                Kirim
                            </button>
                        </div>
                        <!-- tombol kirim end -->
                    </div>
                </form>
                <!-- barcode end -->
            </div>
            <!-- form pembayaran end -->
        </div>
    </section>
    <!-- Content End -->



    <!-- footer -->
    @include('components.footeruser')

    <!-- javascript -->
    @vite('resources/js/fituruser.js')
</body>

</html>