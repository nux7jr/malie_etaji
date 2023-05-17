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
});

const services = new Swiper(".services-swiper", {
    slidesPerView: "auto",
    centeredSlides: true,

    // loop: true,
    navigation: {
        nextEl: ".services-button-next",
        prevEl: ".services-button-prev",
    },
});

const all_buttons_build = document.querySelectorAll(".build__button");
const houses_build = document.querySelectorAll(".build-slide");

function clear_buttons() {
    all_buttons_build.forEach((element_button) => {
        element_button.classList.remove("build__button--active");
    });
}
all_buttons_build.forEach((element_button) => {
    element_button.addEventListener("click", (evt) => {
        clear_buttons();
        evt.target.classList.add("build__button--active");
        const filter = evt.target.getAttribute("data-filter");
        houses_build.forEach((element) => {
            element.style.display = "none";
            if (filter == "all") {
                element.style.display = "block";
            }
            if (element.classList.contains(filter)) {
                element.style.display = "block";
            }
            build.updateSize();
            build.updateSlides();
            build.updateProgress();
            build.updateSlidesClasses();
            build.slideTo(0);
            build.scrollbar.updateSize();
            return false;
        });
    });
});

const build = new Swiper(".build-swiper", {
    observer: true,
    initialSlide: 0,
    // build
    navigation: {
        nextEl: ".build-button-next",
        prevEl: ".build-button-prev",
    },
    pagination: {
        clickable: true,
        el: ".build__pagination",
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
            return (
                '<span class="' +
                currentClass +
                '"></span>' +
                " из " +
                '<span class="' +
                totalClass +
                '"></span>'
            );
        },
    },
});

const image = new Swiper(".image-swiper", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        clickable: true,
        el: ".image__pagination",
    },
});
