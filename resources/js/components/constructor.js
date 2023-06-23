import notFound from "../../images/components/content.jpg";

import single_100_low from "../../images/single/79-101/1-main.jpg";
import single_100_mid from "../../images/single/83-109/1-main.jpg";

import double_100_low from "../../images/double/72-92/1-main.jpg";
import double_150_low from "../../images/double/112-141/1-main.jpg";

import barn_100_low from "../../images/barns/75-90/1-main.jpg";
import barn_150_low from "../../images/barns/87-110/1-main.jpg";

const filter_data = {
    house_type: "Одноэтажный",
    house_size: "100",
    house_price: "2-5",
};

const currInfo = [
    {
        img: single_100_low,
        house_type: "Одноэтажный",
        house_size: "100",
        house_price: "2-5",

        square: "100 м2",
        floors: "1",
    },
    {
        img: single_100_mid,
        house_type: "Одноэтажный",
        house_size: "100-150",
        house_price: "2-5",

        square: "109 м2",
        floors: "1",
    },
    // double
    {
        img: double_100_low,
        house_type: "Двухэтажный",
        house_size: "100",
        house_price: "2-5",

        square: "72 м2",
        floors: "2",
    },
    {
        img: double_150_low,
        house_type: "Двухэтажный",
        house_size: "100-150",
        house_price: "2-5",

        square: "111 м2",
        floors: "2",
    },
    // barns
    {
        img: barn_100_low,
        house_type: "Барнхаус",
        house_size: "100",
        house_price: "2-5",

        square: "90 м2",
        floors: "1",
    },
    {
        img: barn_150_low,
        house_type: "Барнхаус",
        house_size: "100-150",
        house_price: "2-5",

        square: "110 м2",
        floors: "1",
    },
];
const filters_button = document.querySelectorAll(".house-filter");
function filterElements() {
    return currInfo.filter(function (item) {
        for (var key in filter_data) {
            if (item[key] === undefined || item[key] != filter_data[key])
                return false;
        }
        return true;
    });
}
filters_button.forEach((element) => {
    element.addEventListener("click", (evt) => {
        filter_data[evt.target.previousElementSibling.name] =
            evt.target.previousElementSibling.value;
        setCurrImage(filterElements());
    });
});
function setCurrImage(data_info) {
    console.log(data_info);
    const preview = document.querySelectorAll(".prew");
    if (data_info[0] !== undefined) {
        preview.forEach((elem) => {
            elem.outerHTML = `<div class="constructor-preview prew" style="background-image: url(${data_info[0].img})">
            <div class="constructor-preview__info">
                <div class="constructor-preview__item">
                    <p class="constructor-preview__paraf">
                    ${data_info[0].square}</p>
                    <p class="constructor-preview__text">
                        Площадь дома</p>
                </div>
                <div class="constructor-preview__item">
                    <p class="constructor-preview__paraf">
                    ${data_info[0].floors}</p>
                    <p class="constructor-preview__text">
                        Кол-во этажей</p>
                </div>
            </div>
        </div>`;
        });
    } else {
        preview.forEach((elem) => {
            elem.outerHTML = `<div class='constructor-alternative prew' style="background-image: url(${notFound})">
            <div>
                <p>Данного варианта нет в наших типовых проектах. </p>
                <p>Предлагаем обратиться к нам на разработку проекта Вашего дома.</p>
                <p>Просто пройдите все этапы конструктора дома до конца.</p>
            </div>
        </div>`;
        });
    }
}

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
