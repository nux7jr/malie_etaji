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

const menu = [
    "1 этап",
    "2 этап",
    "3 этап",
    "4 этап",
    "5 этап",
    "6 этап",
    "3 этап",
];
const stage = new Swiper(".stage-swiper", {
    pagination: {
        el: ".stage-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + menu[index] + "</span>";
        },
    },
    navigation: {
        nextEl: ".stage-button-next",
        prevEl: ".stage-button-prev",
    },
});

const spec = new Swiper(".spec-swiper", {
    slidesPerView: 1,
    spaceBetween: 60,
    pagination: {
        clickable: true,
        el: ".spec-pagination",
    },
    navigation: {
        nextEl: ".spec-button-next",
        prevEl: ".spec-button-prev",
    },
    breakpoints: {
        999: {
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
