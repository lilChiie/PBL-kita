<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode</title>

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
                <h1 class=" text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-10"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0">Tambah Barcode</h1>

                <form action="" class="mx-5 sm:mx-16">
                    <div class="my-6">
                        <label for="nama-bank" class="block mb-2 text-xs md:text-base font-thin">Nama Bank</label>
                        <input type="text" id="nama-bank" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 " placeholder="cth. BNI" >
                    </div>
                    <div>
                        <input class="block w-full mb-5 text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file">
                    </div>
                    <div class="my-10">
                        <button type="submit" class="text-xs md:text-base bg-nav text-white rounded-md py-2 px-5
                        hover:bg-gradb focus:bg-gradb transition duration-700">Tambahkan Barcode</button>
                    </div>
                </form>

                <h1 class=" text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-10"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0">Tambah Barcode</h1>

                <!-- edited -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg x-5 sm:mx-16">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs uppercase bg-gray-500 text-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Bank
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama File Barcode
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd:bg-sky-100 even:bg-gray-50 border-b border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    BNI
                                </th>
                                <td class="px-6 py-4">
                                    bni.jpg
                                </td>
                               
                                <td class="px-6 py-4">
                                    <button class="font-medium text-white p-1 px-2 sm:px-4 rounded-md bg-nav 
                                hover:bg-gradb focus:bg-gradb transition duration-700 ">Hapus</button>
                                </td>
                            </tr>
                            <tr class="odd:bg-gray-300 even:bg-gray-50 border-b border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    BRI
                                </th>
                                <td class="px-6 py-4">
                                    bri.jpg
                                </td>
                               
                                <td class="px-6 py-4">
                                    <button class="font-medium text-white p-1 px-2 sm:px-4 rounded-md bg-nav 
                                hover:bg-gradb focus:bg-gradb transition duration-700">Hapus</button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <!-- edited -->
                
                <div class="my-24 sm:mx-10">
                    <a href="/admin/akademi" class="text-xs md:text-base text-white bg-gradb py-2 px-3 sm:px-10 rounded-md hover:bg-nav focus:bg-nav
                    transition duration-700">Kembali ke Halaman Akademi</a>
                </div>
            </div>    
        </div>
    </section>
    <!-- Content End -->

    <!-- modal -->
    @include('modals.modal-hapus_barcode')

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/fituruser.js')
</body>
</html>