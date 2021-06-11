// слайдер с кейсами
let swiper = new Swiper('.projects__slider', {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
    }
})

// Выпадающее гамбургер меню
$(document).ready(function() {
    $(document).delegate('.hamburger__menu', 'click', function(event){
        $(this).addClass('oppenned');
        event.stopPropagation();
    })
    $(document).delegate('body', 'click', function(event) {
        $('.hamburger__menu').removeClass('oppenned');
    })
    $(document).delegate('.cls', 'click', function(event){
        $('.hamburger__menu').removeClass('oppenned');
        event.stopPropagation();
    });
});
