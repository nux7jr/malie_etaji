import * as noUiSlider from "nouislider";
import "nouislider/dist/nouislider.css";

const filterInit = () => {
    const nonLinearSlider = document.querySelector(".rangees");

    const formatForSlider = {
        from: function (formattedValue) {
            return Number(formattedValue);
        },
        to: function (numericValue) {
            const fo = Math.round(numericValue) / 1000000;
            return fo.toFixed(1).toString().replace(".", ",");
        },
    };
    noUiSlider.create(nonLinearSlider, {
        connect: true,
        behaviour: "tap",
        start: [3000000, 15700000],
        range: {
            min: [3000000],
            max: [15700000],
        },
        format: formatForSlider,
    });
    nonLinearSlider.noUiSlider.set(["3000000", "15700000"]);
    const formatValues = [
        document.querySelector(".formatting-end"),
        document.querySelector(".formatting-start"),
    ];
    const hiddenInputs = [
        document.querySelector(".hide-end"),
        document.querySelector(".hide-start"),
    ];
    nonLinearSlider.noUiSlider.on(
        "update",
        function (values, handle, unencoded) {
            // const bar = Number(values[handle].replace(",", ".")) * 1000000;
            const bar = values[handle].replace(",", ".");

            hiddenInputs[handle].value = bar;
            formatValues[handle].innerHTML = values[handle];
        }
    );
    // send + cls
    const selection__form = document.querySelector(".selection__form");
    // const cls_button = document.querySelector(".cls__button");
    // const dropdownItems = document.querySelector(".dropdown-select-items");

    selection__form.addEventListener("submit", async (evt) => {
        evt.preventDefault();
        const res = await fetch("/kek", {
            method: "POST",
            body: new FormData(selection__form),
        });
        console.log(res);
    });
};
const init = () => {
    filterInit();
};

window.addEventListener("DOMContentLoaded", init);
