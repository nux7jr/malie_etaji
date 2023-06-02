import * as noUiSlider from "nouislider";
import "nouislider/dist/nouislider.css";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import { initProjects } from "../../components/project-item";
initProjects(Swiper);

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
        start: [3000000, 15700000],
        range: {
            min: [3000000],
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
        start: [50, 250],
        range: {
            min: [50],
            max: [250],
        },
        format: format_square,
    });
    square_slider.noUiSlider.set(["50", "250"]);

    price_slider.noUiSlider.set(["3000000", "15700000"]);
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
        const res = await fetch("/kek", {
            method: "POST",
            body: new FormData(filter_form),
        });
        console.log(res);
    });

    cls_button.addEventListener("click", (evt) => {
        evt.preventDefault();
        filter_form.reset();
        price_slider.noUiSlider.set(["3000000", "15700000"]);
        square_slider.noUiSlider.set(["50", "250"]);

        dropdownItems.firstChild.click();
    });
};

const init = () => {
    filterInit();
};

window.addEventListener("DOMContentLoaded", init);
