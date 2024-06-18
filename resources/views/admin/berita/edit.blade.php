<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
</head>

<body class="bg-latar text-black pb-12 min-h-screen">

    <!-- header -->
    @include('components.headeradmin')

    <!-- Content Start -->
    <section class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-12">
            <div class="px-5 pt-20 md:px-20 w-full ">
                <img class="object-cover w-8/12 aspect-16/9 rounded-md" src="{{ asset('images/' . $post->photo) }}" alt="detail tentang kami" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <form method="POST" action="{{ route('admin.berita.update', $post->berita_id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <input class="block w-full mb-5 text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file" name="photo">
                        </div>
                        @error('photo')
                        <small class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div>
                            <input name="title" type="text" class="w-full border-black rounded-lg" placeholder="Edit Judul.." value="{{ $post->title }}">
                        </div>
                        @error('title')
                        <small class=" text-red-700">{{ $message }}</small>
                        @enderror
                        <div class="border border-black my-5 rounded-lg">
                            <textarea id="informasi" name="content" rows="15" class="block w-full  text-sm border-none focus:ring-primary-500 focus:border-primary-500 overflow-y-scroll" placeholder="Edit Informasi...">{{ $post->content }}</textarea>
                        </div>
                        @error('content')
                        <small class=" text-red-700">{{ $message }}</small>
                        @enderror

                        <div class="w-full mb-14">
                            <select id="countries" name="type" class="bg-gray-50 border border-black text-gray-900 text-xs  md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected disabled>Pilih Jenis Berita</option>
                                <option value="berita utama" {{ (old('type') == 'berita utama' || $post->type == 'berita utama') ? 'selected' : '' }}>Berita Utama</option>
                                <option value="berita sekunder" {{ (old('type') == 'berita sekunder' || $post->type == 'berita sekunder') ? 'selected' : '' }}>Berita Sekunder</option>
                            </select>
                        </div>


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
</body>

</html>