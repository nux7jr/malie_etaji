document.addEventListener("DOMContentLoaded", (evt) => {
    const first_slide = document.querySelector(".first_slide");
    const second_slide = document.querySelector(".second_slide");
    const constructor_next = document.querySelector(".constructor__next");
    const constructor__button = document.querySelector(".real-back");
    constructor_next.addEventListener("click", (evt) => {
        first_slide.style.display = "none";
        second_slide.style.display = "flex";
    });
    constructor__button.addEventListener("click", (evt) => {
        first_slide.style.display = "flex";
        second_slide.style.display = "none";
    });
});

const filterData = {
    type: "Одноэтажный",
    size: "100",
    price: "2",
};
