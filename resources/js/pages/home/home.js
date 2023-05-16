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
        el: ".offer-slide__pagination",
    },
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
});

const services = new Swiper(".services-swiper", {
    loop: true,
    navigation: {
        nextEl: ".services-button-next",
        prevEl: ".services-button-prev",
    },
});
