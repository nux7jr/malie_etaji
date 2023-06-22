import sender from "../../general/sender";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import { initReels } from "../../components/reels";
import "fslightbox";
initReels(Swiper);

document.addEventListener("DOMContentLoaded", (evt) => {
    const subForm = document.querySelector(".sub-form");
    const subThx = document.querySelector(".sub__thx");
    console.log("LOAD!");
    subForm.addEventListener("submit", (evt) => {
        evt.preventDefault();
        sender(subForm).then((res) => {
            if (res.status == 404) {
                console.log(err);
            }
            subForm.style.display = "none";
            subThx.style.display = "block";
        });
    });
});
