<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

    <!-- @vite(['resources/css/app.css','resources/js/app.js']) -->

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
        <div class="flex flex-col items-center justify-center px-6 py-2 mx-auto h-screen ">
            <div class="w-full md:mt-0 sm:max-w-md xl:p-0" data-aos="zoom-in">
                <div class="p-4 space-y-2 md:space-y-3 sm:p-8 text-white ">
                    <h1 class="text-xl leading-tight tracking-tight md:text-2xl font-bold">
                        PJAP Polibatam
                    </h1>
                    <p>Selamat Datang di <br>
                        PJAP Polibatam
                    </p>
                    <hr>
                    <h1 class="text-center text-2xl leading-tight tracking-tight md:text-4xl font-[700]">Daftar</h1>
                    <form class="space-y-4 md:space-y-2" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-xs  text-white">Masukkan alamat email anda</label>
                            <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 md:text-xs rounded-xl focus:ring-primary-600 focus:border-primary-600 block w-full px-3 placeholder:text-xs " placeholder="liam@gmail.com" value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <small>{{ $message }}</small>
                        @enderror

                        <div class="grid grid-cols-2 gap-2 w-full">
                            <div>
                                <label for="username" class="block mb-2 text-xs  text-white">Nama Pengguna</label>
                                <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 md:text-xs rounded-xl focus:ring-primary-600 focus:border-primary-600 block w-full px-3 placeholder:text-xs" placeholder="Liam_12" value="{{ old('username') }}">
                                @error('username')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <label for="notelp" class="block mb-2 text-xs  text-white">No.Telp</label>
                                <input type="number" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 md:text-xs rounded-xl focus:ring-primary-600 focus:border-primary-600 block w-full px-3 placeholder:text-xs " placeholder="088888888888" value="{{ old('phone') }}">
                                @error('phone')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-xs text-white">Masukkan Kata Sandi</label>
                            <div class="relative">
                                <input type="password" name="password" id="password" placeholder="Kombinasi Huruf Kecil, Kapital dan Angka" class="bg-gray-50 border border-gray-300 text-gray-900 md:text-xs rounded-xl focus:ring-primary-600 focus:border-primary-600 block w-full px-3 placeholder:text-xs" value="{{ old('password') }}">
                                <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-3 flex items-center text-gray-600">
                                    <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                            <small>{{ $message }}</small>
                            @enderror

                            <div class="text-center mt-4 lg:text-xs lg:mt-5">
                                <button type="submit" class="bg-gradb text-[10px] w-10/12 rounded-2xl py-2 text-white lg:text-xs
                        mt-4 lg:py-3 lg:rounded-3xl hover:bg-nav transition duration-700 ">Daftar</button>
                            </div>

                            <div class="text-center my-4 text-[10px] lg:my-5">
                                <p class="mb-4 text-white lg:text-xs">Sudah Punya Akun?</p>
                                <a href="{{ route('login') }}" type="button" class="bg-white text-black w-8/12 rounded-2xl py-2 lg:text-xs
                        lg:py-3 lg:rounded-3xl hover:bg-nav hover:text-white transition duration-700 ">Masuk</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            const eyeIconPath = eyeIcon.querySelectorAll('path');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIconPath[0].setAttribute('d', 'M13.875 18.825A10.051 10.051 0 0112 19c-4.478 0-8.268-2.943-9.542-7 1.274-4.057 5.064-7 9.542-7 1.052 0 2.069.176 3.03.5');
                eyeIconPath[1].setAttribute('d', 'M15 12a3 3 0 11-6 0 3 3 0 016 0z');
            } else {
                passwordInput.type = 'password';
                eyeIconPath[0].setAttribute('d', 'M15 12a3 3 0 11-6 0 3 3 0 016 0z');
                eyeIconPath[1].setAttribute('d', 'M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z');
            }
        }
    </script>

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- @vite('resources/js/app.js') -->
</body>

</html>