<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Publikasi</title>
</head>

<body class="bg-latar text-black pb-12 min-h-screen">

    <!-- header -->
    @include('components.headeradmin')

    <!-- edited -->
    <div class="fixed left-0 sm:left-56 bottom-16 z-10">
        <a href="/admin/publikasi" class="bg-nav rounded-r-md hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
            transition duration-700 focus:bg-gradb">
            Kembali
        </a>
    </div>
    <!-- edited -->

    <!-- Content Start -->
    <section class="pt-16 sm:ml-[235px] mx-5 sm:mr-5 relative">
        @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    title: "{{ session('success') }}",
                    icon: 'success',
                    // confirmButtonText: 'OK'
                    confirmButtonColor: "#3085d6",
                });
            });
        </script>
        @endif

        <div class="bg-white w-full rounded-md pb-12">
            <!-- button start -->
            <div class="flex pt-6 mt-6 gap-x-4 justify-end mx-5 md:px-20">
                <form id="deleteForm" action="{{ route('admin.publikasi.delete', $files->publikasi_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="confirmDelete('{{ $files->title }}')" class="text-xs bg-gradb text-white py-1 px-3 rounded-md md:text-base hover:bg-latar focus:bg-latar hover:text-black focus:text-black transition duration-700">
                        Hapus
                    </button>
                </form>

                <script>
                    function confirmDelete(title) {
                        Swal.fire({
                            title: "Apakah benar ingin menghapus " + title + "?",
                            text: "Data ini tidak dapat dikembalikan!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Ya, hapus!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById('deleteForm').submit();
                            }
                        });
                    }
                </script>
                <a href="{{ route('admin.publikasi.edit', $files->publikasi_id) }}" class="text-xs bg-nav text-white py-1 px-4 rounded-md md:text-base hover:bg-latar focus:bg-latar
                hover:text-black focus:text-black transition duration-700">Edit</a>
            </div>
            <!-- button end -->

            <div class="px-5 pt-5 md:px-20 w-full ">
                <img class="object-cover w-4/5 aspect-16/9 rounded-md" src="{{ asset('images/'.$files->photo) }}" alt="detail publikasi" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <h5 class="mb-4 text-xl md:text-3xl font-bold " data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">{{$files->title}}</h5>
                    <p class="mb-3 font-normal " data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                        {!! nl2br(e($files->content)) !!}
                    </p>
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
    @vite('resources/js/admin.js')
</body>

</html>