<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
</head>
<body class="bg-gradient-to-b from-gradb to-grad h-screen">
    <div class="container max-w-full flex justify-center">
        <div class=" w-8/12 px-2 self-center my-24
        sm:w-3/6 md:w-2/6 lg:my-14">
            <h1 class=" text-xl text-white lg:text-2xl font-bold">
                TAX-D
            </h1>
            <div class=" text-xs mt-5 mb-2 text-white lg:text-base">
                <p>Selamat datang di TAX</p>
                <p>Digital</p>
            </div>
            <hr>
            <p class="text-center text-2xl my-5 font-bold text-white lg:text-4xl lg:my-6">Masuk</p>
            <form action="" class="text-center">
                <div class="mb-7">
                    <p class="text-[10px] mb-1 text-left text-white lg:text-xs">Nama Pengguna</p>
                    <input type="text" class="rounded-md text-[10px] placeholder:text-[10px] 
                     pl-4 py-2 w-full focus:outline-none focus:ring focus:ring-blue-800 lg:text-xs
                     lg:placeholder:text-xs lg:py-3 lg:rounded-lg" 
                    placeholder="Nama Pengguna">
                </div>
                <div class="mb-2">
                    <p class="text-[10px] mb-1 text-left text-white lg:text-xs">Kata Sandi</p>
                    <input type="password" class="rounded-md text-[10px] placeholder:text-[10px] 
                    pl-4 py-2 w-full focus:outline-none focus:ring focus:ring-blue-800 lg:text-xs
                    lg:placeholder:text-xs lg:py-3 lg:rounded-lg" 
                    placeholder="Kata Sandi ">
                </div>
                <div class="text-left">
                    <a href="lupakatasandi" class="text-[8px] lg:text[10px] text-white hover:text-gradb
                    transition duration-700">Lupa Kata Sandi?</a>
                </div>
                <div class="text-center mt-4 lg:text-xs lg:mt-5">
                    <button class="bg-gradb text-[10px] w-10/12 rounded-2xl py-2 text-white lg:text-xs
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
</body>
</html>
