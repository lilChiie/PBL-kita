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
    <section class="pt-20 sm:ml-[235px] mx-5 sm:mr-5 flex justify-center relative">
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

            <form method="POST" action="{{ route('admin.profil.update') }}" enctype="multipart/form-data" class="sm:grid sm:grid-flow-row-dense sm:grid-cols-2">
                @csrf
                @method('PUT')
                <div class="sm:col-span-2 sm:mx-10 grid gap-y-5">

                    <div>
                        <label for="username" class="block text-xs md:text-base font-thin">
                            Nama Pengguna
                        </label>
                        <input type="text" id="username" name="username" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 " placeholder="Liam_12" value="{{ Auth::user()->username }}">
                    </div>
                    @error('username')
                    <small class=" text-red-700">{{ $message }}</small>
                    @enderror
                    <div>
                        <label for="email" class="block text-xs md:text-base font-thin">
                            Email
                        </label>
                        <input type="text" id="email" name="email" class="block w-full p-2 border-black rounded-md  focus:ring-blue-500 focus:border-blue-500 " placeholder="liam@gmail.com" value="{{ Auth::user()->email }}">
                    </div>
                    @error('email')
                    <small class=" text-red-700">{{ $message }}</small>
                    @enderror


                    <div class="flex justify-end">
                        <button type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
                            rounded-md">
                            Edit Profil
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- edited -->

    </section>
    <!-- content end -->

    <!-- javascript -->
    @vite('resources/js/admin.js')
</body>

</html>