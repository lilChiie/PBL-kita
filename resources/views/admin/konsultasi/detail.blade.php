<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Konsultasi</title>
</head>
<body class="bg-latar text-black pb-12 min-h-screen">
    
    <!-- header -->
   @include('components.headeradmin')

    <!-- Content Start -->
    <section  class="pt-36 mx-8 sm:pt-40 relative">
        @if (session('success'))
        <div class="bg-blue-400 text-white p-4 rounded mb-8" style=" margin-bottom: 1rem;">
            {{ session('success') }}
        </div>
        @endif

        <div class="bg-white w-full rounded-md pb-12">

            <!-- button start -->
            <div class="flex pt-6 mt-6 gap-x-4 justify-end mx-5 md:px-20">
                <form action="{{ route('admin.konsultasi.delete', $files->konsultasi_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah benar ingin menghapus {{$files->title}}')" class="text-xs bg-gradb text-white py-1 px-3 rounded-md md:text-base hover:bg-latar focus:bg-latar
                    hover:text-black focus:text-black transition duration-700">
                        Hapus
                    </button>
                </form>
                <a href="{{ route('admin.konsultasi.edit', $files->konsultasi_id) }}" class="text-xs bg-nav text-white py-1 px-4 rounded-md md:text-base hover:bg-latar focus:bg-latar
                    hover:text-black focus:text-black transition duration-700">
                    Edit
                </a>
            </div>
            <!-- button end -->

            <div class="px-5 pt-5 md:px-20 w-full ">
                <img class="object-cover aspect-16/9 w-4/5 rounded-md" src="{{ asset('images/'.$files->photo) }}" alt="detail tentang kami"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="150"
                data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <h5 class="mb-4 text-xl md:text-3xl font-bold "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">{{$files->title}}</h5>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        {{$files->content}}
                    </p>
                </div>
            </div>
    </section>
    <!-- Content End -->
    
    <!-- modal -->
    @include('modals.modal-hapus_konsultasi')

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/fituruser.js')
</body>
</html>