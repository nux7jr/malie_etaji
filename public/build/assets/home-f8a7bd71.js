import{S as i}from"./swiper-bundle.min-17f9adeb.js";import{i as o}from"./feedback-9e57aa4b.js";import{i as r}from"./project-item-5c3e1fdf.js";import{i as d}from"./trusted-191878d4.js";import"./index-706639a7.js";document.addEventListener("DOMContentLoaded",()=>{const e=[...document.querySelectorAll(".auto-play")];e.forEach(t=>{t.addEventListener("mouseover",n=>{const a=n.target.querySelector(".auto-play__video");a!==null&&a.removeAttribute("hidden")})}),e.forEach(t=>{t.addEventListener("mouseleave",n=>{n.target.querySelector(".auto-play__video").setAttribute("hidden","hidden")})})});o(i);r(i);d(i);new i(".offer-swiper",{autoplay:{delay:5e3,disableOnInteraction:!1},loop:!0,pagination:{clickable:!0,el:".offer-slide__pagination"}});new i(".services-swiper",{slidesPerView:"auto",centeredSlides:!0,navigation:{nextEl:".services-button-next",prevEl:".services-button-prev"}});const l=document.querySelectorAll(".build__button"),u=document.querySelectorAll(".build-slide");function c(){l.forEach(e=>{e.classList.remove("build__button--active")})}l.forEach(e=>{e.addEventListener("click",t=>{c(),t.target.classList.add("build__button--active");const n=t.target.getAttribute("data-filter");u.forEach(a=>(a.style.display="none",n=="all"&&(a.style.display="block"),a.classList.contains(n)&&(a.style.display="block"),s.updateSize(),s.updateSlides(),s.updateProgress(),s.updateSlidesClasses(),s.slideTo(0),s.scrollbar.updateSize(),!1))})});const s=new i(".build-swiper",{observer:!0,initialSlide:0,navigation:{nextEl:".build-button-next",prevEl:".build-button-prev"},pagination:{clickable:!0,el:".build__pagination",type:"fraction",renderFraction:function(e,t){return'<span class="'+e+'"></span> из <span class="'+t+'"></span>'}}});new i(".image-swiper",{autoplay:{delay:5e3,disableOnInteraction:!1,stopOnLastSlide:!1,waitForTransition:!1},pagination:{clickable:!0,el:".image__pagination"}});const p=["1 этап","2 этап","3 этап","4 этап","5 этап","6 этап","3 этап"];new i(".stage-swiper",{pagination:{el:".stage-pagination",clickable:!0,renderBullet:function(e,t){return'<span class="'+t+'">'+p[e]+"</span>"}},navigation:{nextEl:".stage-button-next",prevEl:".stage-button-prev"}});new i(".spec-swiper",{slidesPerView:1,spaceBetween:60,pagination:{clickable:!0,el:".spec-pagination"},navigation:{nextEl:".spec-button-next",prevEl:".spec-button-prev"},breakpoints:{999:{slidesPerView:3,spaceBetweenSlides:50}}});
