import{i as f}from"./nouislider-1ddc2e5b.js";import{S as _}from"./swiper-bundle.min-43b74ea1.js";import{i as S}from"./project-item-5c3e1fdf.js";S(_);const m=document.querySelector(".project-wrapper");function j(t){t.sort((e,o)=>e.price_kit>o.price_kit?1:e.price_kit<o.price_kit?-1:0),Window.data=t}function w(t){t.sort((e,o)=>e.price_kit<o.price_kit?1:e.price_kit>o.price_kit?-1:0),Window.data=t}function v(){if(Window.data.length!==0){const t=document.querySelector(".quantity-obj");t.innerHTML=" "+Window.data.length+" ",m.innerHTML="",Window.data.forEach(e=>{let o=`
            <article class="project-item">
            <div class="swiper project-swiper">
                <div class="swiper-wrapper">
                    ${e.big_slider_images.map(c=>'<div class="swiper-slide"><div class="project-slide" style="background-image: url('+c+')"></div></div>').join("")}
                </div>
                <div class="swiper-pagination pagination-swiper"></div>
            </div>
            <div class="project-item__wrapper dark">
                <div class="project-item__info">
                    <h2 class="project-item__heading">
                    ${e.name}
                    </h2>
                    <p class="project-item__price">${e.price_small}</p>
                </div>
                <hr class="project-item__hr" />
                <div class="project-item__hidden">
                    <div class="house-info">
                        <p class="house-info__paraf">${e.item_info.square} м2</p>
                        <p class="house-info__paraf">${e.formated_info.bedrooms}</p>
                        <p class="house-info__paraf">${e.formated_info.bathrooms}</p>
                        <p class="house-info__paraf">${e.formated_info.floors}</p>
                    </div>
                    <div class="house-tag">
                    ${e.tags.map(c=>'<p class="house-tag__item">'+c+"</p>").join("")}
                    </div>
                </div>
                <hr class="project-item__hr" />
                <div class="project-item__option">
                    <a class="default__button" href="/projects/${e.id}">Подробнее</a>
                    <button class="default__button project-item__call">Хочу такой дом</button>
                </div>
            </div>
        </article>
        `;m.innerHTML+=o,b()})}else y()}function y(){const t=document.querySelector(".quantity-obj");t.innerHTML=" 0 ";const e="<div>По заданым параметрам нет домов</div>";m.innerHTML=e}function b(){new _(".project-swiper",{pagination:{clickable:!0,el:".pagination-swiper"}});const t=document.querySelectorAll(".project-item__info"),e=document.querySelectorAll(".project-item");t.forEach(o=>{o.addEventListener("mouseover",c=>{const s=c.target.closest(".project-item");s.classList.add("project-item--active");const n=s.querySelectorAll(".project-slide");s.querySelector(".project-swiper").classList.add("project-slide--acitve"),n.forEach(a=>{a.classList.add("project-slide--acitve")})})}),e.forEach(o=>{o.addEventListener("mouseleave",c=>{const s=c.target.closest(".project-item");s.classList.remove("project-item--active");const n=s.querySelectorAll(".project-slide");s.querySelector(".project-swiper").classList.remove("project-slide--acitve"),n.forEach(a=>{a.classList.remove("project-slide--acitve")})})})}const g=()=>{const t=document.querySelector(".rangees"),e=document.querySelector(".rangees-square");f(t,{connect:!0,behaviour:"tap",start:[9e5,157e5],range:{min:[9e5],max:[157e5]},format:{from:function(r){return Number(r)},to:function(r){return(Math.round(r)/1e6).toFixed(1).toString().replace(".",",")}}}),f(e,{connect:!0,behaviour:"tap",start:[42,250],range:{min:[42],max:[250]},format:{from:function(r){return Number(r)},to:function(r){return Math.round(r/10)*10}}}),e.noUiSlider.set(["42","250"]),t.noUiSlider.set(["900000","15700000"]);const s=[document.querySelector(".formatting-end"),document.querySelector(".formatting-start")],n=[document.querySelector(".hide-end"),document.querySelector(".hide-start")];t.noUiSlider.on("update",function(r,i,p){const d=r[i].replace(",",".");n[i].value=d,s[i].innerHTML=r[i]});const u=[document.querySelector(".square-end"),document.querySelector(".square-start")],a=[document.querySelector(".square-hide-end"),document.querySelector(".square-hide-start")];e.noUiSlider.on("update",function(r,i,p){const d=r[i];a[i].value=d,u[i].innerHTML=r[i]});const l=document.querySelector(".filter__form"),h=document.querySelector(".cls__button"),q=document.querySelector(".dropdown-select-items");l.addEventListener("submit",async r=>{r.preventDefault();const p=await(await fetch("/api/houses",{method:"POST",body:new FormData(l)})).json();Window.data=[],p.data.forEach(d=>{Window.data.push(d)}),v()}),h.addEventListener("click",r=>{r.preventDefault(),l.reset(),t.noUiSlider.set(["900000","15700000"]),e.noUiSlider.set(["42","250"]),q.firstChild.click()})},L=()=>{document.querySelectorAll(".project-info__sort .dropdown-select-items div").forEach(e=>{e.addEventListener("click",o=>{document.querySelector("select[name='house-short']").value==="Сначала дешевле"?j(Window.data):w(Window.data),v()})})},k=()=>{g(),L()};window.addEventListener("DOMContentLoaded",k);
