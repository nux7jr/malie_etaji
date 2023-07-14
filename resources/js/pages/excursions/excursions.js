import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import sender from "../../general/sender";
import "fslightbox";

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
const watcher = new Swiper(".watch-this__swiper", {
  slidesPerView: 1,
  spaceBetween: 50,
  loop: true,
  navigation: {
      nextEl: ".watch-this__next",
      prevEl: ".watch-this__prev",
  },
});

const callbackForm = document.querySelector(".callback__form");
const contentForm = document.querySelector(".callback__content");
const thxForm = document.querySelector(".callback__content-hidden");
callbackForm.addEventListener("submit", (evt) => {
    evt.preventDefault();

    const load =
        '<svg height="31px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ellipsis"> <!--circle(cx="16",cy="50",r="10")--> <circle cx="84" cy="50" r="0" fill="#ffffff"> <animate attributeName="r" values="10;0;0;0;0" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> <animate attributeName="cx" values="84;84;84;84;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> </circle> <circle cx="16" cy="50" r="9.73158" fill="#ffffff"> <animate attributeName="r" values="0;10;10;10;0" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="-1.3s"></animate> <animate attributeName="cx" values="16;16;50;84;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="-1.3s"></animate> </circle> <circle cx="84" cy="50" r="0.268423" fill="#ffffff"> <animate attributeName="r" values="0;10;10;10;0" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="-0.65s"></animate> <animate attributeName="cx" values="16;16;50;84;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="-0.65s"></animate> </circle> <circle cx="83.0874" cy="50" r="10" fill="#ffffff"> <animate attributeName="r" values="0;10;10;10;0" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> <animate attributeName="cx" values="16;16;50;84;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> </circle> <circle cx="49.0874" cy="50" r="10" fill="#ffffff"> <animate attributeName="r" values="0;0;10;10;10" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> <animate attributeName="cx" values="16;16;16;50;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> </circle> </svg>';
    evt.submitter.innerHTML = load;
    evt.submitter.setAttribute("disabled", "true");
    sender(callbackForm).then((res) => {
        // общяя метрка для всех форм
        ym(67008322, "reachGoal", "leads");
        _tmr.push({ type: "reachGoal", id: 3366612, goal: "lead" });
        contentForm.style.display = "none";
        thxForm.style.display = "block";
    });
});
