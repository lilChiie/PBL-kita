<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail Kegiatan</title>
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
<body class="bg-latar text-black pb-12 min-h-screen">
    
    <!-- header -->
   @include('components.headeradmin')

    <!-- Content Start -->
    <section  class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-20">
            <div class="flex mt-6 gap-x-4 justify-end mx-5 md:px-20">
                <button class="text-xs bg-gradb text-white py-1 px-3 rounded-md md:text-base hover:bg-latar focus:bg-latar
                hover:text-black focus:text-black transition duration-700">Hapus</button>
                <a href="/admin/kegiatan/edit" class="text-xs bg-nav text-white py-1 px-4 rounded-md md:text-base hover:bg-latar focus:bg-latar
                hover:text-black focus:text-black transition duration-700">Edit</a>
                
            </div>
            <div class="px-5 pt-5 md:px-20 w-full ">
                <img class="object-cover w-full rounded-md" src="{{ asset('storage/properti/2.jpg') }}" alt="detail tentang kami"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="150"
                data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <h5 class="mb-4 text-xl md:text-3xl font-bold "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">Judul Kegiatan</h5>
                    <div class="text-xs md:text-base grid gap-y-2"
                    data-aos="fade-right"
                    data-aos-offset="150"
                    data-aos-easing="ease-in-sine">
                        <p>Tanggal Kegiatan : 12 OKtober 2024</p>
                        <p>Lokasi Kegiatan : Tokyo, Japan</p>
                        <p>Harga : Rp. 2000.000</p>
                        <p>Slot Peserta : 2000 Peserta</p>
                        <p>Deskripsi Kegiatan, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa expedita, dicta maxime molestias nesciunt assumenda id nemo quidem quae, excepturi delectus labore? Doloribus, recusandae. Soluta praesentium maxime expedita accusantium at voluptatum molestias ipsum numquam amet perspiciatis facilis, et odit illo optio? Amet temporibus, incidunt ullam natus asperiores numquam excepturi suscipit?</p>
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
    @vite('resources/js/app.js')
</body>
</html>