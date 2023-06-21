import * as noUiSlider from "nouislider";
import "nouislider/dist/nouislider.css";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import { initProjects } from "../../components/project-item";
initProjects(Swiper);


const parentEl = document.querySelector(".project-wrapper");

// function whit data
function sortinLargestToSmallest(dataInfo) {
    dataInfo.sort((a, b) => {
        if (a.price_kit > b.price_kit) {
            return 1;
        }
        if (a.price_kit < b.price_kit) {
            return -1;
        }
        return 0;
    });
    Window.data = dataInfo;
}
function sortinSmallestToLargest(dataInfo) {
    dataInfo.sort((a, b) => {
        if (a.price_kit < b.price_kit) {
            return 1;
        }
        if (a.price_kit > b.price_kit) {
            return -1;
        }
        return 0;
    });
    Window.data = dataInfo;
}
function reRerenderHouses() {
    if (Window.data.length !== 0) {
        const quantity = document.querySelector(".quantity-obj");
        quantity.innerHTML = " " + Window.data.length + " ";
        parentEl.innerHTML = "";
        Window.data.forEach((element) => {
            let htm = `
            <article class="project-item">
            <div class="swiper project-swiper">
                <div class="swiper-wrapper">
                    ${element.big_slider_images
                        .map(
                            (url) =>
                                '<div class="swiper-slide"><div class="project-slide" style="background-image: url(' +
                                url +
                                ')"></div></div>'
                        )
                        .join("")}
                </div>
                <div class="swiper-pagination pagination-swiper"></div>
            </div>
            <div class="project-item__wrapper dark">
                <div class="project-item__info">
                    <h2 class="project-item__heading">
                    ${element.name}
                    </h2>
                    <p class="project-item__price">${element.price_small}</p>
                </div>
                <hr class="project-item__hr" />
                <div class="project-item__hidden">
                    <div class="house-info">
                        <p class="house-info__paraf">${
                            element.item_info.square
                        } м2</p>
                        <p class="house-info__paraf">${
                            element.formated_info.bedrooms
                        }</p>
                        <p class="house-info__paraf">${
                            element.formated_info.bathrooms
                        }</p>
                        <p class="house-info__paraf">${
                            element.formated_info.floors
                        }</p>
                    </div>
                    <div class="house-tag">
                    ${element.tags
                        .map(
                            (tag) =>
                                '<p class="house-tag__item">' + tag + "</p>"
                        )
                        .join("")}
                    </div>
                </div>
                <hr class="project-item__hr" />
                <div class="project-item__option">
                    <a class="default__button" href="/projects/${
                        element.id
                    }">Подробнее</a>
                    <button class="default__button project-item__call">Хочу такой дом</button>
                </div>
            </div>
        </article>
        `;
            parentEl.innerHTML += htm;
            initActivity();
        });
    } else {
        conclusionNoHouses();
    }
}
function conclusionNoHouses() {
    const quantity = document.querySelector(".quantity-obj");
    quantity.innerHTML = " 0 ";

    const htm = `<div>По заданым параметрам нет домов</div>`;
    parentEl.innerHTML = htm;
}
function initPagination() {
    if (Window.data.length > 15) {
        const pagButton = document.querySelector(".more__button");
        pagButton.style.display = "flex";
    }
}
function initActivity() {
    const project_items = new Swiper(".project-swiper", {
        pagination: {
            clickable: true,
            el: ".pagination-swiper",
        },
    });
    const allProjectsAraeHover = document.querySelectorAll(
        ".project-item__info"
    );

    const allArticle = document.querySelectorAll(".project-item");
    allProjectsAraeHover.forEach((element) => {
        element.addEventListener("mouseover", (evt) => {
            const fo = evt.target.closest(".project-item");
            fo.classList.add("project-item--active");
            const baz = fo.querySelectorAll(".project-slide");
            const bar = fo.querySelector(".project-swiper");
            bar.classList.add("project-slide--acitve");
            baz.forEach((elem) => {
                elem.classList.add("project-slide--acitve");
            });
        });
    });
    allArticle.forEach((element) => {
        element.addEventListener("mouseleave", (evt) => {
            const fo = evt.target.closest(".project-item");
            fo.classList.remove("project-item--active");
            const baz = fo.querySelectorAll(".project-slide");
            const bar = fo.querySelector(".project-swiper");
            bar.classList.remove("project-slide--acitve");
            baz.forEach((elem) => {
                elem.classList.remove("project-slide--acitve");
            });
        });
    });
}

