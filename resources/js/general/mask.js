import Inputmask from "inputmask";

const allInputs = document.querySelectorAll('input[name="phone"]');

Inputmask({
    mask: "+7 (*99) 999-99-99",
    definitions: {
        "*": {
            validator: "[0-69]",
        },
    },
    clearMaskOnLostFocus: true,
}).mask(allInputs);

allInputs.forEach((elem) => {
    elem.addEventListener("focusout", (evt) => {
        if (elem.value.indexOf("_") !== -1) {
            elem.value = "";
        }
    });
});
