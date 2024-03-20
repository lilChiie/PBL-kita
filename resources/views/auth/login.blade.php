<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    @vite('resources/css/app.css')

    <!-- font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- library fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<section class="bg-gradient-to-b from-gradb to-grad h-screen">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full md:mt-0 sm:max-w-md xl:p-0" data-aos="zoom-in">
          <div class="p-6 space-y-6 md:space-y-6 sm:p-8 text-white ">
              <h1 class="text-xl leading-tight tracking-tight md:text-2xl">
                  TAX-D
              </h1>
              <p>Selamat Datang di <br>
              Tax Digital
              </p>
              <hr>
              <h1 class="text-center text-2xl leading-tight tracking-tight md:text-4xl font-thin font-bold">Masuk</h1>
              <form class="space-y-4 md:space-y-6" action="/">
                  <div>
                      <label for="username" class="block mb-2 text-xs  text-white">Nama Pengguna</label>
                      <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 md:text-xs rounded-xl focus:ring-primary-600 focus:border-primary-600 block w-full px-3 placeholder:text-xs " placeholder="Nama Pengguna" required="">
                  </div>

                  <div>
                      <label for="password" class="block mb-2 text-xs text-white">Masukkan Kata Sandi</label>
                      <input type="password" name="password" id="password" placeholder="Kata Sandi" class="bg-gray-50 border border-gray-300 text-gray-900 md:text-xs rounded-xl focus:ring-primary-600 focus:border-primary-600 block w-full px-3  placeholder:text-xs " required="">
                  </div>

                  <div class="flex items-center justify-between">
                      <a href="/lupa password" class="text-xs text-primary-600 hover:underline hover:text-gradb
                    transition duration-700">Lupa Kata sandi?</a>
                  </div>

                    <div class="text-center mt-4 lg:text-xs lg:mt-5">
                        <button type="submit" class="bg-gradb text-[10px] w-10/12 rounded-2xl py-2 text-white lg:text-xs
                        lg:py-3 lg:rounded-3xl hover:bg-nav transition duration-700 ">Masuk</button>
                    </div>

                    <div class="text-center my-4 text-[10px] lg:my-5">
                        <p class="mb-4 text-white lg:text-xs">Belum Punya Akun?</p>
                        <a href="/daftar" type="button" class="bg-white text-black w-8/12 rounded-2xl py-2 lg:text-xs
                        lg:py-3 lg:rounded-3xl hover:bg-nav hover:text-white transition duration-700 ">Daftar</a>
                    </div>  
              </form>
          </div>
      </div>
  </div>
</section>


    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>