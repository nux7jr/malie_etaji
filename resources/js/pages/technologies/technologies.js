import ymaps from "ymaps";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import { initFeedback } from "../../components/feedback";
initFeedback(Swiper);

import { initCertificates } from "../../components/certificates";
initCertificates(Swiper);

const gallerys = new Swiper(".photo-gallery__swiper", {
    slidesPerView: 3,
    spaceBetween: 50,
    pagination: {
        el: ".photo-pagination",
        clickable: true,
    },
    // initialSlide: 2,
    loop: true,
    navigation: {
        nextEl: ".photo-gallery__button-next",
        prevEl: ".photo-gallery__button-prev",
    },
});
