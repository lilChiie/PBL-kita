<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Riset</title>
</head>

<body class="bg-latar text-black pb-12 min-h-screen">

    <!-- header -->
    @include('components.headeradmin')

    <!-- edited -->
   <div class="fixed left-0 bottom-16 z-10">
        <a href="{{ route('admin.riset.detail', $post->riset_id) }}" class="bg-nav rounded-r-md hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
            transition duration-700 focus:bg-gradb">
            Kembali
        </a>
    </div>
    <!-- edited -->

    <!-- Content Start -->
    <section class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-12">
            <div class="px-5 pt-20 md:px-20 w-full ">
                <img class="object-cover w-8/12 rounded-md aspect-16/9" src="{{ asset('images/' . $post->photo) }}" alt="detail riset" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <form method="POST" action="{{ route('admin.riset.update', $post->riset_id) }}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input class="block w-full  text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file" name="photo">
                        </div>
                        @error('photo')
                        <small>{{ $message }}</small>
                        @enderror
                        <div>
                            <input name="title" value="{{ $post->title }}" type="text" class="w-full border-black rounded-lg mt-5" placeholder="Edit Judul..">
                        </div>
                        @error('title')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="border border-black mt-5 rounded-lg">
                            <textarea name="content" id="informasi" rows="15" class="block w-full  text-sm border-none focus:ring-primary-500 focus:border-primary-500 overflow-y-scroll" placeholder="Edit Informasi...">{{ $post->content }}</textarea>
                        </div>
                        @error('content')
                        <small>{{ $message }}</small>
                        @enderror
                        <div class="flex justify-end">
                            <button type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8 mt-5
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