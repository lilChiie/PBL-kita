<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Detail</title>
</head>
<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headeruser')
    
    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 mx-8">
        <div class="bg-white w-full">
            <div class="p-3 md:p-20 w-full">
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
                    

                    <!-- form pertanyaan start -->
                    <section class="bg-wform1 rounded-xl mt-20 " data-aos="fade-zoom-in">
                    <div class="py-6 lg:py-8">
                        <h2 class="mb-4 lg:text-2xl px-4">Formulir Pertanyaan</h2>
                        <form method="POST" action="{{route('user.pertanyaan.tambah')}}" class=" p-4 bg-white">
                            @csrf
                            <div>
                                <input type="text" name="name" id="name" autocomplete="name" class="bg-wform text-sm border-none focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 my-4 " placeholder="Nama" required>
                            </div>
                            <div>
                                <input type="email" name="email" id="email" autocomplete="email" class="bg-wform text-sm border-none focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 my-4"   placeholder="Email" required>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <textarea id="message" name="pertanyaan" rows="6" class="block p-2.5 w-full bg-wform text-sm border-none focus:ring-primary-500 focus:border-primary-500 my-4 " placeholder="Pertanyaan..."></textarea>
                            </div>
                            <div class="flex justify-center items-center mt-3">
                                <button type="submit" class="py-2 px-7 text-sm font-medium text-center rounded-full bg-wform1 sm:w-fit hover:bg-nav transition duration-700 hover:text-white ">Kirim Formulir</button>
                            </div> 
                        </form>
                    </div>
                    </section>
                    <!-- form pertanyaan end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footeruser')

    <!-- javascript -->
    @vite('resources/js/fituruser.js')
</body>
</html>
