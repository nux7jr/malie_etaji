import * as noUiSlider from "nouislider";
import "nouislider/dist/nouislider.css";

const selectionInit = () => {
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
            const bar = values[handle].replace(",", ".");
            hiddenInputs[handle].value = bar;
            formatValues[handle].innerHTML = values[handle];
        }
    );
    ///////////////////////////////////////////
    const nonLinearSquare = document.querySelector(".rangees-square");
    const formatForSquare = {
        from: function (formattedValue) {
            return Number(formattedValue);
        },
        to: function (numericValue) {
            return Math.round(numericValue / 10) * 10;
        },
    };
    noUiSlider.create(nonLinearSquare, {
        connect: true,
        behaviour: "tap",
        start: [50, 250],
        range: {
            min: [50],
            max: [250],
        },
        format: formatForSquare,
    });
    nonLinearSquare.noUiSlider.set(["50", "250"]);
    const formatValuesSquare = [
        document.querySelector(".formatting-end-square"),
        document.querySelector(".formatting-start-square"),
    ];
    const hiddenInputsSquare = [
        document.querySelector(".hide-end-square"),
        document.querySelector(".hide-start-square"),
    ];
    nonLinearSquare.noUiSlider.on(
        "update",
        function (values, handle, unencoded) {
            hiddenInputsSquare[handle].value = values[handle];
            formatValuesSquare[handle].innerHTML = values[handle];

            // const bar = values[handle].replace(",", ".");
            // hiddenInputsSquare[handle].value = bar;
            // formatValuesSquare[handle].innerHTML = values[handle];
        }
    );

    // sender
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
    selectionInit();
};
window.addEventListener("DOMContentLoaded", init);
