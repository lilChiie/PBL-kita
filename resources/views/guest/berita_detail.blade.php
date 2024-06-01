<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Detail</title>
</head>

<body class="bg-latar text-black min-h-screen">

    <!-- header -->
    @include('components.headerguest')
    
    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 mx-8">
        <div class="bg-white w-full">
            <div class="p-3 md:p-20 w-full">
                <img class="object-cover w-4/5 rounded-md aspect-16/9" src="{{ asset('storage/properti/10.jpg') }}" alt="detail tentang kami"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="150"
                data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <h5 class="mb-4 text-xl md:text-3xl font-bold "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">Judul Page</h5>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sequi nulla sunt excepturi nisi. Quidem perspiciatis neque molestias! Architecto, provident? Maiores repellendus, vero beatae laborum culpa quibusdam quod cupiditate suscipit et nulla delectus error earum harum alias dolor dolorum doloremque in? Repellat veniam ex impedit temporibus blanditiis eveniet voluptatibus ad.
                    </p>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sequi nulla sunt excepturi nisi. Quidem perspiciatis neque molestias! Architecto, provident? Maiores repellendus, vero beatae laborum culpa quibusdam quod cupiditate suscipit et nulla delectus error earum harum alias dolor dolorum doloremque in? Repellat veniam ex impedit temporibus blanditiis eveniet voluptatibus ad.
                    </p>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo nulla aperiam officiis, nisi quas modi. Corrupti debitis hic cumque ullam harum dignissimos tenetur quod quas voluptates delectus, fugiat animi obcaecati, optio explicabo quis eius aut omnis enim aperiam quidem alias nesciunt culpa? Modi nobis enim nulla, quod, nam magnam sed commodi inventore explicabo corrupti odit mollitia velit a fugit, soluta eos? Reprehenderit vero sapiente quo et quia consequatur fugit, assumenda eum delectus provident, voluptatum voluptas quasi unde nemo? Fuga quis iusto quidem accusamus perspiciatis alias officiis asperiores repellat deserunt vero voluptas minus fugit, pariatur libero tempore commodi voluptatum earum sint?
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footerguest')

    <!-- javascript -->
    @vite('resources/js/fiturguest.js')
</body>
</html>

