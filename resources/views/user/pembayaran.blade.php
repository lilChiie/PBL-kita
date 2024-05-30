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
    <section  class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md">
            <div class="px-2 pt-5 md:px-5 w-full "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-5">
                    Form Pembayaran
                </h1>
                    <!-- form pembayaran start -->
                    <form action="" class="px-5 sm:px-10 md:px-16">
                        <div>
                            <label for="username" class="text-xs md:text-base ">
                                Nama Pengguna
                            </label>
                            <input type="text" id="username" autocomplete="username" class="text-xs md:text-base w-full border-black rounded-lg my-2" required>
                        </div>
                        <div>
                            <label for="name" class="text-xs md:text-base">
                                Nama
                            </label>
                            <input type="text" id="name" autocomplete="name" class="text-xs md:text-base w-full border-black rounded-lg my-2" required>
                        </div>
                        <div>
                            <label for="email" class="text-xs md:text-base">
                                Email
                            </label>
                            <input type="email" id="email" autocomplete="email" class="text-xs md:text-base w-full border-black rounded-lg my-2" required>
                        </div>
                        <div>
                            <label for="pembayaran" class="text-xs md:text-base">
                                Judul Pembayaran
                            </label>
                            <input type="text" id="pembayaran" autocomplete="pembayaran" class="text-xs md:text-base w-full border-black rounded-lg my-2" required>
                        </div>
                        <div>
                            <label for="total" class="text-xs md:text-base">
                                Total
                            </label>
                            <input type="text" id="total" autocomplete="total" class="text-xs md:text-base w-full border-black rounded-lg my-2" required>
                        </div>
                        <div>
                            <label for="bukti" class="text-xs md:text-base my-5">
                                Bukti Bayar
                            </label>
                            <input id="bukti" autocomplete="bukti" class="block w-full  text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file" required>
                        </div>
                    </form>


                    <!-- barcode start -->
                    <div class="px-5 sm:px-10 md:px-16 my-2">
                        <div>
                            <label class="text-xs md:text-base">
                                Pilih Qris</label>
                            @foreach ($barcodes as $barcode)
                            <div class="my-2">
                                <button class="testButton text-xs md:text-base border border-gradb rounded-md py-2 px-5 sm:px-10">
                                    {{ $barcode->bank }}
                                </button>
                            </div>
                            @endforeach

                            <script>
                            // Gunakan selector kelas untuk menangkap semua tombol
                            const buttons = document.querySelectorAll('.testButton');

                            // Loop melalui setiap tombol untuk menambahkan event listener
                            buttons.forEach(button => {
                                button.addEventListener('click', function() {
                                    const photo = "{{ $barcode->photo }}"; // Pastikan nilai ini sesuai dengan data yang diinginkan
                                    const imageUrl = "{{ asset('barcode') }}/" + photo;
                                    console.log("Image URL:", imageUrl); // Log URL gambar

                                    Swal.fire({
                                        imageUrl: imageUrl,
                                        imageWidth: 400,
                                        imageHeight: 400,
                                        imageAlt: 'Test Image'
                                    });
                                });
                            });
                            </script>
                        </div>
                    
                        <!-- tombol kirim start -->
                        <div class="flex justify-end my-12">
                            <a href="/user/Akademi" type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-8 md:px-12
                                rounded-full">
                                Kirim
                            </a>
                        </div>
                        <!-- tombol kirim end -->
                    </div>
                    <!-- barcode end -->
                </div>
                <!-- form pembayaran end -->
            </div>
    </section>
    <!-- Content End -->

    <!-- modal -->
    @include('modals.modal-barcode')

    <!-- footer -->
    @include('components.footeruser')
    
    <!-- javascript -->
    @vite('resources/js/fituruser.js')
</body>
</html>
