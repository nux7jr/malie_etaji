document.addEventListener("DOMContentLoaded", (evt) => {});

const faqTogglers = document.querySelectorAll(".faq__item");
faqTogglers.forEach((elem) => {
    elem.addEventListener(
        "click",
        (evt) => {
            console.log("click");
            console.log(evt.target);
            console.log(evt.target.classList.contains("faq__item"));
            if (evt.target.classList.contains("faq__item")) {
                evt.target.classList.toggle("faq__item-active");
            } else {
                const fo = evt.target.closest(".faq__item");
                fo.classList.toggle("faq__item-active");
            }
        },
        false
    );
});
