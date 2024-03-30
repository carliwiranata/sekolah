$(document).ready(function(){
    
    $("#slider-hero").owlCarousel({
        nav: true,
        items: 1,
        navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ],
        navContainer: "#slider-hero-nav",
        loop: true, // Untuk membuat efek looping
        autoplay: true, // Untuk membuat slider bergerak otomatis
        autoplayTimeout: 5000, // Waktu dalam milidetik antara setiap slide
        autoplayHoverPause: true, // Jeda ketika pengguna mengarahkan kursor ke slider
         autoplaySpeed: 1000, // Kecepatan animasi dalam milidetik (misalnya, 1000ms atau 1 detik)
    });

    $("#tenaga-pendidikan-slider").owlCarousel({
        nav: true,
        items: 3,
        navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ],
        navContainer: "#slider-tools-1",
        margin: 20,
        loop: true, // Untuk membuat efek looping
        autoplay: true, // Untuk membuat slider bergerak otomatis
        autoplayTimeout: 5000, // Waktu dalam milidetik antara setiap slide
        autoplayHoverPause: true, // Jeda ketika pengguna mengarahkan kursor ke slider
        autoplaySpeed: 1000, // Kecepatan animasi dalam milidetik (misalnya, 1000ms atau 1 detik)
    });


    $("#alumni-slider").owlCarousel({
        nav: true,
        items: 2,
        navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ],
        navContainer: "#slider-tools-2",
        margin: 20,
        loop: true, // Untuk membuat efek looping
        autoplay: true, // Untuk membuat slider bergerak otomatis
        autoplayTimeout: 5000, // Waktu dalam milidetik antara setiap slide
        autoplayHoverPause: true, // Jeda ketika pengguna mengarahkan kursor ke slider
        autoplaySpeed: 1000, // Kecepatan animasi dalam milidetik (misalnya, 1000ms atau 1 detik)
    });

     $("#galeri-slider").owlCarousel({
        nav: true,
        items: 2,
        navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ],
        navContainer: "#slider-tools-3",
        margin: 20,
        loop: true, // Untuk membuat efek looping
        autoplay: true, // Untuk membuat slider bergerak otomatis
        autoplayTimeout: 5000, // Waktu dalam milidetik antara setiap slide
        autoplayHoverPause: true, // Jeda ketika pengguna mengarahkan kursor ke slider
        autoplaySpeed: 1000, // Kecepatan animasi dalam milidetik (misalnya, 1000ms atau 1 detik)
    });

});


