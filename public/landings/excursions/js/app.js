const swiper = new Swiper(".slider__content", {
    direction: "horizontal",
    loop: true,
    spaceBetween: 50,
    centeredSlides: true,
    slidesPerView: 3,
    paginationClickable: true,
    autoHeight: true,

    pagination: {
        el: ".slider__pagination",
    },

    navigation: {
        nextEl: ".slider__arrow-right",
        prevEl: ".slider__arrow-left",
    },
    breakpoints: {
        320: {
            slidesPerView: "auto",
            spaceBetween: 20,
        },
        992: {
            spaceBetween: 50,
            centeredSlides: true,
            slidesPerView: 3,
        },
    },
});
async function sender(form) {
    if (form instanceof FormData) {
        return await fetch("/send_modal", {
            method: "POST",
            body: form,
        });
    }
    return await fetch("/send_modal", {
        method: "POST",
        body: new FormData(form),
    });
}

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
function init() {
  var myMap = new ymaps.Map("map-container-footer", {
      center: [56.036678, 92.923116],
      zoom: 13,
      controls: [],
  });

  myMap.controls.remove('zoomControl');
  myMap.geoObjects.add(new ymaps.Placemark([56.036623, 92.923197], {
      balloonContent: '<a class="balloonContent" href="https://yandex.ru/maps/org/malyye_etazhi/181477490988/?ll=92.923763%2C56.036817&z=16.8">Малые Этажи</a>'
  }, {
      preset: 'islands#redIcon'
  }))
  }

ymaps.ready(init);
