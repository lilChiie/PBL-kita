<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publikasi</title>
</head>

<body class="bg-latar text-black pb-12 min-h-screen">

    <!-- header -->
    @include('components.headeradmin')

    <!-- Content Start -->
    <div class="fixed right-0 bottom-16 z-10">
        <a href="/admin/publikasi/tambah" class="bg-nav rounded-l-md hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
    transition duration-700 focus:bg-gradb">Tambah</a>
    </div>

    <section class="pt-16 sm:ml-[235px] mx-5 sm:mr-5">
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

        <div class="bg-white w-full rounded-md pb-40">
            <div class="mx-3 my-2">
                <h1 class="font-bold pt-6 text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">Publikasi</h1>
            </div>

            <div class="grid gap-x-5 sm:gap-x-10 gap-y-2 grid-cols-2 mx-5 sm:mx-10 my-2 ">
                @foreach ($files as $file)
                <!-- content 1 -->
                <div class="w-full" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <a href="{{ route('admin.publikasi.detail', $file->publikasi_id)}}">
                        <img src="{{ asset('images/'.$file->photo) }}" alt="publikasi" class="w-full object-cover aspect-16/9 hover:brightness-50" />
                    </a>
                    <div class="py-3">
                        <a href="{{ route('admin.publikasi.detail', $file->publikasi_id)}}">
                            <h5 class="mb-2 text-xs md:text-lg font-bold tracking-tight hover:text-sky-600">{{ $file->title }}</h5>
                        </a>
                        <p class="mb-3 text-[10px] overflow-hidden md:text-xs h-[62px]">
                            {!! nl2br(e($file->content)) !!}
                        </p>
                    </div>
                </div>
                @endforeach


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