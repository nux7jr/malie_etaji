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

    // universal sender?
    const allForm = document.querySelectorAll(".modal__form");
    allForm.forEach((elem) => {
        elem.addEventListener("submit", async (evt) => {
            evt.preventDefault();
            const currForm = evt.target.parentNode.parentNode;
            const thxMess = currForm.nextElementSibling;
            console.log(currForm);
            console.log(thxMess);

            currForm.style.display = "none";
            thxMess.style.display = "flex";
            // const res = await fetch("url", {
            //     method: "POST",
            //     body: "",
            // });
            // const bar = await res.json();
        });
    });
});
