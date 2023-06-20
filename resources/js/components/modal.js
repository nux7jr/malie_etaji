import sender from "../general/sender";

document.addEventListener("DOMContentLoaded", (evt) => {
    const modalsConfig = {
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

    allButtons.forEach((elem) => {
        elem.onclick = (evt) => {
            if (evt.target.dataset.modal_id) {
                const modal_id = evt.target.dataset.modal_id;
                const currModal = document.getElementById(modal_id);
                currModal.classList.add("modal__window--active");
                document.body.classList.add("modal__open");
                currModal.addEventListener("click", (evt) => {
                    if (evt.target.classList.contains("modal__window")) {
                        closer(currModal);
                    }
                });
            }
        };
    });
    function closer(form) {
        const wrapper = form.querySelector(".modal__wrapper");
        wrapper.classList.add("modal__wrapper--out");
        form.classList.add("modal__window--out");
        setTimeout(() => {
            wrapper.classList.remove("modal__wrapper--out");
            form.classList.remove("modal__window--active");
        }, 500);
        setTimeout(() => {
            form.classList.remove("modal__window--out");
            document.body.classList.remove("modal__open");
        }, 501);
    }
    all_close_buttons.forEach((el) => {
        el.addEventListener("click", (evt) => {
            closer(evt.target.parentNode.parentNode.parentNode);
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
});
