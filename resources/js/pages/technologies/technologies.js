import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import { initFeedback } from "../../components/feedback";
initFeedback(Swiper);

import { initCertificates } from "../../components/certificates";
initCertificates(Swiper);

const unreal = new Swiper(".unreal-swiper", {
    slidesPerView: 3,
    spaceBetween: 50,
    pagination: {
        el: ".unreal-pagination",
        clickable: true,
    },
    // initialSlide: 2,
    loop: true,
    navigation: {
        nextEl: ".unreal-next",
        prevEl: ".unreal-prev",
    },
});
