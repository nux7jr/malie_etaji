import sender from "../general/sender";
// import ymCounters from "../general/ymCounters";
document.addEventListener("DOMContentLoaded", (evt) => {
    const modalsConfig = {
        errorHander: "",
        historyLog: [],
    };
    const modalsState = {
        isActive: false,
        additionalForm: {},
    };
    const allForm = document.querySelectorAll(".modal__form");
    const all_close_buttons = document.querySelectorAll(".modal__close");

    document.addEventListener(
        "click",
        (evt) => {
            if (evt.target.dataset.modal_id) {
                const modal_id = evt.target.dataset.modal_id;
                const currModal = document.getElementById(modal_id);
                if (evt.target.dataset.additional_form) {
                    const form_id = evt.target.dataset.additional_form;
                    modalsState.additionalForm = new FormData(
                        document.getElementById(`${form_id}`)
                    );
                } else {
                    modalsState.additionalForm = {};
                }
                console.log(modalsState.additionalForm);
                modalsState.isActive = true;
                currModal.classList.add("modal__window--active");
                document.body.classList.add("modal__open");
                currModal.addEventListener("click", (evt) => {
                    if (evt.target.classList.contains("modal__window")) {
                        closer(currModal);
                    }
                });
            }
        },
        false
    );

    // const allButtons = document.querySelectorAll("[data-modal_id]");
    // allButtons.forEach((elem) => {
    //     elem.onclick = (evt) => {
    //         console.log("was clicked");
    //         if (!evt.target.dataset.modal_id) {

    //         }
    //         const modal_id = evt.target.dataset.modal_id;
    //         const currModal = document.getElementById(modal_id);
    //         currModal.classList.add("modal__window--active");
    //         document.body.classList.add("modal__open");
    //         currModal.addEventListener("click", (evt) => {
    //             if (evt.target.classList.contains("modal__window")) {
    //                 closer(currModal);
    //             }
    //         });
    //     };
    // });
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
            modalsState.isActive = false;
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
            const userForm = new FormData(elem);
            if (modalsState.additionalForm instanceof FormData) {
                for (const pair of modalsState.additionalForm) {
                    userForm.append(pair[0], pair[1]);
                }
            }
            sender(userForm).then((res) => {
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
