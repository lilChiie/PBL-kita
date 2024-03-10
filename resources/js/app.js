import "./bootstrap";

// resources/js/app.js

import "tailwindcss/tailwind.css";

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

// home
const navhome = document.querySelector("#navhome");

navhome.addEventListener("mouseover", function () {
    // berita.classList.toggle('hidden');
    dropdownakademi.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdowntentangkami.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownriset.classList.add("hidden");
});

// dropdown tentang kami
const tentangkami = document.querySelector("#tentangkami");
const dropdowntentangkami = document.querySelector("#dropdowntentangkami");

tentangkami.addEventListener("mouseover", function () {
    dropdowntentangkami.classList.remove("hidden");
    dropdownriset.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdownakademi.classList.add("hidden");
});

dropdowntentangkami.addEventListener("mouseleave", function(){
    dropdowntentangkami.classList.add("hidden");
    dropdownriset.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdownakademi.classList.add("hidden");
});



// dropdown konsultasi
const konsultasi = document.querySelector("#konsultasi");
const dropdownkonsultasi = document.querySelector("#dropdownkonsultasi");

konsultasi.addEventListener("mouseover", function () {
    dropdownkonsultasi.classList.remove("hidden");
    dropdownriset.classList.add("hidden");
    dropdowntentangkami.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdownakademi.classList.add("hidden");
});

dropdownkonsultasi.addEventListener("mouseleave", function(){
    dropdowntentangkami.classList.add("hidden");
    dropdownriset.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdownakademi.classList.add("hidden");
});

// dropdown riset
const riset = document.querySelector("#riset");
const dropdownriset = document.querySelector("#dropdownriset");

riset.addEventListener("mouseover", function () {
    dropdownriset.classList.remove("hidden");
    dropdowntentangkami.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdownakademi.classList.add("hidden");
});

dropdownriset.addEventListener("mouseleave", function(){
    dropdowntentangkami.classList.add("hidden");
    dropdownriset.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdownakademi.classList.add("hidden");
});

// dropdown publikasi
const publikasi = document.querySelector("#publikasi");
const dropdownpublikasi = document.querySelector("#dropdownpublikasi");

publikasi.addEventListener("mouseover", function () {
    dropdownpublikasi.classList.remove("hidden");
    dropdowntentangkami.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownriset.classList.add("hidden");
    dropdownakademi.classList.add("hidden");
});

dropdownpublikasi.addEventListener("mouseleave", function(){
    dropdowntentangkami.classList.add("hidden");
    dropdownriset.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdownakademi.classList.add("hidden");
});

// dropdown akademi
const akademi = document.querySelector("#akademi");
const dropdownakademi = document.querySelector("#dropdownakademi");

akademi.addEventListener("mouseover", function () {
    dropdownakademi.classList.remove("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdowntentangkami.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownriset.classList.add("hidden");
});

dropdownakademi.addEventListener("mouseleave", function(){
    dropdowntentangkami.classList.add("hidden");
    dropdownriset.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdownakademi.classList.add("hidden");
});

// berita
const berita = document.querySelector("#berita");

berita.addEventListener("mouseover", function () {
    dropdownakademi.classList.add("hidden");
    dropdownpublikasi.classList.add("hidden");
    dropdowntentangkami.classList.add("hidden");
    dropdownkonsultasi.classList.add("hidden");
    dropdownriset.classList.add("hidden");
});

// Sembunyikan dropdown apabila mengklik di tempat lain.
document.addEventListener("click", function (event) {
    const targetElement = event.target;

    if (
        !targetElement.closest("#dropdowntentangkami") &&
        !targetElement.closest("#tentangkami")
    ) {
        dropdowntentangkami.classList.add("hidden");
    }

    if (
        !targetElement.closest("#dropdownkonsultasi") &&
        !targetElement.closest("#konsultasi")
    ) {
        dropdownkonsultasi.classList.add("hidden");
    }

    if (
        !targetElement.closest("#dropdownriset") &&
        !targetElement.closest("#riset")
    ) {
        dropdownriset.classList.add("hidden");
    }

    if (
        !targetElement.closest("#dropdownpublikasi") &&
        !targetElement.closest("#publikasi")
    ) {
        dropdownpublikasi.classList.add("hidden");
    }

    if (
        !targetElement.closest("#dropdownakademi") &&
        !targetElement.closest("#akademi")
    ) {
        dropdownakademi.classList.add("hidden");
    }
});
