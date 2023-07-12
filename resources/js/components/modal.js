import sender from "../general/sender";

const ymData = {
    calculator_ipoteka: () => {
        ym(67008322, "reachGoal", "calculator_ipoteka");
    },
    konstruktor: () => {
        ym(67008322, "reachGoal", "konstruktor");
    },
    podbor_doma: () => {
        ym(67008322, "reachGoal", "podbor_doma");
    },
    podbor_uchastka: () => {
        ym(67008322, "reachGoal", "podbor_uchastka");
    },
    ipoteka_glavn: () => {
        ym(67008322, "reachGoal", "ipoteka_glavn");
    },
    client_tur: () => {
        ym(67008322, "reachGoal", "client_tur");
    },
    napisat: () => {
        ym(67008322, "reachGoal", "napisat");
    },
    consult_ipoteka: () => {
        ym(67008322, "reachGoal", "consult_ipoteka");
    },
    podbor_ZU_ipoteka: () => {
        ym(67008322, "reachGoal", "podbor_ZU_ipoteka");
    },
    podbor_uchastka_projects: () => {
        ym(67008322, "reachGoal", "podbor_uchastka_projects");
    },
    raschet_proekta: () => {
        ym(67008322, "reachGoal", "raschet_proekta");
    },
    call_zakaz: () => {
        ym(67008322, "reachGoal", "call_zakaz");
    },
    podbor_ZU_about: () => {
        ym(67008322, "reachGoal", "podbor_ZU_about");
    },
    tehnolog: () => {
        ym(67008322, "reachGoal", "tehnolog");
    },
    ipoteka_about: () => {
        ym(67008322, "reachGoal", "ipoteka_about");
    },
    strahovanie_about: () => {
        ym(67008322, "reachGoal", "strahovanie_about");
    },
    hochu_dom: () => {
        ym(67008322, "reachGoal", "hochu_dom");
    },
};

document.addEventListener("DOMContentLoaded", (evt) => {
    const modalsConfig = {
        errorHander: "",
        historyLog: [],
    };
    const modalsState = {
        isActive: false,
        additionalForm: {},
        subject: null,
    };
    const allForm = document.querySelectorAll(".modal__form");
    const all_close_buttons = document.querySelectorAll(".modal__close");

    document.addEventListener(
        "click",
        (evt) => {
            if (evt.target.dataset.modal_id) {
                const modal_id = evt.target.dataset.modal_id;
                const currModal = document.getElementById(modal_id);

                // add more new FormData
                if (evt.target.dataset.additional_form) {
                    const form_id = evt.target.dataset.additional_form;
                    modalsState.additionalForm = new FormData(
                        document.getElementById(`${form_id}`)
                    );
                    if (modalsState.additionalForm.has('mortgage')){
                        modalsState.additionalForm.set(
                            'mortgage',
                            document.getElementById(`${form_id}`).querySelector('.dropdown-select-selected').getAttribute('name')
                            );
                        }
                } else {
                    modalsState.additionalForm = {};
                }
                
                
                // yandex metrik
                if (evt.target.dataset.ym) {
                    const form_ym = evt.target.dataset.ym;
                    modalsConfig.ym = form_ym;
                } else {
                    modalsConfig.ym = null;
                }
                
                
                // set subject
                if (evt.target.getAttribute("subject") !== null) {
                    modalsState.subject = evt.target.getAttribute("subject");
                }
                else if (evt.target.textContent) {
                    modalsState.subject = evt.target.textContent.trim();
                }
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
        modalsState.subject = null;
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
            if (modalsState.subject !== null) {
                userForm.append('subject', modalsState.subject);
            }
            const beforeHtml = evt.submitter.innerHTML // value before
            const load = '<svg height="31px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ellipsis"> <!--circle(cx="16",cy="50",r="10")--> <circle cx="84" cy="50" r="0" fill="#ffffff"> <animate attributeName="r" values="10;0;0;0;0" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> <animate attributeName="cx" values="84;84;84;84;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> </circle> <circle cx="16" cy="50" r="9.73158" fill="#ffffff"> <animate attributeName="r" values="0;10;10;10;0" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="-1.3s"></animate> <animate attributeName="cx" values="16;16;50;84;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="-1.3s"></animate> </circle> <circle cx="84" cy="50" r="0.268423" fill="#ffffff"> <animate attributeName="r" values="0;10;10;10;0" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="-0.65s"></animate> <animate attributeName="cx" values="16;16;50;84;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="-0.65s"></animate> </circle> <circle cx="83.0874" cy="50" r="10" fill="#ffffff"> <animate attributeName="r" values="0;10;10;10;0" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> <animate attributeName="cx" values="16;16;50;84;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> </circle> <circle cx="49.0874" cy="50" r="10" fill="#ffffff"> <animate attributeName="r" values="0;0;10;10;10" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> <animate attributeName="cx" values="16;16;16;50;84" keyTimes="0;0.25;0.5;0.75;1" keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1" calcMode="spline" dur="2.6s" repeatCount="indefinite" begin="0s"></animate> </circle> </svg>';
            evt.submitter.innerHTML = load;
            evt.submitter.setAttribute('disabled', 'true');
            sender(userForm).then((res) => {
                // общяя метрка для всех форм
                ym(67008322, "reachGoal", "leads");
                _tmr.push({ type: 'reachGoal', id: 3366612, goal: 'lead'});
                // метрика для каждой кнопки
                if (modalsConfig.ym !== null) {
                    const countersFunction = ymData[`${modalsConfig.ym}`];
                    countersFunction();
                }
                const currForm = evt.target.parentNode.parentNode;
                const thxMess = currForm.nextElementSibling;
                currForm.style.display = "none";
                thxMess.style.display = "flex";
            });
        });
    });
});
