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

const facade_swiper = new Swiper(".facade-swiper", {
    slidesPerView: 1,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        clickable: true,
        el: ".facade-pagination",
    },
});
document.addEventListener("DOMContentLoaded", (evt) => {
    const allPreviewContent = document.querySelectorAll(
        ".project-preview__item"
    );
    const allButtons = document.querySelectorAll(".project-preview__button");

    function setActiveContent(currContent, allContent) {
        allContent.forEach((elem) => {
            elem.style.display = "none";
        });
        console.log(currContent);
        currContent.style.display = "flex";
    }

    allButtons.forEach((elem) => {
        elem.addEventListener("click", (evt) => {
            allButtons.forEach((elem) => {
                elem.classList.remove("project-preview__button-active");
            });
            evt.target.classList.add("project-preview__button-active");
            const currContentStr = evt.target.dataset.filter;
            const corrContentLink = document.querySelector(
                `.${currContentStr}`
            );
            setActiveContent(corrContentLink, allPreviewContent);
        });
    });
});
