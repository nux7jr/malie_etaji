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

    document.addEventListener("click", (evt) => {
        if (evt.target.dataset.modal_id) {
            const modal_id = evt.target.dataset.modal_id;
            const currModal = document.getElementById(modal_id);
            currModal.style.display = "flex";
            document.querySelector(".modal__close");
        }
    });

    const all_close_buttons = document.querySelectorAll(".modal__close");
    all_close_buttons.forEach((el) => {
        el.addEventListener(
            "click",
            (evt) => {
                evt.target.parentNode.parentNode.parentNode.style.display =
                    "none";
            },
            false
        );
    });
});
