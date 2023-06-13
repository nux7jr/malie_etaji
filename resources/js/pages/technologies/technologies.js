import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import { initFeedback } from "../../components/feedback";
initFeedback(Swiper);

import { initCertificates } from "../../components/certificates";
initCertificates(Swiper);

const unreal = new Swiper(".unreal-swiper", {
    slidesPerView: 1,
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
    breakpoints: {
        992: {
            slidesPerView: 3,
            spaceBetweenSlides: 50,
        },
    },
});

document.addEventListener("DOMContentLoaded", (evt) => {
    const moreButton = document.querySelector(".part-more__button");
    const allCards = document.querySelectorAll(".part-list__item");
    moreButton.addEventListener("click", (evt) => {
        allCards.forEach((elem) => {
            elem.style.display = "block";
            elem.style.flex = "1 1 100%";
            elem.style.minHeight = "100px";
            evt.target.style.display = "none";
        });
    });
});
