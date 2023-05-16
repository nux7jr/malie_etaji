import "./video";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
const offer = new Swiper(".offer-swiper", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    pagination: {
        clickable: true,
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
