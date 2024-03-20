import './bootstrap';

import "tailwindcss/tailwind.css";



const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

//dropdownuser
const dropdownuser = document.querySelector("#dropdownuser");
user.addEventListener("mouseover", function () {
    dropdownuser.classList.remove("hidden");
    dropdownakademi.classList.add("hidden");
});

user.addEventListener("click", function () {
    dropdownuser.classList.remove("hidden");
    dropdownakademi.classList.add("hidden");
});

dropdownuser.addEventListener("mouseleave", function(){
    dropdownakademi.classList.add("hidden");
});



// home
const navhome = document.querySelector("#navhome");

navhome.addEventListener("mouseover", function () {
    dropdownakademi.classList.add("hidden");
});


// tentang kami
const tentangkami = document.querySelector("#tentangkami");


tentangkami.addEventListener("mouseover", function () {
   
    dropdownakademi.classList.add("hidden");
});



// konsultasi
const konsultasi = document.querySelector("#konsultasi");


konsultasi.addEventListener("mouseover", function () {
   
    dropdownakademi.classList.add("hidden");
});



//  riset
const riset = document.querySelector("#riset");


riset.addEventListener("mouseover", function () {
    dropdownakademi.classList.add("hidden");
});



// publikasi
const publikasi = document.querySelector("#publikasi");

publikasi.addEventListener("mouseover", function () {
    dropdownakademi.classList.add("hidden");
});



// akademi
const akademi = document.querySelector("#akademi");

akademi.addEventListener("mouseover", function () {
    dropdownakademi.classList.remove("hidden");
    dropdownuser.classList.add("hidden");
});

akademi.addEventListener("click", function () {
    dropdownakademi.classList.remove("hidden");
    dropdownuser.classList.add("hidden");
});

dropdownakademi.addEventListener("mouseleave", function(){
    dropdownuser.classList.add("hidden");
});

// berita
const berita = document.querySelector("#berita");

berita.addEventListener("mouseover", function () {
    dropdownakademi.classList.add("hidden");
    
});

// Sembunyikan dropdown apabila mouse berada di tempat lain.
document.addEventListener("mouseover", function (event) {
    const targetElement = event.target;

    if (
        !targetElement.closest("#dropdownakademi") &&
        !targetElement.closest("#akademi")
    ) {
        dropdownakademi.classList.add("hidden");
    }
    if (
        !targetElement.closest("#dropdownuser") &&
        !targetElement.closest("#user")
    ) {
        dropdownuser.classList.add("hidden");
    }
});
