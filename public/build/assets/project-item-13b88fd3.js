import{S as e}from"./swiper-bundle.min-17f9adeb.js";import{i as s}from"./project-item-5c3e1fdf.js";s(e);new e(".project-item__swiper",{slidesPerView:1,navigation:{nextEl:".project-item__next",prevEl:".project-item__prev"}});new e(".about-project__swiper",{autoplay:{delay:5e3,disableOnInteraction:!1},loop:!0,pagination:{clickable:!0,el:".about-project__pagination"}});new e(".project-mortgage__swiper",{slidesPerView:4,spaceBetween:50,navigation:{nextEl:".project-mortgage__next",prevEl:".project-mortgage__prev"}});new e(".facade-swiper",{slidesPerView:1,autoplay:{delay:5e3,disableOnInteraction:!1},pagination:{clickable:!0,el:".facade-pagination"}});document.addEventListener("DOMContentLoaded",p=>{const a=document.querySelectorAll(".project-preview__item"),n=document.querySelectorAll(".project-preview__button");function i(t,o){o.forEach(r=>{r.style.display="none"}),console.log(t),t.style.display="flex"}n.forEach(t=>{t.addEventListener("click",o=>{n.forEach(l=>{l.classList.remove("project-preview__button-active")}),o.target.classList.add("project-preview__button-active");const r=o.target.dataset.filter,c=document.querySelector(`.${r}`);i(c,a)})})});
