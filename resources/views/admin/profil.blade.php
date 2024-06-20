<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profil</title>
</head>

<body class="bg-latar text-black min-h-screen">

    <!-- header -->
    @include('components.headeradmin')

    <!-- Content Start -->
    <section class="pt-36 mx-8 sm:pt-40 flex justify-center relative pb-20">
        @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    title: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
        @endif
        <!-- edited -->
        <div class="bg-white w-full rounded-md pb-16 px-5">

            <h1 class="font-bold text-xl md:text-3xl mt-5 mb-10 flex justify-center sm:block sm:ms-5">
                Profil Admin
            </h1>

            <form method="POST" action="{{ route('admin.profil.update') }}" enctype="multipart/form-data" class="sm:grid sm:grid-flow-row-dense sm:grid-cols-3">
                @csrf
                @method('PUT')
                <div class="sm:col-span-1 mb-2 sm:mx-5">
                    <img src="{{ asset('images/' . Auth::user()->photo) }}" class=" aspect-1/1 object-cover rounded-full" alt="">
                    <div>
                        <label for="foto" class="text-xs md:text-base">
                            Logo Aplikasi
                        </label>
                        <input id="foto" name="photo" class="block w-full text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file">
                    </div>
                </div>
                @error('photo')
                <small class=" text-red-700">{{ $message }}</small>
                @enderror
                <div class="sm:col-span-2 sm:ms-10 grid gap-y-5">

                    <div>
                        <label for="username" class="block text-xs md:text-base font-thin">
                            Nama Pengguna
                        </label>
                        <input type="text" id="username" name="username" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 " value="{{ Auth::user()->username }}">
                    </div>
                    @error('username')
                    <small class=" text-red-700">{{ $message }}</small>
                    @enderror
                    <div>
                        <label for="email" class="block text-xs md:text-base font-thin">
                            Email
                        </label>
                        <input type="email" id="email" name="email" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 " value="{{ Auth::user()->email }}">
                    </div>
                    @error('email')
                    <small class=" text-red-700">{{ $message }}</small>
                    @enderror
                    <div>
                        <label for="nohp" class="block text-xs md:text-base font-thin">
                            No. Telepon
                        </label>
                        <input type="number" id="nohp" name="phone" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 " value="{{ Auth::user()->phone }}">
                    </div>
                    @error('phone')
                    <small class=" text-red-700">{{ $message }}</small>
                    @enderror

                    <div>
                        <label for="alamat" class="block text-xs md:text-base font-thin">
                            Alamat
                        </label>
                        <textarea id="alamat" name="address" rows="5" class="block w-full  text-sm border border-black focus:ring-primary-500 rounded-md focus:border-primary-500 overflow-y-scroll">{{ Auth::user()->address }}</textarea>
                    </div>
                    @error('address')
                    <small class=" text-red-700">{{ $message }}</small>
                    @enderror

                    <div class="flex justify-end">
                        <button type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
                            rounded-md ">
                            Edit Profil
                        </button>
                    </div>
                </div>
            </form>

            <a href="{{ route('admin.home') }}" class=" hover:text-blue-600 active:text-blue-800">
                <i class="fas fa-arrow-left mt-20 me-2"></i>Kembali ke Beranda
            </a>
        </div>
        <!-- edited -->
    </section>
    <!-- content end -->

    <!-- javascript -->
    @vite('resources/js/fituruser.js')
</body>

</html>