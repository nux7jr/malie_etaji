import sender from "../general/sender";

document.addEventListener("DOMContentLoaded", (evt) => {
    const order_form = document.querySelector(".order-consultation__form");
    const order_wrapper = document.querySelector(
        ".order-consultation__wrapper"
    );

    const order_thx = document.querySelector(".order-consultation__thx");
    order_form.addEventListener("submit", (evt) => {
        evt.preventDefault();
        sender(order_form).then((res) => {
            ym(67008322, "reachGoal", "leads");
            ym(67008322, "reachGoal", "consult_ipoteka");
            order_wrapper.style.display = "none";
            order_thx.style.display = "flex";
        });
    });
});
