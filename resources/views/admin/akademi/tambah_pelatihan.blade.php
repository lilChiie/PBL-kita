<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akademi</title>
</head>

<body class="bg-latar text-black pb-12 min-h-screen">

    <!-- header -->
    @include('components.headeradmin')

    <!-- edited -->
    <div class="fixed left-40 sm:left-56 top-24 z-10">
        <a href="/admin/pelatihan" class="bg-nav rounded-r-md hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
            transition duration-700 focus:bg-gradb">
            Kembali
        </a>
    </div>
    <!-- edited -->

    <!-- Content Start -->
    <section class="pt-16 sm:ml-[235px] mx-5 sm:mr-5 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-12">
            <div class="px-5 pt-20 md:px-20 w-full " data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <form method="POST" action="{{route('admin.akademi.insert')}}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input class="block w-full  text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file" name="photo" value="{{ old('photo') }}">
                        </div>
                        @error('photo')
                        <small  class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div class="mt-3">
                            <label for="judul" class="text-xs md:text-base">Judul Akademi</label>
                            <input type="text" id="title" name="title" class="text-xs md:text-base w-full border-black rounded-lg " placeholder="cth. Perpajakan" value="{{ old('title') }}">
                        </div>
                        @error('title')
                        <small  class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div class="pt-3">
                            <label for="kategori" class="text-xs md:text-base">Kategori Akademi</label>
                            <select id="category" name="category" class="bg-gray-50 border border-black text-gray-900 text-xs md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected disabled>Pilih Kategori Akademi</option>
                                <option value="pelatihan" {{ old('kategori') == 'pelatihan' ? 'selected' : '' }}>Pelatihan</option>
                                <option value="kegiatan" {{ old('kategori') == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                            </select>
                        </div>
                        @error('category')
                        <small  class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div class="mt-3">
                            <label for="date" class="text-xs md:text-base">Tanggal</label>
                            <input type="date" id="date" name="date" class="text-xs md:text-base w-full border-black rounded-lg " value="{{ old('date') }}">
                        </div>
                        @error('date')
                        <small  class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div class="mt-3">
                            <label for="lokasi" class="text-xs md:text-base">Lokasi</label>
                            <input type="text" id="location" name="location" class="text-xs md:text-base w-full border-black rounded-lg " placeholder="cth. Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461" value="{{ old('location') }}">
                        </div>
                        @error('location')
                        <small  class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div class="mt-3">
                            <label for="price" class="text-xs md:text-base">Harga</label>
                            <input type="text" id="price" name="price" class="text-xs md:text-base w-full border-black rounded-lg " placeholder="cth. 200000" value="{{ old('price') }}">
                        </div>
                        @error('price')
                        <small  class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div class="mt-3">
                            <label for="slot" class="text-xs md:text-base">Slot Peserta</label>
                            <input type="number" id="slot" name="slot" class="text-xs md:text-base w-full border-black rounded-lg " placeholder="cth. 230" value="{{ old('slot') }}">
                        </div>
                        @error('slot')
                        <small  class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div class="border border-black mt-5 rounded-lg">
                            <textarea id="description" name="description" rows="15" class="block w-full  text-sm border-none focus:ring-primary-500 focus:border-primary-500 overflow-y-scroll" placeholder="Tambah Informasi...">{{ old('description') }}</textarea>
                        </div>
                        @error('description')
                        <small  class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div class="flex justify-end mt-5">
                            <button href="/admin/akademi" type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
                            rounded-md">Tambah</button>
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
    @vite('resources/js/admin.js')
    <script>
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
    </script>
</body>

</html>