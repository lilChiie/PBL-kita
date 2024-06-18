<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail Pelatihan</title>
</head>

<body class="bg-latar text-black pb-12 min-h-screen">

    <!-- header -->
    @include('components.headeradmin')



    <!-- Content Start -->
    <section class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
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
        <div class="bg-white w-full rounded-md pb-20">

            <!-- button start -->
            <div class="flex mt-6 gap-x-4 justify-end mx-5 md:px-20">
                <form id="deleteForm" action="{{ route('admin.akademi.delete', $files->kegiatan_id) }}" method="POST">
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
                <a href="{{ route('admin.akademi.edit', $files->kegiatan_id) }}" class="text-xs bg-nav text-white py-1 px-4 rounded-md md:text-base hover:bg-latar focus:bg-latar
                hover:text-black focus:text-black transition duration-700">Edit</a>
            </div>
            <!-- button end -->

            <div class="px-5 pt-5 md:px-20 w-full ">
                <img class="object-cover w-4/5 aspect-16/9 rounded-md" src="{{ asset('images/'.$files->photo) }}" alt="detail tentang kami" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <h5 class="mb-4 text-xl md:text-3xl font-bold " data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">{{$files->title}}</h5>
                    <div class="text-xs md:text-base grid gap-y-2" data-aos="fade-right" data-aos-offset="150" data-aos-easing="ease-in-sine">
                        <p>Tanggal Pelatihan : {{$files->date}}</p>
                        <p>Lokasi Pelatihan : {{$files->location}}</p>
                        <p>Harga : Rp {{ number_format($files->price, 0, ',', '.') }}</p>
                        <p>Slot Peserta :{{$files->slot}} Peserta</p>
                        <p>{!! nl2br(e($files->description)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content End -->

    <!-- modal -->
    @include('modals.modal-hapus_pelatihan')

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @vite('resources/js/fituruser.js')
</body>

</html>