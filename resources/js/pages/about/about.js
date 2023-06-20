import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import { initCertificates } from "../../components/certificates";
initCertificates(Swiper);

ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map(
            "map-container",
            {
                center: [56.142298, 93.15997],
                zoom: 10,
            },
            {
                searchControlProvider: "yandex#search",
            }
        ),
        objectManager = new ymaps.ObjectManager({
            clusterize: true,
            gridSize: 50,
        });
    objectManager.objects.options.set("preset", "islands#redIcon");
    objectManager.clusters.options.set("preset", "islands#redClusterIcons");

    myMap.geoObjects.add(objectManager);
    myMap.behaviors.disable("scrollZoom");
    myMap.controls.remove("geolocationControl");
    myMap.controls.remove("trafficControl");
    myMap.controls.remove("typeSelector");
    myMap.controls.remove("fullscreenControl");
    myMap.controls.remove("searchControl");
    

    async function objLoading() {
        const response = await fetch("/geoMaps.json");
        const data = await response.json();
        objectManager.add(data);
    }
    objLoading();
    const plot_button = document.querySelector(".changemap");
    plot_button.addEventListener("click", async (evt) => {
        const response = await fetch("/plotMaps.json");
        const data = await response.json();
        objectManager.removeAll();
        objectManager.add(data);
    });
}

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
                    item.style.display = "block";
                }
            });
        });
    });
});

// about map
// 1b463e1c-30e3-4e94-b592-300f2f77b882
// const mapParentFooter = document.querySelector(".map-container");
// try {
//     const maps = await ymaps.load();
//     ymaps
//         .load(
//             "https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=1b463e1c-30e3-4e94-b592-300f2f77b882"
//         )
//         .then((maps) => {
//             const mapContainer = document.createElement("div");

//             mapContainer.style.height = "100%";
//             mapContainer.style.width = "100%";
//             mapParentFooter.appendChild(mapContainer);
//             const myMap = new maps.Map(mapContainer, {
//                 center: [56.010569, 92.852572],
//                 zoom: 9,
//             });
//             myMap.behaviors.disable("scrollZoom");
//             myMap.controls.remove("geolocationControl");
//             myMap.controls.remove("trafficControl");
//             myMap.controls.remove("typeSelector");
//             myMap.controls.remove("fullscreenControl");
//             myMap.controls.remove("searchControl");
//             new obj
//             console.log(maps.GeoObjects);
//             const myGeoObject = new maps.GeoObjects({
//                 geometry: {
//                     type: "Point", // geometry type - point
//                     coordinates: [56.010569, 92.852572], // координаты точки
//                 },
//             });
//             console.log(myGeoObject, "myGeoObject");
//             myMap.geoObjects.add(myGeoObject);
//         });
// } catch (error) {
//     console.error("Something went wrong", error);
// }
