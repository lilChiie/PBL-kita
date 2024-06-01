<!-- Footer Start -->
<footer class="bg-fot mt-10" data-aos="fade-up" data-aos-duration="1000">
  <div class="container max-w-full pt-2">
    <div class="grid grid-cols-3 gap-x-3 ">
      <div class="border-r-2 border-black px-5 justify-items-center grid ">
        <div class="grid">
          <h1 class="py-5 w-full font-bold text-xs sm:text-lg lg:text-xl">Layanan</h1>
          <a href="/user/TentangKami" class="hover:text-sky-600 text-xs sm:text-base">Tentang Kami</a>
          <a href="/user/Konsultasi" class="hover:text-sky-600 text-xs sm:text-base">Konsultasi</a>
          <a href="/user/Riset" class="hover:text-sky-600 text-xs sm:text-base">Riset</a>
          <a href="/user/Publikasi" class="hover:text-sky-600 text-xs sm:text-base">Publikasi</a>
          <a href="/user/Akademi" class="hover:text-sky-600 text-xs sm:text-base ">Akademi</a>
          <a href="/user/Berita" class="hover:text-sky-600 text-xs sm:text-base ">Berita</a>
          </div>
        </div>
      
        <div class="border-r-2 border-black px-4 justify-items-center grid">
          <div>
            <h1 class="py-5 w-full font-bold text-xs sm:text-lg lg:text-xl">Hubungi Kami</h1>
            <p class="text-xs py-1 sm:text-base ">No telp 08-xx-xx</p>
            <p class="text-xs sm:text-base">
              Jl. Ahmad Yani, Tlk. <br>
              Tering, Kec. Batam <br>
              Kota, Kota Batam, <br>
              Kepulauan Riau 29461</p>
          </div>  
        </div>

        <div class="px-2">
            <div class="grid grid-cols-2 gap-3">
              <div>
                <img src="{{ asset('storage/properti/logo 5.png') }}" alt="" class="w-4/5">
              </div>
              <div>
                <img src="{{ asset('storage/properti/logo polibatam.png') }}" alt="" class="w-4/5">
              </div>
            </div>
            <div class="flex justify-end gap-1 mt-4 sm:gap-3 sm:me-10 ">
              <a href="https://www.facebook.com/NASA?mibextid=ZbWKwL"><i class="fab fa-facebook text-xl lg:text-xl xl:text-2xl"></i></a>
              <a href="https://www.instagram.com/nasa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram text-xl lg:text-xl xl:text-2xl"></i></a>
              <a href="https://x.com/NASA?s=20"><i class="fab fa-twitter text-xl lg:text-xl xl:text-2xl"></i></a>
              <a href="https://www.youtube.com/@NASA"><i class="fab fa-youtube text-xl lg:text-xl xl:text-2xl"></i></a>
            </div>
          </div>
      </div>

      <div class="mt-14 pb-8 text-[6px] lg:text-xs ">
        <p class="text-center"><i class="far fa-copyright"></i> COPYRIGHT {{ date ('Y')}} PJAP. All rights reserved. Not for further distribution without the permission of PJAP</p>
      </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Javascript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>