// function init
const filterInit = () => {
    const price_slider = document.querySelector(".rangees");
    const square_slider = document.querySelector(".rangees-square");
    const format_price = {
        from: function (formattedValue) {
            return Number(formattedValue);
        },
        to: function (numericValue) {
            const fo = Math.round(numericValue) / 1000000;
            return fo.toFixed(1).toString().replace(".", ",");
        },
    };
    noUiSlider.create(price_slider, {
        connect: true,
        behaviour: "tap",
        start: [900000, 15700000],
        range: {
            min: [900000],
            max: [15700000],
        },
        format: format_price,
    });

    const format_square = {
        from: function (formattedValue) {
            return Number(formattedValue);
        },
        to: function (numericValue) {
            return Math.round(numericValue / 10) * 10;
        },
    };
    noUiSlider.create(square_slider, {
        connect: true,
        behaviour: "tap",
        start: [42, 250],
        range: {
            min: [42],
            max: [250],
        },
        format: format_square,
    });
    square_slider.noUiSlider.set(["42", "250"]);

    price_slider.noUiSlider.set(["900000", "15700000"]);
    const formatValues = [
        document.querySelector(".formatting-end"),
        document.querySelector(".formatting-start"),
    ];
    const hiddenInputs = [
        document.querySelector(".hide-end"),
        document.querySelector(".hide-start"),
    ];
    price_slider.noUiSlider.on("update", function (values, handle, unencoded) {
        const bar = values[handle].replace(",", ".");

        hiddenInputs[handle].value = bar;
        formatValues[handle].innerHTML = values[handle];
    });
    //
    const formatValuesSquare = [
        document.querySelector(".square-end"),
        document.querySelector(".square-start"),
    ];
    const hiddenInputsSquare = [
        document.querySelector(".square-hide-end"),
        document.querySelector(".square-hide-start"),
    ];
    square_slider.noUiSlider.on("update", function (values, handle, unencoded) {
        const bar = values[handle];

        hiddenInputsSquare[handle].value = bar;
        formatValuesSquare[handle].innerHTML = values[handle];
    });

    // send + cls
    const filter_form = document.querySelector(".filter__form");
    const cls_button = document.querySelector(".cls__button");
    const dropdownItems = document.querySelector(".dropdown-select-items");

    filter_form.addEventListener("submit", async (evt) => {
        evt.preventDefault();
        const res = await fetch("/api/houses", {
            method: "POST",
            body: new FormData(filter_form),
        });
        const fetch_data = await res.json();
        Window.data = [];
        fetch_data.data.forEach((el) => {
            Window.data.push(el);
        });

        reRerenderHouses();
    });

    cls_button.addEventListener("click", (evt) => {
        evt.preventDefault();
        filter_form.reset();
        price_slider.noUiSlider.set(["900000", "15700000"]);
        square_slider.noUiSlider.set(["42", "250"]);
        dropdownItems.firstChild.click();
    });
};

const sortInit = () => {
    const allFilters = document.querySelectorAll(
        ".project-info__sort .dropdown-select-items div"
    );
    allFilters.forEach((element) => {
        element.addEventListener("click", (evt) => {
            if (
                document.querySelector("select[name='house-short']").value ===
                "Сначала дешевле"
            ) {
                sortinLargestToSmallest(Window.data);
            } else {
                sortinSmallestToLargest(Window.data);
            }
            reRerenderHouses();
        });
    });
};

const init = () => {
    filterInit();
    sortInit();
};

window.addEventListener("DOMContentLoaded", init);
