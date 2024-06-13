<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelatihan</title>
</head>

<body class="bg-latar text-black pb-12">

    <!-- header -->
    @include('components.headeradmin')



    <!-- Content Start -->
    <section class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-12">
            <div class="px-5 pt-20 md:px-20 w-full " data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                <img class="object-cover w-8/12 aspect-16/9 rounded-md" src="{{ asset('images/' . $post->photo) }}" alt="detail tentang kami">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <form method="POST" action="{{ route('admin.akademi.update', $post->kegiatan_id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <input class=" block w-full mb-5 text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file" name="photo">
                        </div>
                        @error('photo')
                        <small>{{ $message }}</small>
                        @enderror
                        <div>
                            <label for="judul" class="text-xs md:text-base">Judul Akademi</label>
                            <input type="text" name="title" id="title" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="{{ $post->title }}" placeholder="Edit Judul..">
                        </div>
                        @error('title')
                        <small>{{ $message }}</small>
                        @enderror
                        <div>
                            <label for="tanggal" class="text-xs md:text-base">Tanggal Akademi</label>
                            <input type="date" name="date" id="tanggal" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="{{ $post->date }}">
                        </div>
                        @error('date')
                        <small>{{ $message }}</small>
                        @enderror
                        <div>
                            <label for="lokasi" class="text-xs md:text-base">Lokasi</label>
                            <input type="text" name="location" id="lokasi" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="{{ $post->location }}">
                        </div>
                        @error('location')
                        <small>{{ $message }}</small>
                        @enderror
                        <div>
                            <label for="harga" class="text-xs md:text-base">Harga</label>
                            <input type="text" name="price" id="price" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="{{ $post->price }}">
                        </div>
                        @error('price')
                        <small>{{ $message }}</small>
                        @enderror
                        <div>
                            <label for="slot" class="text-xs md:text-base">Slot Peserta</label>
                            <input type="number" name="slot" id="slot" class="text-xs md:text-base w-full border-black rounded-lg my-2" value="{{ $post->slot }}">
                        </div>
                        @error('slot')
                        <small>{{ $message }}</small>
                        @enderror

                        <div class="border border-black my-5 rounded-lg">
                            <textarea id="informasi" name="description" rows="15" class="block w-full  text-sm border-none focus:ring-primary-500 focus:border-primary-500 overflow-y-scroll" placeholder="Edit Informasi...">{{ $post->description }}</textarea>
                        </div>
                        @error('description')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="flex justify-end">
                            <button type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
                            rounded-md">Simpan</button>
                        </div>
                    </form>
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
    @vite('resources/js/fituruser.js')

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hargaInput = document.getElementById('price');

            hargaInput.addEventListener('input', function(e) {
                let value = e.target.value;
                value = value.replace(/[^,\d]/g, '').toString();
                const split = value.split(',');
                let sisa = split[0].length % 3;
                let rupiah = split[0].substr(0, sisa);
                const ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                if (ribuan) {
                    const separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
                e.target.value = rupiah ? 'Rp. ' + rupiah : '';
            });

            // Remove formatting before form submission
            document.querySelector('form').addEventListener('submit', function(e) {
                hargaInput.value = hargaInput.value.replace(/[^0-9]/g, '');
            });
        });
    </script> -->
</body>

</html>