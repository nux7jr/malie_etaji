import sender from "../general/sender";

document.addEventListener("DOMContentLoaded", (evt) => {
    const projectReview = document.querySelector(".project-review");
    projectReview.addEventListener("submit", (evt) => {
        evt.preventDefault();

        sender(projectReview).then((res) => {
            ym(67008322, "reachGoal", "leads");
            const form = document.querySelector(".datepiker__user-info");
            const thx = document.querySelector(".review__thx");
            form.style.display = "none";
            thx.style.display = "block";
        });
    });
});
