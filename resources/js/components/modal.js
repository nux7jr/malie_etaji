import sender from "../general/sender";

document.addEventListener("DOMContentLoaded", (evt) => {
    const modalsConfig = {
        url: "/php",
        ym: "some ym",
        errorHander: "",
        historyLog: [],
    };
    const modalsState = {
        isActive: false,
    };
    const allButtons = document.querySelectorAll("[data-modal_id]");
    const allForm = document.querySelectorAll(".modal__form");
    const all_close_buttons = document.querySelectorAll(".modal__close");

    allButtons.forEach((element) => {
        element.addEventListener(
            "click",
            (evt) => {
                if (evt.target.dataset.modal_id) {
                    const modal_id = evt.target.dataset.modal_id;
                    const currModal = document.getElementById(modal_id);
                    // currModal.style.display = "flex";
                    currModal.classList.toggle("modal__window--active");
                }
            },
            false
        );
    });

    all_close_buttons.forEach((el) => {
        el.addEventListener("click", (evt) => {
            evt.target.parentNode.parentNode.parentNode.style.display = "none";
        });
    });

    allForm.forEach((elem) => {
        elem.addEventListener("submit", (evt) => {
            evt.preventDefault();
            sender(elem).then((res) => {
                if (res.status == 500) {
                    console.log("YANDEX METRIK");
                }
                const currForm = evt.target.parentNode.parentNode;
                const thxMess = currForm.nextElementSibling;
                currForm.style.display = "none";
                thxMess.style.display = "flex";
            });
        });
    });

    // allForm.forEach((elem) => {
    //     elem.addEventListener("submit", async (evt) => {
    //         evt.preventDefault();
    //         const currForm = evt.target.parentNode.parentNode;
    //         const thxMess = currForm.nextElementSibling;
    //         console.log(currForm);
    //         console.log(thxMess);

    //         currForm.style.display = "none";
    //         thxMess.style.display = "flex";
    //         const res = await fetch("url", {
    //             method: "POST",
    //             body: "",
    //         });
    //         const bar = await res.json();
    //     });
    // });
});
