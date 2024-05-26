import "tailwindcss/tailwind.css";

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});


// silderr
document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector("#slider");
    const nextBtn = document.querySelector("[data-carousel-next]");
    const prevBtn = document.querySelector("[data-carousel-prev]");
    const carouselItems = document.querySelectorAll("[data-carousel-item]");
    let currentIndex = 0;
    let timer = null;

    function showItem(index) {
        carouselItems.forEach((item, i) => {
            if (i === index) {
                item.classList.remove("hidden");
            } else {
                item.classList.add("hidden");
            }
        });
    }

    function nextSlide() {
        currentIndex++;
        if (currentIndex >= carouselItems.length) {
            currentIndex = 0;
        }
        showItem(currentIndex);
    }

    function prevSlide() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = carouselItems.length - 1;
        }
        showItem(currentIndex);
    }

    function startTimer() {
        timer = setInterval(nextSlide, 10000); // 10 seconds interval
    }

    // Tampilkan gambar pertama saat halaman dimuat
    showItem(currentIndex);
    
    // Event listener untuk tombol next
    nextBtn.addEventListener("click", function () {
        clearInterval(timer);
        nextSlide();
        startTimer();
    });

    // Event listener untuk tombol prev
    prevBtn.addEventListener("click", function () {
        clearInterval(timer);
        prevSlide();
        startTimer();
    });

    // Mulai timer
    startTimer();
});