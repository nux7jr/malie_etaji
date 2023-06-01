import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import { initTrusted } from "../../components/trusted";
initTrusted(Swiper);

let initButton = document.querySelector(".mortgage-prog__button-active");
if (initButton === null) {
    initButton.document.querySelector(".mortgage-prog__button--first");
}
if (!initButton.classList.contains("mortgage-prog__button-active")) {
    initButton.classList.add("mortgage-prog__button-active");
}
let active_content = document.querySelector(
    `.${initButton.dataset.filter}-content`
);
if (active_content === null) {
    active_content = document.querySelector(".mortgage-prog__first");
}
active_content.style.display = "flex";

document.addEventListener("DOMContentLoaded", () => {
    function clearContent() {
        const allSections = document.querySelectorAll(
            ".mortgage-prog__section"
        );

        allSections.forEach((elem) => {
            elem.style.display = "none";
        });
    }
    function clearActiveButtons() {
        const allButtons = [
            ...document.querySelectorAll(".mortgage-prog__button"),
        ];
        allButtons.forEach((elem) => {
            elem.classList.remove("mortgage-prog__button-active");
        });
    }
    const allButtons = document.querySelectorAll(".mortgage-prog__button");
    allButtons.forEach((elem) => {
        elem.addEventListener("click", (evt) => {
            const dataFilter = evt.target.dataset.filter;
            const currContent = document.querySelector(
                `.${dataFilter}-content`
            );
            clearContent();
            clearActiveButtons();
            evt.target.classList.add("mortgage-prog__button-active");
            currContent.style.display = "flex";
        });
    });
});
