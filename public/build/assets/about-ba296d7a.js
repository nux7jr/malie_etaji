import{S as a}from"./swiper-bundle.min-43b74ea1.js";import{i as c}from"./certificates-b8134150.js";import"./feedback-706639a7.js";c(a);ymaps.ready(p);function p(){var e=new ymaps.Map("map-container",{center:[56.142298,93.15997],zoom:10},{searchControlProvider:"yandex#search"}),t=new ymaps.ObjectManager({clusterize:!0,gridSize:32,clusterDisableClickZoom:!0});t.objects.options.set("preset","islands#greenDotIcon"),t.clusters.options.set("preset","islands#greenClusterIcons"),e.geoObjects.add(t),e.behaviors.disable("scrollZoom"),e.controls.remove("geolocationControl"),e.controls.remove("trafficControl"),e.controls.remove("typeSelector"),e.controls.remove("fullscreenControl"),e.controls.remove("searchControl");async function r(){const n=await(await fetch("/geoMaps.json")).json();t.add(n)}r()}new a(".photo-gallery__swiper",{slidesPerView:1,spaceBetween:50,pagination:{el:".photo-pagination",clickable:!0},loop:!0,navigation:{nextEl:".photo-gallery__button-next",prevEl:".photo-gallery__button-prev"},breakpoints:{992:{slidesPerView:3,spaceBetweenSlides:50}}});new a(".your-house__swipers",{slidesPerView:1,spaceBetween:50,loop:!0,navigation:{nextEl:".your-house__button-next",prevEl:".your-house__button-prev"},breakpoints:{1440:{slidesPerView:4,spaceBetweenSlides:30}}});document.addEventListener("DOMContentLoaded",()=>{const e=[...document.querySelectorAll(".services-filters__button")],t=[...document.querySelectorAll(".services-filters__item")],r=document.querySelector(".services-filters__heading");function i(s){s.forEach(o=>{o.style.display="none"})}function n(s){s.forEach(o=>{o.classList.remove("services-filters__button--active")})}e.forEach(s=>{s.addEventListener("click",o=>{n(e),i(t),o.target.classList.add("services-filters__button--active"),r.innerHTML=o.target.dataset.title,t.forEach(l=>{l.classList.contains(o.target.dataset.filter)&&(l.style.display="flex")})})})});
