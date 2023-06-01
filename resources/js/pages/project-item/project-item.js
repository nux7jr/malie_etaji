import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import { initProjects } from "../../components/project-item";
initProjects(Swiper);

const project_item = new Swiper(".project-item__swiper", {
    slidesPerView: 1,
    // loop: true,
    navigation: {
        nextEl: ".project-item__next",
        prevEl: ".project-item__prev",
    },
});

const project__about = new Swiper(".about-project__swiper", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    pagination: {
        clickable: true,
        el: ".about-project__pagination",
    },
});
const project__mortgage = new Swiper(".project-mortgage__swiper", {
    slidesPerView: 4,
    spaceBetween: 50,

    navigation: {
        nextEl: ".project-mortgage__next",
        prevEl: ".project-mortgage__prev",
    },
});

