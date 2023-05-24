import * as noUiSlider from "nouislider";
import "nouislider/dist/nouislider.css";

const rangeSliderInit = () => {
    const nonLinearSlider = document.querySelector(".rangees");
    // const start = document.querySelector(".formatting-end");
    // const end = document.querySelector(".formatting-start");

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
    var formatValues = [
        document.querySelector(".formatting-end"),
        document.querySelector(".formatting-start"),
    ];
    nonLinearSlider.noUiSlider.on(
        "update",
        function (values, handle, unencoded) {
            console.log(values[handle]);
            formatValues[handle].innerHTML = values[handle];
        }
    );
};
const init = () => {
    rangeSliderInit(); // запускаем функцию инициализации слайдера
};

window.addEventListener("DOMContentLoaded", init); // запускаем функцию init, когда документ будет загружен и готов к взаимодействию
