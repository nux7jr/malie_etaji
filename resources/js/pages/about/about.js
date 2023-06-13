import ymaps from "ymaps";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import { initCertificates } from "../../components/certificates";
initCertificates(Swiper);

const gallerys = new Swiper(".photo-gallery__swiper", {
    slidesPerView: 1,
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
    breakpoints: {
        992: {
            slidesPerView: 3,
            spaceBetweenSlides: 50,
        },
    },
});

// your-house__swipers
const your_house = new Swiper(".your-house__swipers", {
    slidesPerView: 1,
    spaceBetween: 50,

    loop: true,
    navigation: {
        nextEl: ".your-house__button-next",
        prevEl: ".your-house__button-prev",
    },
    breakpoints: {
        1440: {
            slidesPerView: 4,
            spaceBetweenSlides: 30,
        },
    },
});

// serv
document.addEventListener("DOMContentLoaded", () => {
    const serv_button = [
        ...document.querySelectorAll(".services-filters__button"),
    ];
    const serv_items = [
        ...document.querySelectorAll(".services-filters__item"),
    ];
    const serv_heading = document.querySelector(".services-filters__heading");
    function clearStyles(arr) {
        arr.forEach((el) => {
            el.style.display = "none";
        });
    }
    function clearActive(arr) {
        arr.forEach((el) => {
            el.classList.remove("services-filters__button--active");
        });
    }
    serv_button.forEach((el) => {
        el.addEventListener("click", (evt) => {
            clearActive(serv_button);
            clearStyles(serv_items);
            evt.target.classList.add("services-filters__button--active");
            serv_heading.innerHTML = evt.target.dataset.title;
            serv_items.forEach((item) => {
                if (item.classList.contains(evt.target.dataset.filter)) {
                    item.style.display = "flex";
                }
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", async function () {
    // about map
    const mapParentFooter = document.querySelector(".map-container");
    try {
        const maps = await ymaps.load();
        const mapContainer = document.createElement("div");

        mapContainer.style.height = "100%";
        mapContainer.style.width = "100%";
        mapParentFooter.appendChild(mapContainer);
        const myMap = new maps.Map(mapContainer, {
            center: [56.010569, 92.852572],
            zoom: 8,
        });
        myMap.behaviors.disable("scrollZoom");
        myMap.controls.remove("geolocationControl");
        myMap.controls.remove("trafficControl");
        myMap.controls.remove("typeSelector");
        myMap.controls.remove("fullscreenControl");
        myMap.controls.remove("searchControl");
        // new obj

        //end
    } catch (error) {
        console.error("Something went wrong", error);
    }
});
